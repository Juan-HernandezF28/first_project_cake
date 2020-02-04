<?php 

class Restaurant extends AppModel{
    public $validate = array(
        'dni'=> array(
            "rule" => "notBlank",
            'rule' => 'numeric',
                'message' => 'solo numeros'),
            'unique'=> array(
                'rule'=>'isUnique',
                'message' => 'este numero ya se encuentra en la base de datos' ),        
        'nombre'=> array(
            'rule'=>'notBlank'),
        'apellido'=> array(
            'rule'=>'notBlank'),
        'telefono'=> array(
            'rule'=>'notBlank',
                'rule' => 'numeric',
                'message' => 'solo numeros')
    );

}


?>