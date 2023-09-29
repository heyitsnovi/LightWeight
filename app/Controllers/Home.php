<?php

namespace App\Controllers;

use Core\Constants;
use Rakit\Validation\Validator;
use Core\View;
use Core\Models\Names;
use Core\Twigified;
use Core\Basecontroller;
use Core\Models\Datavalues;


/*
* Demo Application For Starters
* Please make sure to import the sample_db/lightweight_demo.sql file in order to run this application 
*/

class Home extends Basecontroller{

    public function index() {

        //statistic purposes hehehe
        $data['memory_usage'] = Constants::get_memory_usage();

        //display the page in the browser
        new View('default', $data);
        //or
        //$this->view('default', $data);

    }

    public function test_page() {

    	/* Set Page Title */
        $title = 'Test Page Demo #1';

        /* Load Header , Body and Footer Example */

        new View('demo/tpl/header', ['title' => $title]);
        new View('demo/test', ['name' => 'HeyIts' , 'last_name'=>'Novi']);
        new View('demo/tpl/footer');

    }


    public function say_name($firstname,$lastname){

        
        echo $firstname . ' '.$lastname .'<br>';
        echo 'Current URL: <br>';
        echo current_url();
    }

    public function test_form() {

    	//initialize validator class
        $validator = new Validator();

        //initialize form error holder variable
        $errors = null;

        //set page title
        $page_title = 'Guest Form';

        //prepare validation rules
        $validation = $validator->make($_POST, ['name' => 'required|max:50', 'age' => 'required|numeric', 'shirts'=>'required']);

        // then validate if form is submitted :) [POST]
        if (http_method() == 'POST') {

        	// start validate 
            $validation->validate();

            // if validation did not succeeded store error messages in $errors variable and render the page and the errors will appear on the page

            if ($validation->fails()) {

                $errors = $validation->errors();

                new View('demo/form', ['errors' => $errors,'page_title'=>$page_title]);

            }
            else {

                // Form successfully submitted :)

                //set flash data message
                set_flash_data('message', 'Well Done, ' . postData('name'));

                //insert data to the database.
                Names::create(['name' => postData('name'), 'age' => postData('age')]);

                Datavalues::create(['value' =>bin2hex(openssl_random_pseudo_bytes(5))]);

                //redirect to home page
                redirect(base_url());
            }

        }
        else {

        	//show initial form state.

            new View('demo/form', ['errors' => $errors,'page_title'=>$page_title]);
        }

    }

    //This is an example how to use the Twigified class . It uses Twig as a templating engine.
    public function twigifiedExample(){

        /* Twigified will accept an array of options for example:
        *  $twig = new Twigified(['cache'=>'/path/to/cache/folder']);
        *  For more info regarding  options , please refer  this link:  https://twig.symfony.com/doc/3.x/api.html#environment-options
        */

        $twig = new Twigified();

        $arr = [
                'name'=>'Novi',
                'page_title'=>'Twig Demo View',
                'country'=>'Philippines'
        ];

        echo $twig->view()->render('demo/twig-demo.html',$arr);

    }

}

