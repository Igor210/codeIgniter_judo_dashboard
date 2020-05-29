<?php namespace App\Controllers;

class Category extends BaseController
{

	public function index()
	{
		$builder = $this->db->table('category');
		$query   = $builder->orderBy("id","DESC")->get()->getResultArray();

		$data = [ 
			'datalist' => $query,
		];
		echo view('layout/header', ["pageaction"=>"category"]);
		echo view('category', $data);	
		echo view('layout/footer');
	}


	public function save()
	{
		$builder = $this->db->table('category');
		$data = [
			"name" => $_POST['name'],
			"isformale" => $_POST['isformale'],
			"shortname" => $_POST['shortname'],
			"note" => $_POST['note'],
		];
		if(isset($_POST['is_save']) && $_POST['is_save'] == "right"){
			$builder->insert($data);
		} else {
			$builder->where('id', $_POST['selId']);
			$builder->update($data);
		}
		return redirect()->to(base_url().'/category');	
	}

	public function delete()
	{
		if(isset($_POST['rid'])){
			$builder = $this->db->table('category');
			$builder->where('id', $_POST['rid']);
			$builder->delete();
		}
		return "sucessful";	
	}

	public function getEditRow() 
	{
		$builder = $this->db->table('category');
		$builder->where('id', $_POST['rid']);
		$query   = $builder->get()->getResultArray();
		return json_encode($query);
	}

}
