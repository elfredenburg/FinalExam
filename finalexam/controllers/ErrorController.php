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

  class ErrorController extends Zend_Controller_Action
  {

    public function errorAction()
    {

      if( headers_sent() == FALSE )
        header('HTTP/1.x 404 Not Found');

      echo 'Page Missing: 404';

    }

  }