<?php
//
$post = filter_input_array(INPUT_POST);
//$data   = array();    // array to pass back data
if ($post['submit'] == 'country') //Country to search for.
{
    require 'apiConn.php';
    $country = $post['inputCountry'];
    //
    $result = getArtistsByCountry($country);
    $musicData = json_decode($result,true);
    // show a message of success and provide a true success variable
//    if (!empty($musicData))
//    {
//        $data['success'] = true;
//        $data['message'] = 'Success!';
//        $data['response'] = $musicData;
//    }
//    else
//    {
//        $data['success'] = false;
//        $data['location'] = 'NA';
//    }
}
// return all our data to an AJAX call
//print json_encode($data);