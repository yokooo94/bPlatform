<?php

/**
 * Контроллер CartController
 */
class CabinetController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {        
        //Тест библиотеки RB
        User::add('Тестовый Пользоватлеь','test@test.com','test');
        
        // Подключаем вид
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }
}