<?php 

class MainController extends CoreController {

    public function home() {
        $this->show('home');
    } 

    public function creators() {
        $this->show('creators');
    }

    public function error404() {
        var_dump("Erreur 404");
    }

}