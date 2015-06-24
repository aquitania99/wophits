<?php
//require_once 'library/processForm.php';
class ArtistController {

    public $artist;
    public $artistData;
    
    public function indexAction()
    {
        require_once 'library/processForm.php';
        if (empty($error))
        {
            if (isset($_SESSION['country']))
            {
                $this->country = $_SESSION['country'];
            }
            else $this->country = "";
//            $this->country = $_SESSION['country'];
            $artist = $get['name'];
            $this->artistData = $artistData;
            $button = '<a class="btn btn-default" href="country" role="button"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back to <?= $country;?> results</a>';
            return new View('artist',['name' =>  $artist, 'title' => '<small> <strong>Top Tracks</strong> in '.$this->country.'!</small>', 'country'=>$this->country, 'artistData'=>$this->artistData, 'button' => $button]);
        } 
        else 
        {
            $this->error = $error;
            return new View('artist',['name' =>  $artist, 'title' => '<small> <strong>Top Tracks</strong> in '.$this->country.'!</small> in '.$this->country, 'country'=>$this->country, 'artistData'=>$this->artistData, 'artistDataError'=>$this->error['message'], 'button' => $button]);
        }
    }
    
    public function searchAction()
    {
        require_once 'library/processForm.php';
        if (empty($error))
        {
            unset($_SESSION['country']);
            $country = '';
            $artist = $get['name'];
            $this->artistData = $artistData;
            $button = '<a class="btn btn-default" href="/" role="button"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back to home</a>';
            return new View('artist',['name' =>  $artist, 'title' => '<small> Top Tracks!</small>','country'=>$country, 'artistData'=>$this->artistData, 'button' => $button]);
        }
        else 
        {
            $this->error = $error;
            return new View('artist',['title' => $artist.'<small> Top Tracks!</small>','country'=>$country, 'artistData'=>$this->artistData, 'artistDataError'=>$this->error['message'], 'button' => $button]);
        }
        
    }
}