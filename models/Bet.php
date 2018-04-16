<?php

/**
 * Класс Bet - модель для работы со ставками
 */
class Bet
{
    /**
     * Название таблицы
     */
    const TABLE_NAME = 'bet';

    /**
     * Получить список ставок пользователя
     *
     * @param String $userId
     * @return List<Bet>
     */
    public static function getBets($userId)
    {
        //Делаем соединение с базой данных
        Database::connect();

        return R::findAll(Bet::TABLE_NAME, ' user_id = ? ', [$userId]);
    }

    /**
     * Получить ставку
     *
     * @param String $betId
     * @return Bet
     */
    public static function getBet($betId)
    {
        //Делаем соединение с базой данных
        Database::connect();

        return R::load(Bet::TABLE_NAME, $betId);
    }

    /**
     * Получить контент ставки
     *
     * @param String $betId
     * @return List<BetContent>
     */
    public static function getBetContent($betId)
    {
        //Делаем соединение с базой данных
        Database::connect();

        return R::findAll('betcontent', ' bet_id = ? ', [$betId]);
    }
}
