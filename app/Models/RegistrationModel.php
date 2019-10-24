<?php 

namespace App\Models;
use CodeIgniter\Model;

class RegistrationModel extends Model
{
        protected $table = 'users';
        protected $allowedFields = ['firstName', 'lastName', 'email', 'toc', 'password', 'address', 'dob', 'type', 'ccNumber', 'ccType', 'ccDate'];
        /*public function getpassword($email = false)
        {
                return $findpassword = $userModel->where('email', $email)
                   ->findColumn('password');
        }*/
}