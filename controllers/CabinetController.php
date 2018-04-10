<?php

// Подключение библиотеки Smarty - https://www.smarty.net/
require 'libs/Smarty/Smarty.class.php';

/**
 * Контроллер CabinetController
 */
class CabinetController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        //Тест библиотеки RB
        // User::add('Тестовый Пользоватлеь', 'test@test.com', 'test');

        //Тест библиотеки Smarty
        $smarty = new Smarty;
        $smarty->compile_dir = ROOT . '/views/cache';

        $title = "Личный кабинет";
        $smarty->assign("Title", $title);

        $smarty->display(ROOT . '/views/cabinet/index.tpl');

        return true;
    }
}
