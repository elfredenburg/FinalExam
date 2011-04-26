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


  class BasicController extends Zend_Controller_Action
  {


      public function init()
      {

      }

      public function page1Action()
      {
        $this->getScripts('page1.phtml');
      }

      public function page2Action()
      {
        $this->getScripts('page2.phtml');
      }

      private function getScript($s)
      {
        header("Content-Type: text/html;charset=utf-8");
        require_once APP_PATH . SLASH . 'views' . SLASH . $s;
      }

  }