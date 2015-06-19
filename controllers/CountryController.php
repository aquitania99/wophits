<?php

class CountryController {

    public $country;
    public $musicData;
    
    public function indexAction()
    {
        require 'library/processForm.php';
        $this->country = $_SESSION['country'];
        $this->musicData = $_SESSION['musicData'];
        return new View('country',['title' => 'Search by Country', 'country'=>$this->country, 'lastFmData'=>$this->musicData]);
    }

}