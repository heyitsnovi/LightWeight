<?php

namespace App\Controllers;

use Core\Constants;
use Rakit\Validation\Validator;
use Core\View;
use Core\Models\Names;

class Home {

    public function index() {

        //statistic purposes hehehe
        $data['memory_usage'] = Constants::get_memory_usage();

        //display the page in the browser
        new View('default', $data);

    }

    public function test_page() {

    	/* Set Page Title */
        $title = 'Test Page Demo #1';

        /* Load Header , Body and Footer Example */

        new View('demo/tpl/header', ['title' => $title]);
        new View('demo/test', ['name' => 'HeyIts' , 'last_name'=>'Novi']);
        new View('demo/tpl/footer');

    }

    public function test_form() {

    	//initialize validator class
        $validator = new Validator();

        //initialize form error holder variable
        $errors = null;

        //prepare validation rules
        $validation = $validator->make($_POST, ['name' => 'required|max:50', 'age' => 'required|numeric']);

        // then validate if form is submitted :) [POST]
        if (http_method() == 'POST') {

        	// start validate 
            $validation->validate();

            // if validation did not succeeded store error messages in $errors variable and render the page and the errors will appear on the page

            if ($validation->fails()) {

                $errors = $validation->errors();

                new View('demo/form', ['errors' => $errors]);

            }
            else {

                // Form successfully submitted :)

                //set flash data message
                set_flash_data('message', 'Well Done, ' . anti_xss($_POST['name']));

                //insert data to the database.
                Names::create(['name' => $_POST['name'], 'age' => $_POST['age']]);

                //redirect to home page
                redirect(base_url());
            }

        }
        else {

        	//show initial form state.

            new View('demo/form', ['errors' => $errors]);
        }

    }

}

