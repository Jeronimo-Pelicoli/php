<?php

namespace SON\Controller;

abstract class Action
{
    protected $view;
    private $action;

    public function __construct()
    {
        $this->view = new \stdClass;
    }

    Protected function render($action, $layout = true)
    {
        $this->action = $action;
        if($layout == true && file_exists("../App/Views/layout.phtml")) {
            include_once "../App/Views/layout.phtml";
        } else {
            $this->content();
        }
        
    }

    protected function content()
    {
        $current = get_class($this);
        $singleClassName = strtolower((str_replace("Controller", "", str_replace("App\\Controllers\\", "", $current))));
        include_once "../App/Views/" . $singleClassName . "/" . $this->action . ".phtml";
    }
}

?>