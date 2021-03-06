<?php
require 'config.inc';
//
class MusicApi {
//method=geo.gettopartists&country=spain&api_key=2a4f91303da4a76c11f4532c10c866c5&format=json
public function getArtistsByCountry($country) 
{
    $country = $country;
    $method = 'geo.gettopartists';
    $url = CONF_API_URL."method=$method&country=$country&api_key=".CONF_API_KEY."&format=json";
    $response = $this->curlCall($url);
    return $response;
}

public function getArtists($artist) 
{
    $artist = $artist;
    $method = 'artist.gettoptracks';
    $url = CONF_API_URL."method=$method&artist=$artist&api_key=".CONF_API_KEY."&format=json";
    $response = $this->curlCall($url);
    return $response;
}

protected function curlCall($url) {
    $curl = curl_init();
    
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return $result;
}

}