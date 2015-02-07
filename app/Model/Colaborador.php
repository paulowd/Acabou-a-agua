<?php 
	class Colaborador extends AppModel {
		public $hasMany = array('Relato');
		public $belongsTo = array('Sexo');

		public $validate = array(
	        'name' =>  array(
	            'message' => 'Informe seu nome.',
	            'allowEmpty' => false
	        ),
	        'email' =>  array(
	            'rule' => 'email',
	            'message' => 'Por favor, informe seu e-mail (Não será divulgado).',
	            'allowEmpty' => false
	        ),
	        'sexo' =>  array(
	            'message' => 'Informe seu sexo.',
	            'allowEmpty' => false
	        )
	    );
	}
?>