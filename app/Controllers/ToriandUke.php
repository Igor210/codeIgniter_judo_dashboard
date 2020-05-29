<?php namespace App\Controllers;

class ToriandUke extends BaseController
{

	public function index()
	{
		$builder = $this->db->table('torianduke');
		$query   = $builder->orderBy("id","DESC")->get()->getResultArray();
		$data = [ 
			'datalist' => $query,
		];

		echo view('layout/header', ["pageaction"=>"TU"]);
		echo view('torianduke', $data);	
		echo view('layout/footer');
	}

	public function save()
	{
		$builder = $this->db->table('torianduke');
		$data = [
			"name" => $_POST['name'],
			"torioruke" => $_POST['torioruke'],
			// "gender" => $_POST['gender'],
			"note" => $_POST['note'],
		];
		if(isset($_POST['is_save']) && $_POST['is_save'] == "right"){
			$builder->insert($data);
		} else {
			$builder->where('id', $_POST['selId']);
			$builder->update($data);
		}
		return redirect()->to(base_url().'/torianduke');	
	}

	public function delete()
	{
		if(isset($_POST['rid'])){
			$builder = $this->db->table('torianduke');
			$builder->where('id', $_POST['rid']);
			$builder->delete();
		}
		return "sucessful";	
	}

	public function getEditRow() 
	{
		$builder = $this->db->table('torianduke');
		$builder->where('id', $_POST['rid']);
		$query   = $builder->get()->getResultArray();
		return json_encode($query);
	}

}
