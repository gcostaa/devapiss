<?php

class AccessKeys{
    

    private $oauth_consumer_key = "04a0fa8f741161278648d2ab4c56ac42060706000";
    private $oauth_signature = "-";
    private $oauth_token = "636c1fb629f01243cddb23d5c0c705d1060706038";
    private $vaultIP = "192.168.0.120";

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