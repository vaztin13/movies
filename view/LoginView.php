<?php

class LoginView {

    private $smarty;


    function __construct() {
        $this->smarty = new Smarty();
    }

    function showLogin() { 
        $this->smarty->assign('indexTitle', 'Log In');
        $this->smarty->display('templates/login.tpl');
    }

}