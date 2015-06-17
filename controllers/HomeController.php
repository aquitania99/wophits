<?php

class HomeController {

    public function indexAction()
    {
        return new View('home', ['title' => 'Search by Country']);
    }

}
