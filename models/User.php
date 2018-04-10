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
     * @param String $name
     * @param String $email
     * @param String $password
     * @return void
     */
    public static function add($name, $email, $password)
    {

        //Делаем соединение с базой данных
        Database::connect();

        //Подготовка данных
        $user = R::dispense(User::TABLE_NAME);
        $user->login = $name;
        $user->email = $email;
        $user->password = password_hash($password, PASSWORD_DEFAULT);
        $user->token = User::generateToken();

        //Сохраняем пользователя
        R::store($user);
    }

    /**
     * Генерируем уникальный Token
     *
     * @return Stirng
     */
    public static function generateToken()
    {
        return password_hash(uniqid(rand(), true), PASSWORD_DEFAULT);
    }

}
