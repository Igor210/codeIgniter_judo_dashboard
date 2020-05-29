<?php namespace App\Controllers;

class Dashboard extends BaseController
{

	public function index()
	{
		$data = [];

		$esTb = $this->db->table('estimate_list as A');
		$cTb = $this->db->table('category');
		$cdTb = $this->db->table('clubdptopais');

		$competencia   = $esTb->orderBy("orden","DESC")
							->groupBy("orden")
							->get()->getResultArray();

		$estimatorssss   = $esTb->get()->getResultArray();
		
		$clubs   = $cdTb->get()->getResultArray();

		$individualTopResult = $esTb->selectMax('total')->get()->getResultArray();

		$individualAverageResult = $esTb->selectAvg('total')->get()->getResultArray();

		$allcompetenciadata   = $esTb->select('A.*, B.name as esname, C.name as cname, D.name as cdname')
				->join('estimator AS B', 'B.id = A.evaluatorID', 'left')
				->join('category AS C', 'C.id = A.categoria', 'left')
				->join('clubdptopais AS D', 'D.id = A.club_dpto', 'left')
				->orderBy("A.orden","DESC")
				->groupBy("A.orden")
				->limit(5)
				->get()->getResultArray();

		foreach ($allcompetenciadata as $key => $value) {
			$builder2 = $this->db->table('torianduke AS A');
			$query2   = $builder2->select('A.name as tname')
					->where('id', $value['tori'])
					->get()->getResultArray();

			$builder3 = $this->db->table('torianduke AS A');
			$query3   = $builder3->select('A.name as uname')
					->where('id', $value['uke'])
					->get()->getResultArray();

			$allcompetenciadata[$key] = array_merge($value, (array)$query2[0], (array)$query3[0]);
		}

		$categories = $cTb->limit(5)->get()->getResultArray();

		$competenciaresult = $esTb->select('AVG(total) as avg, rows')
								->groupBy("orden")
								->get()->getResultArray();
 		$errorsAry = [];
		foreach ($competenciaresult as $key => $value) {
 			$totalmark = count(json_decode($value['rows'])) * 10;
			$errorsAry[$key] = round(($totalmark - $value['avg']), 1);
		}

		$data = [ 
			'participants' => count($competencia),
			'clubs' => count($clubs),
			'individualTopResult' => $individualTopResult[0]['total'],
			'individualAverageResult' => round($individualAverageResult[0]['total'], 1),
			'allcompetenciadata' => $allcompetenciadata,
			'categories' => $categories,
			'errorsAry' => $errorsAry,
			'errors' => count($estimatorssss)
		];

		echo view('layout/header', ["pageaction"=>"dashboard"]);
		echo view('dashboard', $data);	
		echo view('layout/footer');
	}

}
