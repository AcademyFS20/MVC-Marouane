<?php

namespace Chat;

use \Models\Message;
use Providers\Renderer;
use Providers\Session;

class MessageController
{
    private $con;

    public function __construct()
    {
        $this->con = new UserController();
    }      

    public function indexb()
    {   
        if (Session::isSession('email')) {
            Renderer::render('chat', 'dashboard');
            printArray(Session::getFlash('email'));

        } else {
            echo 'can not access the data';
        }
    }
    // debug($this->connected->getUserConnected('test@test.ma'));

}
