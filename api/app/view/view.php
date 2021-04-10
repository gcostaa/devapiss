<?php

class View{

    private $response = [];
    private $status;

    function __construct($responseRequest)
    {

        #get response from senhasegura API request and convert to array
        $this->response = json_decode($responseRequest,true);

        #get status code
        $this->status = $this->getHttpCode($this->response);

        #displays the values ​​on the screen
        $this->display($this->response,$this->status);
          
    }


    public function display(Array $response,$statusCode){

       
        if($statusCode == 200){

            
            echo (PHP_EOL."KEY VALUES"."<br><br>".PHP_EOL);

            echo("Device.... ".$response["senha"]["hostname"]
            ."-".$response["senha"]["ip"]."<br>".PHP_EOL);

            echo("Credential.... ".$response["senha"]["username"]."<br>".PHP_EOL);

            echo("Password.... ".$response["senha"]["senha"]."".PHP_EOL);


        }else{
            echo ($response["response"]["mensagem"]);
        }

    
    }

    
    private function getHttpCode(Array $response){

    
        $code = $response["response"]["status"];

        return $code;
        
    }
    
}

?>