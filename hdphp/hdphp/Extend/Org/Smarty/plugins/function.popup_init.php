<?php
/**
 * Smarty Extend
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty {popup_init} function Extend
 *
 * Type:     function<br>
 * Name:     popup_init<br>
 * Purpose:  initialize overlib
 * @link http://Smarty.php.net/manual/en/Language.function.popup.init.php {popup_init}
 *          (Smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param array
 * @param Smarty
 * @return string
 */
function smarty_function_popup_init($params, &$smarty)
{
    $zindex = 1000;
    
    if (!empty($params['zindex'])) {
        $zindex = $params['zindex'];
    }
    
    if (!empty($params['src'])) {
        return '<div id="overDiv" style="position:absolute; visibility:hidden; z-index:'.$zindex.';"></div>' . "\n"
         . '<script type="text/javascript" Language="JavaScript" src="'.$params['src'].'"></script>' . "\n";
    } else {
        $smarty->trigger_error("popup_init: missing src parameter");
    }
}

/* vim: set expandtab: */

?>
