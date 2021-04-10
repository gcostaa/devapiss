<?php

class AccessKeys{
    

    private $oauth_consumer_key = "";
    private $oauth_signature = "";
    private $oauth_token = "";
    private $vaultIP = "";


    function __construct()
    {
        $json = file_get_contents("/var/www/html/api/config.json");
        $data = json_decode($json,true);
       
        $this->oauth_consumer_key = $data["keys"]["oauth_consumer_key"];
        $this->oauth_signature = $data["keys"]["oauth_signature"];
        $this->oauth_token = $data["keys"]["oauth_token"];
        $this->vaultIP = $data["keys"]["vault"];

    }

    public function getOauthConsumerKey(){

        $key = $this->oauth_consumer_key;

        if (empty($key)){

            echo("Consumer key não configurada");
           
        }else{
            
            return $key;
        }

    }

    public function getOauthToken(){

        $key = $this->oauth_token;

        if (empty($key)){

            echo("Token key não configurada");
           
        }else{
            
            return $key;
        }

    }

    public function getOauthSignature(){

        $key = $this->oauth_signature;

        if (empty($key)){

            echo("Signature key não configurada");
           
        }else{
            
            return $key;
        }
    }

    public function getValtIp(){

        $key = $this->vaultIP;
    
         if (empty($key)){
    
            echo("Cofre não configurada");
               
        }else{
                
            return $key;
        }

    }

}

?>