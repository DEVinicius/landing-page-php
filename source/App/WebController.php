<?php

namespace Source\App;

use League\Plates\Engine;

class WebController{
    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__."/../../theme/View","php");
    }

    public function home(): void{
       echo  $this->view->render("home", ["title" => "Home"]);
    }

    public function error($data): void{
        echo  $this->view->render("error", [
            "title" => "Erro",
            "erro" => $data['errcode']
        ]);
    }

}