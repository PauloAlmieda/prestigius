<?php
class homeController extends controller {

	

	public function index() {
		//echo 'Olá Mundo!';
		$dados = array();

		$h = new home();

		$dados['config'] = $h->config();

		//print_r($dados['config']);
		//exit();

		$dados['contatos'] = $h->selectContatos();
		$dados['banner'] = $h->carregaBanner();
		$dados['centro'] = $h->tresFotos();
		//print_r($dados['centro'][0]);
		//exit();

		

		
		$this->loadTemplate('home', $dados);
	}
}
?>