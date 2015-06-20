<?php
// Start the session
session_start();
//
require 'MusicApi.php';
//
$get = filter_input_array(INPUT_GET);
//
$searchMusic = new MusicApi(); 
$post = filter_input_array(INPUT_POST);
//$data   = array();    // array to pass back data
if ($post['submit'] == 'country') //Country to search for.
{
    $country = $post['inputCountry'];
    $result = $searchMusic->getArtistsByCountry($country);
    $musicData = json_decode($result,true);
    $_SESSION['country'] = $country;
    if (isset($musicData['error'])){
        $error = $musicData;
        return $error;
        session_unset();
    }
    else {
        $_SESSION['musicData'] = $musicData;
    }
}
elseif ($get['url'] == 'artist') //Artist to search for.
{
    $artistName = str_replace(' ', '%20', $get['name']);
    $_SESSION['name'] = $artistName;
    $result = $searchMusic->getArtists($artistName);
    $artistData = json_decode($result,true);
    if (isset($artistData['error'])){
        $error = $artistData;
        return $error;
        session_unset();
    }
    else {
        return $artistData;
    }
}
