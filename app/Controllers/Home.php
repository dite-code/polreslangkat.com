<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$tanggal = date('Y-m-d');
		//$antrian = $this->tabelantrian->where("tanggal", $tanggal)->findAll();
		//if (count($antrian)==0){$antrian = $this->antrianbaru();}
		//$data['prefixvirtual'] = $this->rulevirtual[strlen($antrian[0]['virtual'])];
		//$data['prefixbarang']=$this->rulebarang[strlen($antrian[0]['barang'])];
		//$data['prefixwbp']=$this->rulewbp[strlen($antrian[0]['wbp'])];
		//$data['prefixkantor']=$this->rulekantor[strlen($antrian[0]['kantor'])];
		//$data['antrian']=$antrian[0];
		$data['title'] = ucfirst("home"); // Capitalize the first letter
		$data['isi'] = "home";
		return view('main-layout/wraper',$data);
	}
}
