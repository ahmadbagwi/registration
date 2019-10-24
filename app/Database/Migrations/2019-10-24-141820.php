<?php 
namespace Registration;
use App\Database\Migrations;

class Registration extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'firstName'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'lastName'       => [
                            'type'           => 'VARCHAR',
                            'constraint'     => '100',
                        ],
                        'email'       => [
                            'type'           => 'VARCHAR',
                            'constraint'     => '100',
                        ],
                        'tc'       => [
                            'type'           => 'bool',
                            'null  '         => FALSE,
                        ],
                        'password'       => [
                            'type'           => 'VARCHAR',
                            'constraint'     => '100',
                        ],
                        'address' => [
                                'type'           => 'TEXT',
                                'null'           => TRUE,
                        ],
                        'dob'       => [
                            'type'           => 'DATE',
                        ],
                        'type'       => [
                            'type'           => 'VARCHAR',
                            'constraint'     => '20',
                        ],
                        'ccNumber'       => [
                            'type'           => 'INT',
                            'constraint'     => 16,
                        ],
                        'ccType'       => [
                            'type'           => 'VARCHAR',
                            'constraint'     => '10',
                        ],
                        'ccDate'       => [
                            'type'           => 'DATE',
                        ],
                        'created_at'       => [
                            'type'           => 'TIMESTAMP',
                        ],
                        'updated_at'       => [
                            'type'           => 'TIMESTAMP',
                        ],
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('users');
        }

        public function down()
        {
                $this->forge->dropTable('users');
        }
}