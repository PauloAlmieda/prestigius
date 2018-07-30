<?php
class empresaController extends controller {


	public function index(){

		$e = new empresa();

		$dados['contatos'] = $e->selectContatos();
		




		$this->loadTemplate('empresa', $dados);


	}


}