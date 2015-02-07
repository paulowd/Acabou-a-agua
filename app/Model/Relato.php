<?php 
	class Relato extends AppModel {
		public $belongsTo = array('Bairro', 'Cidade', 'Colaborador');

		public $validate = array(
	        'cidade_id' =>  array(
	            'message' => 'Por favor selecione sua cidade.',
	            'allowEmpty' => false
	        ),
	        'titulo' =>  array(
	            'rule' => array('minLength', '5'),
	            'message' => 'Insira um título com pelo menos 5 caracteres.',
	            'allowEmpty' => false
	        ),
	        'endereco' =>  array(
	            'message' => 'Informe seu endereço.',
	            'allowEmpty' => false
	        ),
	        'dtinicio' =>  array(
	            'rule' => 'date',
	            'message' => 'Por favor, informe a data aproximada em que os problemas começaram.',
	            'allowEmpty' => false
	        ),
	        'hrinicio' =>  array(
	            'rule' => 'time',
	            'message' => 'Informe o horário em que a água costuma acabar.',
	            'allowEmpty' => false
	        ),
	        'hrretorno' =>  array(
	            'rule' => 'time',
	            'message' => 'Informe o horário em que o abastecimento costuma normalizar.',
	            'allowEmpty' => false
	        ),
	    );
	}
?>