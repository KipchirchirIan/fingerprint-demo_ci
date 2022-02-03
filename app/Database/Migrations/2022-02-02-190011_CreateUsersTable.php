<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        /*
         * Users
         */
        $this->forge->addField([
            'id'                  => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'full_name'           => ['type' => 'varchar', 'constraint' => 255],
            'bmpbase64'           => ['type' => 'text', 'null' => false],
            'image_quality'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'null' => false],
            'iso_template_base64' => ['type' => 'text', 'null' => false],
            'nfiq'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'null' => false],
            'template_base64'     => ['type' => 'text', 'null' => false],
            'created_at'          => ['type' => 'datetime', 'null' => true],
            'updated_at'          => ['type' => 'datetime', 'null' => true],
            'deleted_at'          => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('users', true);
    }

    public function down()
    {
        $this->forge->dropTable('users', true);
    }
}
