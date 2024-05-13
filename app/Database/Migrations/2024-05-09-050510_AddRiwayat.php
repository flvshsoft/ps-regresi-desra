<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRiwayat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_riwayat' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kode_kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'regresi' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'intercept' => [
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'slope' => [
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'hasil' => [
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'input_tahun' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATE',
            ],
            'updated_at' => [
                'type' => 'DATE',
            ],
            'deleted_at' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addPrimaryKey('id_riwayat');
        $this->forge->createTable('riwayat');
    }

    public function down()
    {
        $this->forge->dropTable('riwayat');
    }
}
