<?php
namespace App\Controllers;

class Registration extends BaseController
{
	public function index()
	{
        $data = array (
                        'title' => "Registration Form",
        );
		echo view('page/registration', $data);
	}

	public function create()
    {
    helper('form');
    $model = new NewsModel();

    if (! $this->validate([
        'title' => 'required|min_length[3]|max_length[255]',
        'body'  => 'required'
    ]))
    {
        echo view('templates/header', ['title' => 'Create a news item']);
        echo view('news/create');
        echo view('templates/footer');

    }
    else
    {
        $model->save([
            'title' => $this->request->getVar('title'),
            'slug'  => url_title($this->request->getVar('title')),
            'body'  => $this->request->getVar('body'),
        ]);
        echo view('news/success');
    }
}

}

