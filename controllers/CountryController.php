<?php

class CountryController {

    public function indexAction()
    {
        require 'library/processForm.php';
        return new View('country',['title' => 'Search by Country','lastFmData'=>$musicData]);
    }

}