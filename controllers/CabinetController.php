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

        //Текущий пользователь
        $currentUser = User::getUser($userId);
        $currentUser->ownUserFunction;


        $smarty = SmartyHelper::create();
        $title = "Настройки личного кабинета";
        $smarty->assign("TitleSettings", $title);

        $pathListFunction = ROOT . "/views/cabinet/includes/listFunction";
        $smarty->assign("PathListFunction", $pathListFunction);
        $smarty->assign("User", $currentUser);

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

    /**
     * Action для добавления ставки
     */
    public function actionAddBet()
    {
        //Проверка авторизации
        User::isGuest();

        $userId = $_SESSION['userId'];

        //Текущий пользователь
        $currentUser = R::load('user', $userId);

        if (!empty($_POST)) {

            $betContent1 = R::dispense('betcontent');
            $betContent1->event = R::load('event',$_POST['event']);
            $betContent1->bettype = R::load('bettype',$_POST['bettype']);
            $betContent1->coefficient = 2.0;
            $betContent1->status = "Выигрыш";
            R::store($betContent1);
    
            $bet = R::dispense('bet');
            $bet->user = $currentUser;
            $bet->amount = 1000.0;
            $bet->coefficient = 5.0;
            $bet->status = "В ожидании";
            $bet->ownBetcontent = array($betContent1);
            R::store($bet);

            header("Location: /cabinet/bets");            
        }

        $smarty = SmartyHelper::create();
        $title = "Добавление ставки";
        $smarty->assign("TitleAddBet", $title);
        $smarty->assign("User", $currentUser);

        // Подключаем вид
        $smarty->display(ROOT . '/views/cabinet/addBet.tpl');

        return true;
    }

    /**
     * Action для списка ставок в личном кабинете
     */
    public function actionBets()
    {
        //Проверка авторизации
        User::isGuest();

        $userId = $_SESSION['userId'];

        //Текущий пользователь
        $currentUser = User::getUser($userId);
        $currentUser->ownBet;

        $smarty = SmartyHelper::create();
        $title = "Список ставок";
        $smarty->assign("TitleBets", $title);
        $smarty->assign("User", $currentUser);

        // Подключаем вид
        $smarty->display(ROOT . '/views/cabinet/bets.tpl');

        return true;
    }

    /**
     * Action для просмотра ставки в личном кабинете
     */
    public function actionBet($betId)
    {
        //Проверка авторизации
        User::isGuest();

        $userId = $_SESSION['userId'];

        //Текущий пользователь
        $currentUser = User::getUser($userId);
        $bet = $currentUser->ownBet[$betId];        

        $smarty = SmartyHelper::create();
        $smarty->assign("User", $currentUser);
        $smarty->assign("Bet", $bet);

        // Подключаем вид
        $smarty->display(ROOT . '/views/cabinet/bet.tpl');

        return true;
    }
}
