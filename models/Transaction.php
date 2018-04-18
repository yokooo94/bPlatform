<?php

/**
 * Класс Transaction - модель для работы с транзакциями (денежными операциями)
 */
class Transaction
{
    /**
     * Название таблицы
     */
    const TABLE_NAME = 'transaction';

    /**
     * Создание новой транзакции
     * 
     * @param $_POST $data
     * @return Error
     */
    public static function create($data)
    {
        //Делаем соединение с базой данных
        Database::connect();
        $error = null;

        try
        {
            //Подготовка данных
            $transaction = R::dispense(Transaction::TABLE_NAME);
            $transaction->bet_id = '1';
            $transaction->user_id = '1';
            $transaction->status_id = '1';
            $transaction->amount = '100';
            $transaction->date = 'timestamp';
            $transaction->description = 'desc';
        } 
        catch (Exception $e) 
        {

        }
        return $error;
    }

}