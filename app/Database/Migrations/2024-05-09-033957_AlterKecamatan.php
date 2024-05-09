<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterKecamatan extends Migration
{
    public function up()
    {
        $this->forge->addColumn('kecamatan', [
            'mape' => [
                'type' => 'VARCHAR',
                'constraint' => 25, // Adjust the constraint as needed
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('kecamatan', 'mape');
    }
}
