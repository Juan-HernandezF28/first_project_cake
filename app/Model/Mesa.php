<?php 

class Mesa extends AppModel{
    public $belongsTo = array(
        'Mesero' => array(
            'className'=> 'Mesero',
            'foreignKey'=> 'mesero_id'
        )
    );

    public $validate = array(
            'serie' => array(
                'notBlank' => array(
                'rule' => 'notBlank'
                )
            ),
            'naturalNumber' => array(
                'rule' => 'naturalNumber',
                'message' => 'solo numeros'
            ),
        
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'el numero ya se encuentra en la base de datos'
            ),
            'puestos' => array(
                'notBlank' => array(
                    'rule' => 'notBlank'
                )
            ),
            'naturalNumber' => array(
                'rule' => 'naturalNumber',
                'message' => 'solo numeros'
            ),
            'posicion' => array(
                    'rule' => 'notBlank',
                    'message' => 'especifique bien su lugar'
            )
     );
} 
?>