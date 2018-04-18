<?php

return array(
    //Кабинет
    'cabinet/bets/add' => 'cabinet/addBet', //actionAddBets в CabinetController
    'cabinet/bets/([0-9]+)' => 'cabinet/bet/$1', //actionBets в CabinetController
    'cabinet/bets' => 'cabinet/bets', //actionBets в CabinetController
    'cabinet/settings' => 'cabinet/settings', // actionSettings в CabinetController
    'cabinet/signIn' => 'cabinet/signIn', // actionIndex в SignInController
    'cabinet/signUp' => 'cabinet/signUp', // actionIndex в SignUpController
    'cabinet/logOut' => 'cabinet/logOut', // actionIndex в LogOutController
    'cabinet' => 'cabinet/index', // actionIndex в CabinetController
);
