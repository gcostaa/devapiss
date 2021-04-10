<?php

class View{

    private $response = [];
    private $status;

    function __construct($responseRequest)
    {



        $this->response = json_decode($responseRequest,true);

        $this->status = $this->getHttpCode($this->response);

        $this->display($this->response,$this->status);
        
        
    }


    public function display(Array $response,$statusCode){

       
        if($statusCode == 200){

            
            echo ("VALORES CHAVES"."\n\n<br><br>");

            echo("Dispositivo.... ".$response["senha"]["hostname"]
            ."-".$response["senha"]["ip"]."<br>\n");

            echo("Credencial.... ".$response["senha"]["username"]."<br>\n");

            echo("Password.... ".$response["senha"]["senha"]);


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