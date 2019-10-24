<?php
namespace App\Controllers;
use App\Models\RegistrationModel;
class Registration extends BaseController
{
	public function index()
	{
        $data = array (
                        'title' => "Registration Form",
        );
        echo view('template/header', $data);
		echo view('page/registration', $data);
	}

	public function create()
    {
    helper('form');
    $model = new RegistrationModel();

    if (! $this->validate([
        'lastName'  =>  'required|min_length[3]|max_length[100]',
        'email'     =>  'required',
        'toc'       =>  'required',
        'password'  =>  'required',
        'repeat_password'   =>  'required',
        'address'   =>  'required',
        'dob'       =>  'required',
        'type'      =>  'required',
        'ccNumber'  =>  'required',
        'ccType'    =>  'required',
        'ccDate'    =>  'required',
    ]))
    {
        $data = array (
            'title' => "Registration Form",
        );
        //echo view('templates/header', ['title' => 'Create a news item']);
        echo view('page/registration', $data);
        //echo view('templates/footer');

    }
    else
    {
        $model->save([
            'firstName'     => $this->request->getVar('firstName'),
            'lastName'      => $this->request->getVar('lastName'),
            'email'         => $this->request->getVar('email'),
            'toc'           => $this->request->getVar('toc'),
            'password'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'address'       => $this->request->getVar('address'),
            'dob'           => $this->request->getVar('dob'),
            'type'          => $this->request->getVar('type'),
            'ccNumber'      => $this->request->getVar('ccNumber'),
            'ccType'        => $this->request->getVar('ccType'),
            'ccDate'        => $this->request->getVar('ccDate'),
            
        ]);
        echo view('page/success');
    }

    
    }
    public function testhash()
    {
        $text = "ahmadbagwirifai";
        $password = password_hash($text, PASSWORD_DEFAULT);
        //echo $password;
        $input = "ahmadbagwirifai";
        $inputhash = password_hash($input, PASSWORD_DEFAULT);
        
        if (password_verify($input, $password)) {
            echo 'Password is valid!';
        } else {
            echo 'Invalid password.';
        }
    }

}

