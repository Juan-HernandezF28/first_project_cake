<?php 

class Mesero extends AppModel{

    public $virtualFields = array('nombre_completo' => 'CONCAT(Mesero.nombre," ",Mesero.apellido)');
    
    public $validate = array(
        'dni'=> array(
            "rule" => array('notBlank', "numeric"),
            'message' => 'solo numeros'),
            'unique'=> array(
                'rule'=>'isUnique',
                'message' => 'este numero ya se encuentra en la base de datos' 
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

    public $hasMany = array(
        'Mesa' => array(
            'className' => 'Mesa',
            'foreignKey' => 'mesero_id',
            'conditions' => '',
            'order' => 'Mesa.serie DESC',
            'depend' => false
        )
    );

}


?>