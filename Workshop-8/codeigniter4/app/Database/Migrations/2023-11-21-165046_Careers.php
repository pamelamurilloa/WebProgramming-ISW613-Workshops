<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Careers extends Migration
{
    public function up()
    {
        $this->forge->addField([
			"id" => [
				"type" => "INT",
				"auto_increment" => true,
				"unsigned" => true,
				"constraint" => 5
			],
			"name" => [
				"type" => "VARCHAR",
				"constraint" => 50,
				"null" => false
			]
		]);

		$this->forge->addPrimaryKey("id");
		$this->forge->createTable("careers");
    }

    public function down()
    {
        $this->forge->dropTable("careers");
    }
}
