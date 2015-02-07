<?php 
	class Bairro extends AppModel {
		public $hasMany = array('Relato');
		public $belongsTo = array('Cidade');

		public $validate = array(
	        'name' =>  array(
	            'message' => 'Informe o nome do bairro.',
	            'allowEmpty' => false
	        ),
	        'cidade_id' =>  array(
	            'message' => 'É necessário escolher a cidade à qual o bairro pertence.',
	            'allowEmpty' => false
	        )
	    );
	}
?>