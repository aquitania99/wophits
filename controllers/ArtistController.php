<?php

class ArtistController {

    public $artist;
    public $artistData;
    
    public function indexAction()
    {
        require 'library/processForm.php';
        if (empty($error))
        {
            $this->country = $_SESSION['country'];
            $artist = $get['name'];
            $this->artistData = $artistData;
            return new View('artist',['title' => $artist, 'country'=>$this->country, 'artistData'=>$this->artistData]);
        } 
        else 
        {
            $this->error = $error;
            return new View('artist',['title' => $artist, 'country'=>$this->country, 'artistData'=>$this->artistData, 'artistDataError'=>$this->error['message']]);
        }
    }
}