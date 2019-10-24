<?php 

namespace App\Models;
use CodeIgniter\Model;

class RegistrationModel extends Model
{
        protected $table = 'users';
        protected $allowedFields = ['firstName', 'lastName', 'email', 'toc', 'password', 'address', 'dob', 'type', 'ccNumber', 'ccType', 'ccDate'];
}