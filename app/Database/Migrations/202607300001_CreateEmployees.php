<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployees extends Migration
{
    public function up()
    {
        if ($this->db->tableExists('employees')) {
            return;
        }

        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'excel_no' => ['type' => 'VARCHAR', 'constraint' => 10, 'null' => true],
            'full_name' => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'current_designation' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'work_location' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'employment_status' => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'gender' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'place_of_birth' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'date_of_birth' => ['type' => 'VARCHAR', 'constraint' => 30, 'null' => true],
            'age' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'whatsapp_number' => ['type' => 'VARCHAR', 'constraint' => 25, 'null' => true],
            'phone_number' => ['type' => 'VARCHAR', 'constraint' => 25, 'null' => true],
            'emergency_phone' => ['type' => 'VARCHAR', 'constraint' => 25, 'null' => true],
            'email' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'id_card_address' => ['type' => 'TEXT', 'null' => true],
            'domicile_address' => ['type' => 'TEXT', 'null' => true],
            'id_card_number' => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'tax_number' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'bank_account_name' => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'bank_name' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'bank_account_number' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'religion' => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'last_education' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'university_name' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'graduation_year' => ['type' => 'VARCHAR', 'constraint' => 10, 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('employees', true);
    }

    public function down()
    {
        $this->forge->dropTable('employees', true);
    }
}
