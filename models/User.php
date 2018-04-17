<?php

/**
 * Класс User - модель для работы с пользователями
 */
class User
{
    /**
     * Название таблицы
     */
    const TABLE_NAME = 'user';

    /**
     * Добавление нового пользователя
     *
     * @param $_POST $data
     * @return Error
     */
    public static function register($data)
    {

        //Делаем соединение с базой данных
        Database::connect();
        $error = null;

        $duplicate = R::findOne(User::TABLE_NAME, ' email = ? ', [$data["email"]]);

        if (!$duplicate) {

            //Подготовка данных
            $user = R::dispense(User::TABLE_NAME);
            $user->login = $data["login"];
            $user->email = $data["email"];
            $user->password = password_hash($data["password"], PASSWORD_DEFAULT);
            $user->token = User::generateToken();

            //Сохраняем пользователя
            R::store($user);

            // Добавление информации о пользователе в сессию
            User::auth($user['id'], $user['token']);

            // Перенаправляем пользователя в личный кабинет
            header("Location: /cabinet");

        } else {
            $error = Constants::ERROR_AUTH_DUPLICATE_EMAIL;
        }

        return $error;
    }

    /**
     * Генерируем уникальный Token
     *
     * @return String
     */
    public static function generateToken()
    {
        return uniqid(rand(), true);
    }

    /**
     * Авторизация пользователя
     *
     * @param String $userId
     * @param String $token
     * @return void
     */
    public static function auth($userId, $token)
    {
        // Записываем пользователя в сессию
        $_SESSION['userId'] = $userId;
        $_SESSION['token'] = $token;
    }

    /**
     * Проверка пользователя на авторизацию
     *
     * @return boolean
     */
    public static function isGuest()
    {
        $guest = true;
        if (isset($_SESSION['userId'])) {
            $user = User::getUser($_SESSION['userId']);

            //Проверка токена
            if ($user['token'] == $_SESSION['token']) {
                $guest = false;
            }
        }
        if ($guest) {
            // Удаляем информацию о пользователе из сессии
            unset($_SESSION['userId']);
            unset($_SESSION['token']);

            // Перенаправляем пользователя на вход в личный кабинет
            header("Location: /cabinet/signIn");
        }
    }

    /**
     * Получить данные пользователя по идентификатору
     *
     * @param String $userId
     * @return User
     */
    public static function getUser($userId)
    {
        //Делаем соединение с базой данных
        Database::connect();

        return R::load(User::TABLE_NAME, $userId);
    }

    /**
     * Получить данные пользователя Admin
     *
     * @param String $userId
     * @return User[Admin]
     */
    public static function getAdmin()
    {
        //Делаем соединение с базой данных
        Database::connect();

        return R::findOne(User::TABLE_NAME, ' login = ? ', ['admin']);
    }

    /**
     * Проверка пользователя
     *
     * @param Obejct $data
     * @return Error
     */
    public static function checkUser($data)
    {

        //Делаем соединение с базой данных
        Database::connect();
        $error = null;

        $user = R::findOne(User::TABLE_NAME, ' email = ? ', [$data["email"]]);

        if ($user) {

            if (!password_verify($data['password'], $user['password'])) {
                $error = Constants::ERROR_AUTH_PASSWORD;
            } else {
                // Добавление информации о пользователе в сессию
                User::auth($user['id'], $user['token']);

                // Перенаправляем пользователя в личный кабинет
                header("Location: /cabinet");
            }
        } else {
            $error = Constants::ERROR_AUTH_EMAIL;
        }

        return $error;
    }
}
