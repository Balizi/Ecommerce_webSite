<?php

class ClientController{


    public function getClient()
    {
        $clt=Client::getClient();
        return $clt;
    }

}

?>