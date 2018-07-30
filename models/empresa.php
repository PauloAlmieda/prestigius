<?php
class empresa extends model
{
	
	public function selectContatos(){

		$array = array();

		$sql = ( "SELECT * FROM tbl_contatos WHERE id='1' " );
		$sql = $this->db->query($sql);

		$array = $sql->fetchAll();

		return $array;


	}
}