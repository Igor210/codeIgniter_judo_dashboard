<?php namespace App\Controllers;

class ClubDptoPais extends BaseController
{

	public function index()
	{
		$builder = $this->db->table('clubdptopais');
		$query   = $builder->orderBy("id","DESC")->get()->getResultArray();

		$data = [ 
			'datalist' => $query,
		];
		echo view('layout/header', ["pageaction"=>"CDP"]);
		echo view('club_dpto_pais', $data);	
		echo view('layout/footer');
	}

	public function save()
	{
		$builder = $this->db->table('clubdptopais');
		$data = [
			"name" => $_POST['name'],
			"address" => $_POST['address'],
			"note" => $_POST['note'],
		];
		if(isset($_POST['is_save']) && $_POST['is_save'] == "right"){
			$builder->insert($data);
		} else {
			$builder->where('id', $_POST['selId']);
			$builder->update($data);
		}
		return redirect()->to(base_url().'/clubdptopais');	
	}

	public function delete()
	{
		if(isset($_POST['rid'])){
			$builder = $this->db->table('clubdptopais');
			$builder->where('id', $_POST['rid']);
			$builder->delete();
		}
		return "sucessful";	
	}

	public function getEditRow() 
	{
		$builder = $this->db->table('clubdptopais');
		$builder->where('id', $_POST['rid']);
		$query   = $builder->get()->getResultArray();
		return json_encode($query);
	}

}
