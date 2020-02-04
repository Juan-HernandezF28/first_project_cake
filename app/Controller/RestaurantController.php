<?php

class RestaurantController extends AppController{

    public function index(){

        $this->set('title', "Restaurantes Don Juan");
    }

    public function meseros(){
        $this->redirect(array('controller' => "meseros", "action" => "index"));
    }
}
?>