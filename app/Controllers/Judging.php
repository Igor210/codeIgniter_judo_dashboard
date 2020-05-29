<?php namespace App\Controllers;

class Judging extends BaseController
{

	public function index(){

		$data = ["judgingdata" => []];
		echo view('layout/header', ["pageaction"=>"systemOfJudging"]);
		echo view('judoJudging', $data);	
		echo view('layout/footer');
	}

	public function getdata()
	{
		$builder = $this->db->table('estimate_list AS A');
		$query   = $builder->select('A.*, B.name as esname, C.name as cname, D.name as cdname')
				->join('estimator AS B', 'B.id = A.evaluatorID', 'left')
				->join('category AS C', 'C.id = A.categoria', 'left')
				->join('clubdptopais AS D', 'D.id = A.club_dpto', 'left')
				->orderBy("A.orden","DESC")
				->where('orden', $_GET['orden'])
				->get()->getResultArray();

		foreach ($query as $key => $value) {
			$builder2 = $this->db->table('torianduke AS A');
			$query2   = $builder2->select('A.name as tname')
					->where('id', $value['tori'])
					->get()->getResultArray();

			$builder3 = $this->db->table('torianduke AS A');
			$query3   = $builder3->select('A.name as uname')
					->where('id', $value['uke'])
					->get()->getResultArray();

			$query[$key] = array_merge($value, $query2[0], $query3[0]);
		}

		$databyjudge = [];
		foreach ($query as $key => $value) {
			$tem = json_decode($value['rows']);
			$databyjudge["est".$value['judgeNum']] = $tem;
		}

		// echo "<pre>";
		// print_r($query);
		// exit;

		$data = [
			"data" => $query[0],
			"databyjudge" => $databyjudge
		];

		echo view('layout/header', ["pageaction"=>"systemOfJudging"]);
		echo view('judoJudging', $data);	
		echo view('layout/footer');
	}

}
