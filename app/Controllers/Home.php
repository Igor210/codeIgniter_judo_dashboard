<?php namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		return redirect()->to('home/katalist');	
	}

	public function kataAdd()
	{
		$data = [ 'initailData'=>$this->initailData() ];

        echo view("layout/header", ['pageaction'=>"mainpage"]);
		echo view('estimate/kataAdd', $data);
        echo view("layout/footer");
	}

	public function katalist() 
	{
		$builder1 = $this->db->table('estimate_list AS A');
		$query1   = $builder1->select('A.*, B.name as esname, B.userID as esID, C.name as cname, D.name as cdname')
				->join('estimator AS B', 'B.id = A.evaluatorID', 'left')
				->join('category AS C', 'C.id = A.categoria', 'left')
				->join('clubdptopais AS D', 'D.id = A.club_dpto', 'left')
				->orderBy("A.orden","DESC")
				->orderBy("A.judgeNum","ASC")
				->orderBy("B.userID","ASC")
				->get()->getResultArray();

		foreach ($query1 as $key => $value) {
			$builder2 = $this->db->table('torianduke AS A');
			$query2   = $builder2->select('A.name as tname')
					->where('id', $value['tori'])
					->get()->getResultArray();

			$builder3 = $this->db->table('torianduke AS A');
			$query3   = $builder3->select('A.name as uname')
					->where('id', $value['uke'])
					->get()->getResultArray();

			$query1[$key] = array_merge($value, (array)$query2[0], (array)$query3[0]);
		}

		$data = array(
			'katadata' => $query1,
		);

        echo view("layout/header", ['pageaction'=>"mainpage"]);
        echo view("estimate/katalist", $data);
        echo view("layout/footer");
	}

	public function savekata() 
	{
		$db = $this->db;
		$builder = $db->table('estimate_list');
		$data = [
			'rows' => json_encode($_POST['rows']),
		    'total' =>  $_POST['total'],
		    'competencia' =>  $_POST['competencia'],
		    'orden' =>  $_POST['orden'],
		    'place' =>  $_POST['place'],
		    'katatype' =>  $_POST['katatype'],
		    'club_dpto' => $_POST['club_dpto'],
		    'tori' =>  $_POST['tori'],
		    'uke' =>  $_POST['uke'],
		    'categoria' =>  $_POST['categoria'],
		    'datetime' =>  $_POST['date'],
		    'evaluatorID' =>  $_POST['evaluator'],
		    'judgeNum' =>  $_POST['evaluatorID'],
		];
		$builder->insert($data);
		return "sucessful";
	}

	public function deletekata()
	{
		if(isset($_POST['rid'])){
			$builder = $this->db->table('estimate_list');
			$builder->where('id', $_POST['rid']);
			$builder->delete();
		}
		return "sucessful";	
	}

	public function kataEdit($selId, $is_clone=null)
	{
		$builder = $this->db->table('estimate_list');
		$builder->where('id', $selId);
		$query   = $builder->get()->getResultArray();

		if(isset($is_clone)){
			$is_clone = "true";
		}
		
		$data = array(
			'katadata' => $query,
			'initailData'=>$this->initailData(),
			'is_clone' => $is_clone
		);
        echo view("layout/header", ['pageaction'=>"mainpage"]);
		echo view('estimate/kataEdit', $data);
	}

	public function updatekata(){
		$db = $this->db;
		$builder = $db->table('estimate_list');
		$data = [
			'rows' => json_encode($_POST['rows']),
		    'total' =>  $_POST['total'],
		    'competencia' =>  $_POST['competencia'],
		    'orden' =>  $_POST['orden'],
		    'place' =>  $_POST['place'],
		    'katatype' =>  $_POST['katatype'],
		    'club_dpto' => $_POST['club_dpto'],
		    'tori' =>  $_POST['tori'],
		    'uke' =>  $_POST['uke'],
		    'categoria' =>  $_POST['categoria'],
		    'datetime' =>  $_POST['date'],
		    'evaluatorID' =>  $_POST['evaluator'],
		    'judgeNum' =>  $_POST['evaluatorID'],
		];
		$builder->where('id', $_POST['editId']);
		$builder->update($data);
		return "sucessful";
	}

	public function final_result()
	{
		$builder = $this->db->table('estimate_list');
		$data = [
			'final_result' => $_POST['result']
		];
		$builder->where('orden', $_POST['orden']);
		$builder->update($data);
		return "sucessful";
	}

	public function initailData()
	{
		$data = [];

		$toritable = $this->db->table('torianduke');
		$toriquery   = $toritable->orderBy("id","DESC")->where('torioruke','0')->get()->getResultArray();
		$data["tori"] = $toriquery;

		$uketable = $this->db->table('torianduke');
		$ukequery   = $uketable->orderBy("id","DESC")->where('torioruke','1')->get()->getResultArray();
		$data["uke"] = $ukequery;

		$categorytable = $this->db->table('category');
		$catequery   = $categorytable->orderBy("id","DESC")->get()->getResultArray();
		$data["category"] = $catequery;

		$clubdptopaisTB = $this->db->table('clubdptopais');
		$clubdptopais   = $clubdptopaisTB->orderBy("id","DESC")->get()->getResultArray();
		$data["clubdptopais"] = $clubdptopais;

		$estimatorTB = $this->db->table('estimator');
		$estimatorquery   = $estimatorTB->orderBy("userID","ASC")->get()->getResultArray();
		$data["estimator"] = $estimatorquery;

		return json_encode($data);
	}

}
