<?php

class CountryController {

    public $country;
    public $musicData;
    public $error;
    public function indexAction()
    {
        require 'library/processForm.php';
        if (empty($error)){
            $this->country = $_SESSION['country'];
            $this->musicData = $_SESSION['musicData'];
            return new View('country',['title' => 'Search by Country', 'country'=>$this->country, 'lastFmData'=>$this->musicData]);
        } 
        else 
        {
            $this->error = $error;
            return new View('country',['title' => 'Search by Country', 'country'=>$country, 'lastFmData'=>'','lastFmDataError'=>$this->error['message']]);
        }
        
    }

}