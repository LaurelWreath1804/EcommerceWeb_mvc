<?php
require_once ROOT . DS . 'application' . DS . 'controllers' . DS . 'Controller.php';
require_once ROOT . DS . 'application' . DS . 'controllers' . DS . 'BaseController.php';

class HomeAdminController extends BaseController implements Controller{
    public function render() {
        include ROOT . DS . 'application' . DS . 'views' . DS . 'homeAdmin.php';
    }
}