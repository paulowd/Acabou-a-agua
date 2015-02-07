<?php 
	class Estado extends AppModel {
		public $hasMany = array('Cidade');

		public $validate = array(
	        'name' =>  array(
	            'message' => 'Informe o nome do bairro.',
	            'allowEmpty' => false
	        ),
	        'uf' =>  array(
	        	'rule'    => array('lengthBetween', 1, 3),
	            'message' => 'Informe uma Unidade Federativa válida.',
	            'allowEmpty' => false
	        ),
	    );
	}
?>