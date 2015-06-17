<?php
require 'config.inc';
//
//method=geo.gettopartists&country=spain&api_key=2a4f91303da4a76c11f4532c10c866c5&format=json
function getArtistsByCountry($country) 
{
    $country = $country;
    $method = 'geo.gettopartists';
    $url = CONF_API_URL.'method='.$method.'&country='.$country.'&api_key='.CONF_API_KEY.'&format=json';
    // Use Curl to interact with the API
    $response = curl($url);
    return $response;
}

function curl($url)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, true);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $url);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 0);
    // CURLOPT_RETURNTRANSFER will return the response
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)');
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    //
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, array($header));
    /**/
//    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    /**/
	//  Check for Errors
    if (curl_errno($curl))
    {
        print curl_error($curl);
    } 
    else {	
        ///
        $response = curl_exec($curl);
        //
        curl_close($curl);
        // Confirm that the request was transmitted to the Yahoo! Image Search Service  
        if(!$response) 
        {  
           die("Request to Last.fm failed and no response was returned.");  
        } 
        //
        if (!($json = strstr($response, '{"'))) 
        {  
            $json = null;  
	}
        return json_encode($json);
    }
}