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
        echo view('template/header', $data);
		echo view('page/registration', $data);

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
        $data = array (
            'title' => "Registration Success",
        );
        echo view('template/header', $data);
        echo view('page/success');
    }

    
    }

    public function login()
    {
        $data = array(
            'title' => "Login page",
        );
        echo view('template/header', $data);
        echo view('page/login');
    }

    public function dologin()
    {
        if (! $this->validate([
            'email'     =>  'required',
            'password'  =>  'required',
        ]))
        {
            $data = array (
                'title' => "Login Form",
            );
            echo view('template/header', $data);
            echo view('page/login', $data);
    
        }
        else
        {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $findpassword = new RegistrationModel();
            $resultpassword = $findpassword->where('email', $email)->findColumn('password');
            $mypassword = $resultpassword[0];
            
            if (password_verify($password, $mypassword)) {
                $data = array (
                    'title' => "Dashboard",
                    'email'     => $email,
                    'logged_in' => TRUE
                );
                $session = \Config\Services::session();
                $session->set($data);
                echo view('template/header', $data);
                echo view('page/dashboard');
            } else {
                $data = array (
                    'title' => "Login Form",
                );
                echo view('template/header', $data);
                echo view('page/login');
            }

                
        }
    }

    public function logout() 
    {
        $session = \Config\Services::session();
        $session->remove('title');
        if ($session->has('email')) {
            $session->remove('title');
            $session->remove('email');
            $session->remove('logged_in');
            return redirect()->to('/');;
        } else {
            redirect()->route('/');
        }
    }

    public function testpass()
    {
        $email = "ahmad.bagwi@sangkuriang";
        $findpassword = new RegistrationModel();
        $mypassword = $findpassword->where('email', $email)->findColumn('password');
        $satu = $mypassword[0];
        print_r($satu);
    }

}

