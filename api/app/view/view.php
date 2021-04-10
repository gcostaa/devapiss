<?php

class View{

    private $response = [];

    function __construct($responseRequest)
    {

        $this->response = $responseRequest;

        $this->display($this->response);
        
    }

    public function display($response){

        $data = json_decode($response,true);

        print_r($data);

    }
    
}

?>