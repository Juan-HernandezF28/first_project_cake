<?php 

class Mesero extends AppModel{
    
    public $validate = array(
        'dni'=> array(
            "rule" => array('notBlank', "numeric"),
            'message' => 'solo numeros',
            'unique'=> array(
                'rule'=>'isUnique',
                'message' => 'este numero ya se encuentra en la base de datos' 
            )
        ),        
        'nombre'=> array(
            'rule'=>'notBlank'
        ),
        'apellido'=> array(
            'rule'=>'notBlank'
        ),
        'telefono'=> array(
            'rule'=> array('notBlank', 'numeric'),
            'message' => 'solo numeros'
        )
    );

}


?>