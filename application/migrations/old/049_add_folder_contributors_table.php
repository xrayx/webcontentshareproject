<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_add_folder_contributors_table extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'folder_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'default' => 0,
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'default' => 0,
			),

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('folder_contributors');
	}
	
	
	public function down()
	{
		$this->dbforge->drop_table('folder_contributors');
	}
	
	
}