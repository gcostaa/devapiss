<?php

require_once '/var/www/html/api/app/model/keys/accessKeys.php';
require_once '/var/www/html/api/app/view/view.php';


function get(string $credentialId){

    try{

        $keys = new AccessKeys();
    
        $url = "https://".$keys->getValtIp()."/iso/coe/senha/".$credentialId."?oauth_consumer_key=".$keys->getOauthConsumerKey().
        "&oauth_token=".$keys->getOauthToken()."&oauth_signature=-";
    
        $request = curl_init($url);
    
        curl_setopt($request, CURLOPT_URL, $url);
    
        curl_setopt($request,CURLOPT_RETURNTRANSFER,1);
    
        curl_setopt($request, CURLOPT_SSL_VERIFYHOST, FALSE);
    
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);
    
        $response = curl_exec($request);
        
        $view = new View($response);

        echo ("<br><br><br>");

        //var_dump($view);

        curl_close($request);
    
    } catch(Exception $e){
    
        echo("Erro ".$e->getMessage()."\n");
    }
}

