<?php

namespace App\Controllers;

use SON\DI\Container;
use SON\Controller\Action;

class IndexController extends Action
{
    public function index()
    {
        $client = Container::getModel("Client");
        $this->view->clients = $client->fetchAll();
        $this->render("index");
    }

    public function contact()
    {
        $client = Container::getModel("Client");
        $this->view->clients = $client->find(2);
        $this->render("contact");
    }
}
?>