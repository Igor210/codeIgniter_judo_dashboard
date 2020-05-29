<?php namespace App\Controllers;

class Estimator extends BaseController
{

	public function index()
	{
		$builder = $this->db->table('estimator');
		$query   = $builder->orderBy("id","DESC")->get()->getResultArray();

		$data = [ 
			'datalist' => $query,
		];
		echo view('layout/header', ["pageaction"=>"estimator"]);
		echo view('estimator', $data);	
		echo view('layout/footer');
	}


	public function save()
	{
		$builder = $this->db->table('estimator');
		$data = [
			"name" => $_POST['name'],
			"userID" => $_POST['userID'],
			"gender" => $_POST['gender'],
			"email" => $_POST['email'],
			"phone" => $_POST['phone'],
		];
		if(isset($_POST['is_save']) && $_POST['is_save'] == "right"){
			$builder->insert($data);
		} else {
			$builder->where('id', $_POST['selId']);
			$builder->update($data);
		}
		return redirect()->to(base_url().'/estimator/index');	
	}

	public function delete()
	{
		if(isset($_POST['rid'])){
			$builder = $this->db->table('estimator');
			$builder->where('id', $_POST['rid']);
			$builder->delete();
		}
		return "sucessful";	
	}

	public function getEditRow() 
	{
		$builder = $this->db->table('estimator');
		$builder->where('id', $_POST['rid']);
		$query   = $builder->get()->getResultArray();
		return json_encode($query);
	}
}
