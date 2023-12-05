<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Student extends Migration
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
			],
			"last_name" => [
				"type" => "VARCHAR",
				"constraint" => 50,
				"null" => false
			],
			"address" => [
				"type" => "TEXT",
				"null" => true
			]
		]);

		$this->forge->addPrimaryKey("id");
		$this->forge->createTable("students");
    }

    public function down()
    {
        $this->forge->dropTable("students");
    }
}
