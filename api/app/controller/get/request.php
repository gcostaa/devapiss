<?php

#get local directory

if(empty($_SERVER["PWD"])){
    echo "Apache";
    require_once $_SERVER["DOCUMENT_ROOT"].'/api/app/model/keys/accessKeys.php';
    require_once $_SERVER["DOCUMENT_ROOT"].'/api/app/view/view.php';
}else{

    require_once $_SERVER["PWD"].'/app/model/keys/accessKeys.php';
    require_once $_SERVER["PWD"].'/app/view/view.php';
}


function get(string $credentialId){

    try{

        /*
        
        The AcessKeys class will obtain the access keys defined
        in config.json and deliver the values ​​for the URL request
        
        */

        $keys = new AccessKeys();
    
        $url = "https://".$keys->getValtIp()."/iso/coe/senha/".$credentialId."?oauth_consumer_key=".$keys->getOauthConsumerKey().
        "&oauth_token=".$keys->getOauthToken()."&oauth_signature=-";
    
        #initialize the method curl
        $request = curl_init();
    
        #config URL
        curl_setopt($request, CURLOPT_URL, $url);
    
        #get response
        curl_setopt($request,CURLOPT_RETURNTRANSFER,1);

        #skip certificate
        curl_setopt($request, CURLOPT_SSL_VERIFYHOST, FALSE);
    
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);
        
        #send request
        $response = curl_exec($request);
        
        /*

        The View class will return the password values, device in the
        form of text on the screen

        */

        $view = new View($response);

        #close connection
        curl_close($request);
    
    } catch(Exception $e){
    
        echo("Erro ".$e->getMessage()."\n");
    }
}

