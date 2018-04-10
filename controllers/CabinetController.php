<?php

/**
 * Контроллер CabinetController
 */
class CabinetController
{

    /**
     * Action для личного кабинета
     */
    public function actionIndex()
    {

        //Тест библиотеки RB
        User::add('Тестовый Пользоватлеь', 'test@test.com', 'test');

        //Тест библиотеки Smarty
        $smarty = SmartyHelper::create();
        $title = "Личный кабинет";
        $smarty->assign("Title", $title);

        // Подключаем вид
        $smarty->display(ROOT . '/views/cabinet/index.tpl');

        return true;
    }

    /**
     * Action для настроек личного кабинета
     */
    public function actionSettings()
    {

        //Тест библиотеки RB
        User::add('Тестовый Пользоватлеь2', 'test2@test.com', 'test2');

        // Тест библиотеки Smarty
        $smarty = SmartyHelper::create();
        $title = "Настройки личного кабинета";
        $smarty->assign("TitleSettings", $title);

        // Подключаем вид
        $smarty->display(ROOT . '/views/cabinet/settings.tpl');

        return true;
    }
}
