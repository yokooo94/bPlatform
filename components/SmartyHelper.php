<?php

// Подключение библиотеки Smarty - https://www.smarty.net/
require 'libs/Smarty/Smarty.class.php';

/**
 * Класс SmartyHelper
 * Компонент для работы с шаблонизатором
 */
class SmartyHelper
{
    /**
     * Создание шаблонизатора
     *
     * @return Smarty
     */
    public static function create()
    {
        $smarty = new Smarty();

        //Путь к папке cache
        $smarty->compile_dir = ROOT . '/views/cache';

        return $smarty;
    }
}
