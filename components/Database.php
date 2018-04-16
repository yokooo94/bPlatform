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
        $duplicate = User::getAdmin();
        if (!$duplicate) {
            Database::generateAdminUser();
            Database::generateBet();
        }
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

    /**
     * Генерация одной ставки admin
     *
     * @return void
     */
    public static function generateBet()
    {
        //Делаем соединение с базой данных
        Database::connect();

        $sport = R::dispense('sport');
        $sport->name = 'Футбол';
        R::store($sport);

        $league = R::dispense('league');
        $league->name = 'Английская Премьер-лига';
        $league->sport = $sport;
        R::store($league);

        $season = R::dispense('season');
        $season->yearOfStart = 2017;
        $season->currentTour = 1;
        $season->league = $league;
        R::store($season);

        $tour = R::dispense('tour');
        $tour->number = 1;
        $tour->season = $season;
        R::store($tour);

        $team1 = R::dispense('team');
        $team1->name = 'Арсенал';
        R::store($team1);

        $team2 = R::dispense('team');
        $team2->name = 'Челси';
        R::store($team2);

        $event1 = R::dispense('event');
        $event1->teamHome = $team1;
        $event1->teamAway = $team2;
        $event1->date = '2018-04-21 18:00:00';
        $event1->tour = $tour;
        R::store($event1);

        $team3 = R::dispense('team');
        $team3->name = 'Сток Сити';
        R::store($team3);

        $team4 = R::dispense('team');
        $team4->name = 'Эвертон';
        R::store($team4);

        $event2 = R::dispense('event');
        $event2->teamHome = $team3;
        $event2->teamAway = $team4;
        $event2->date = '2018-04-22 18:00:00';
        $event2->tour = $tour;
        R::store($event2);

        $betType1 = R::dispense('bettype');
        $betType1->name = 'Победа домашней команды';
        R::store($betType1);

        $betType2 = R::dispense('bettype');
        $betType2->name = 'Ничья';
        R::store($betType2);

        $betType3 = R::dispense('bettype');
        $betType3->name = 'Победа гостевой команды';
        R::store($betType3);

        $bet = R::dispense('bet');
        $bet->user = User::getAdmin();
        $bet->amount = 1000.0;
        $bet->coefficient = 5.0;
        $bet->status = "В ожидании";
        R::store($bet);

        $betContent1 = R::dispense('betcontent');
        $betContent1->bet = $bet;
        $betContent1->event = $event1;
        $betContent1->bettype = $betType1;
        $betContent1->coefficient = 2.5;
        $betContent1->status = "В ожидании";
        R::store($betContent1);

        $betContent2 = R::dispense('betcontent');
        $betContent2->bet = $bet;
        $betContent2->event = $event2;
        $betContent2->bettype = $betType2;
        $betContent2->coefficient = 2.0;
        $betContent2->status = "Выигрыш";
        R::store($betContent2);

    }
}
