<?php 
class home extends model{

	public function config(){

		$array = array();
		$sql = ("SELECT * FROM tbl_configuracoes WHERE id='1'");
		$sql = $this->db->query($sql);

		$array = $sql->fetchAll();

		return $array;


	}

	public function selectContatos(){

		$array = array();

		$sql = ( "SELECT * FROM tbl_contatos WHERE id='1' " );
		$sql = $this->db->query($sql);

		$array = $sql->fetchAll();

		return $array;


	}
	public function carregaBanner(){

		$array = array();
		$sql = ("SELECT * FROM tbl_banners ORDER BY id DESC");
		$sql = $this->db->query($sql);

		$array = $sql->fetchAll();

		return $array;
	}

	public function tresFotos(){

		$array = array();

		$sql = ("SELECT * FROM tbl_imagens_home ");	
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0)
		{
			$array = $sql->fetchAll();
		}

		return $array;

	} 

		/*$sqli= $this->db->prapare("SELECT * FROM tbl_contatos WHERE id='1' ");
		$sqli->execute();
		while($linha=mysql_fetch_array($sqli)){
			$tel1=$linha['tel1'];
			$tel2=$linha['tel2'];
			$tel3=$linha['tel3'];
			$facebook=$linha['facebook'];
			$insta=$linha['twitter'];
			$youtube=$linha['youtube'];
			$endereco=$linha["endereco"];
			$email=$linha['email'];
			$bairro=$linha['bairro'];
			$cidade=$linha['cidade'];
			$estado=$linha['estado'];
			$cep=$linha['cep'];
		}*/

	}
