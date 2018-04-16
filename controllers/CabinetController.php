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

        //Проверка авторизации
        User::isGuest();

        $userId = $_SESSION['userId'];

        //Текущий пользователь
        $currentUser = User::getUser($userId);

        $smarty = SmartyHelper::create();
        $title = "Личный кабинет пользователя : " . $currentUser["login"];
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

        //Проверка авторизации
        User::isGuest();

        $userId = $_SESSION['userId'];

        //Маппинг данных пользователь - функционал
        $userMappingFunction = User::getUserFunction($userId);

        $smarty = SmartyHelper::create();
        $title = "Настройки личного кабинета";
        $smarty->assign("TitleSettings", $title);

        $pathListFunction = ROOT . "/views/cabinet/includes/listFunction";
        $smarty->assign("PathListFunction", $pathListFunction);
        $smarty->assign("UserMappingFunction", $userMappingFunction);

        // Подключаем вид
        $smarty->display(ROOT . '/views/cabinet/settings.tpl');

        return true;
    }

    /**
     * Action для входа в личный кабинет
     */
    public function actionSignIn()
    {
        //Ошибка авторизации
        $error = null;

        if (!empty($_POST)) {

            //Проверка авторизации
            $check = User::checkUser($_POST);
            if (!is_null($check)) {
                $error = $check;
            }
        }

        $smarty = SmartyHelper::create();
        $smarty->assign("Error", $error);

        // Подключаем вид
        $smarty->display(ROOT . '/views/cabinet/signIn.tpl');

        return true;
    }

    /**
     * Action для регистрации в личный кабинет
     */
    public function actionSignUp()
    {
        //Ошибка регистрации
        $error = null;
        if (!empty($_POST)) {

            //Проверка и добавление пользователя
            $check = User::register($_POST);
            if (!is_null($check)) {
                $error = $check;
            }
        }

        $smarty = SmartyHelper::create();
        $smarty->assign("Error", $error);

        // Подключаем вид
        $smarty->display(ROOT . '/views/cabinet/signUp.tpl');

        return true;
    }

    /**
     * Action для выхода из личного кабинета
     */
    public function actionLogOut()
    {

        // Удаляем информацию о пользователе из сессии
        unset($_SESSION['userId']);
        unset($_SESSION['token']);

        // Перенаправляем пользователя на вход в личный кабинет
        header("Location: /cabinet/signIn");

        return true;
    }
}
