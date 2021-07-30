<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Basket extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'gambar'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'fasilitas'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'alamat' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'jam_operasional'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'kontak'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],


			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('basket', TRUE);
	}


	public function down()
	{
		$this->forge->dropTable('basket');
	}
}
