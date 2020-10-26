<?php
class latihan2 extends CI_Controller
{	
	public function index()
	{
		echo "Welcome to Programming web Class..";
	}

	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Model1');	//memanggil model
		
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model1->jumlah($n1,$n2);

		$this->load->view('view-latihan1', $data);
	}
}