<?php 

$hierarquia = array(
    array(
         'nome_cargo'=>'CEO',
         'subordinados'=>array(
			//Inicio: Diretos Inicial         	
         	array(
         		'nome_cargo'=>'Diretor comercial',
         		'subordinados'=>array(
         			//Inicio: Gerente de Vendas
         			array(
         				'nome_cargo'=>'Gerente de Vendas'
         			)
         			//Termino: Gerente de Vendas
         			)
         	),
         	//Termino: Diretor Comercial
         	//Inicio: Diretor FInanceiro
         	array(
         		'nome_cargo'=>'Diretor Financeiro',
         		'subordinados'=>array(
         			//Inicio: Gerente de Contas a Pagar
         			array(
         				'nome_cargo'=>'Gerente de Contas a Pagar',
         				'subordinados'=>array(
         					//Inicio: Supervisor
         					array(
         						'nome_cargo'=>'Supervisor de Pagamentos'
         					)
         					//Termino: Suporvisor de Pagamentos
         				)
         			),
         			//Termino: Gerente de Contas a Pagar
         			//Inicio: Gerente de Compras
         			array(
         				'nome_cargo'=>'Gerente de Compras',
         				'subordinados'=>array(
         					//Inicio: Supervisor de Suprimentos
         					array(
         						'nome_cargo'=>'Supervisor de Suprimentos',
         						'subordinados'=>array(

         							array(
         								'nome_cargo'=>'Funcionário'
         							)
         						)
         					)
         					//Termino: Supervisor de Suprimentos
         				)
         			)
         			//Termino: Gerente de Compras
         		)
         	)
         	//Termino: Diretor Financeiro
         )
    )

);

function exibe($cargos){


	$html = '<ul>';

	foreach ($cargos as $cargo) {

		$html .= "<li>";

		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

			$html .= exibe($cargo['subordinados']);

		}

		$html .= "</li>";
	
	}

	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);

?>