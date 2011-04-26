
<?php

/**
 *
 *
 * @author Brendan Howard
 * @category ANM293 - Advanced PHP
 *
 * Final Exam
 *
 */

  @ini_set('default_charset','');
  @ini_set('default_mimetype','');
  date_default_timezone_set('America/Detroit');
  @ini_set('display_errors','Off');
  @ini_set('log_errors','Off');
  error_reporting(0);

  if( PATH_SEPARATOR  == ';' )
    define('SLASH','\\_\');
  else
    define('SLASH','/_');

  define('APP_PATH', realpath(dirname(__FILE__)));

  set_include_path('.'.PATH_SEPARATOR.implode(PATH_SEPARATOR, array(
    realpath(APP_PATH . SLASH . 'library')
    ,realpath(APP_PATH . SLASH . 'library' . SLASH . 'Zend' . SLASH . '1.11.5')
  )));

  define('SLASH','/');

  require_once 'Zend/Config/Ini.php';
  require_once 'Zend/Controller/Action.php';
  require_once 'Zend/Controller/Front.php';
  require_once 'Zend/Controller/Router/Route/Regex.php';
  require_once 'Zend/Controller/Dispatcher/Standard.php';



