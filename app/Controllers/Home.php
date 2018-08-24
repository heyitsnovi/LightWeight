<?php

namespace App\Controllers;

 
use App\Constants;
use Rakit\Validation\Validator;
use App\Paginator;
use App\Models\Airplanes;
 

class Home {
	
	
	public function index(){
		
		//statistic purposes hehehe
		$data['memory_usage'] = Constants::get_memory_usage();
		
		//display the page in the browser
		show_page('default',compact('data'));	 
	}

	public function sayHello($name = null , $lastname = null){

		show_page('sayhello',compact('name','lastname'));
	}

	public function testForm(){

		show_page('frmtest');
	}

	public function paginationDemo(){

		$per_page = isset($_GET['perpage']) ? $_GET['perpage'] : 10;

		$paginator = new Paginator();

		$paginator::set_config($per_page,'page');

		$paginator::set_total(Airplanes::count());


		$data['records'] = 	Airplanes::offset($paginator::get_start())
									->limit($paginator::get_per_page())
									->get();

		$data['page_links'] = $paginator::page_links('?','&perpage='.(int)$per_page);

		show_page('pagination_test',compact('data'));

	}

	public function submitTestForm(){

		$validator  = new Validator();

		$validation = $validator->make($_POST,
				[
					'firstname'=>'required',
					'lastname'=>'required',
					'gender'=>'required',
					'hobby.*'=>'required'
				]
			);

		$validation->validate();

		if ($validation->fails()) {

				//Redirect to Previous From and Store the Errors
				redir()::redirectWithErrors(base_url('formtest'),$validation->errors());
				
		}else{
				//If validation succedeed 
				var_dump($_POST);
		}

	}
 
}