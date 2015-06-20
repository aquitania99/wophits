<?php

class ArtistController {

    public $artist;
    public $artistData;
    
    public function indexAction()
    {
        require 'library/processForm.php';
        $this->error = $error;
        if (!$this->error){
        $this->country = $_SESSION['country'];
        $artist = $get['name'];
        $this->artistData = $artistData;
        return new View('artist',['title' => $artist, 'country'=>$this->country, 'artistData'=>$this->artistData]);
        }
        else 
        {
            return new View('artist',['title' => $artist, 'country'=>$this->country, 'artistData'=>$this->artistData, 'artistData'=>$this->error['message']]);
        }
    }
}