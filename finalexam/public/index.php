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


  @(require('../ini.php')) or die();  
  
  $config = new Zend_Config_Ini(APP_PATH . SLASH . 'routes.ini');
  $front = Zend_Controller_Front::getInstance();
  $front->setParam('noErrorHandler', false);
  $front->setParam('noViewRenderer', true);
  $router = $front->getRouter();
  $router->addConfig($config,'routes');
  $front->run(APP_PATH . SLASH . 'controllers');