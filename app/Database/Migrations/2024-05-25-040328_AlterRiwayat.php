<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterRiwayat extends Migration
{
    public function up()
    {
        $this->forge->addColumn('riwayat', [
            'hasil_ses' => [
                'type' => 'DOUBLE',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('riwayat', 'hasil_ses');
    }
}
