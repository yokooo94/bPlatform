<?php

// Подключение библиотеки RedBeanPHP - https://redbeanphp.com/
require 'libs/RedBeanPHP/rb-mysql.php';

/**
 * Класс Database
 * Компонент для работы с базой данных
 */
class Database
{
    /**
     * Устанавливает соедлинение с базой данных
     *
     * @return void
     */
    public static function connect()
    {
        // Получаем параметры подключения из файла
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include $paramsPath;
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";

        // Проверяем и устанавливаем соединение
        if (!R::testConnection()) {
            R::setup($dsn, $params['user'], $params['password']);
        }

    }

    /**
     * Генерация данных
     *
     * @return void
     */
    public static function generateData()
    {
        Database::generateAdminUser();
    }

    /**
     * Генерация пользователя - admin [admin::admin] и функционала
     *
     * @return void
     */
    public static function generateAdminUser()
    {
        //Делаем соединение с базой данных
        Database::connect();

        $duplicate = R::findOne(User::TABLE_NAME, ' login = ? ', ['admin']);
        if (!$duplicate) {

            //Подготовка данных
            $admin = R::dispense(User::TABLE_NAME);
            $admin->login = 'admin';
            $admin->email = 'admin@admin.admin';
            $admin->password = password_hash('admin', PASSWORD_DEFAULT);
            $admin->token = User::generateToken();

            $functionOne = R::dispense('function');
            $functionOne->name = 'Личный кабинет';
            $functionOne->description = 'Описание личного кабинета';
            $functionOne->price = 250.0;
            R::store($functionOne);

            $functionTwo = R::dispense('function');
            $functionTwo->name = 'Расширенный личный кабинет';
            $functionTwo->description = 'Описание расширенного личного кабинета';
            $functionTwo->price = 500.0;

            R::store($functionTwo);

            $admin->link('user_function',
                array('status' => true, 'dateLimitation' => '2018-04-25 00:00:00'))->function = $functionOne;
            $admin->link('user_function',
                array('status' => false, 'dateLimitation' => '2018-04-25 00:00:00'))->function = $functionTwo;

            //Сохраняем пользователя
            R::store($admin);

        }
    }
}
