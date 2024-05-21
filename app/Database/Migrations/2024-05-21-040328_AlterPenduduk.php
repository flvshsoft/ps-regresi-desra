<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterPenduduk extends Migration
{
    public function up()
    {
        $this->forge->addColumn('data_penduduk', [
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
    }

    public function down()
    {
        $this->forge->dropColumn('data_penduduk', 'created_at');
        $this->forge->dropColumn('data_penduduk', 'updated_at');
        $this->forge->dropColumn('data_penduduk', 'deleted_at');
    }
}
