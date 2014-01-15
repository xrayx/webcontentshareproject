<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_add_media_to_sxsw_links extends CI_Migration {

	public function up()
	{

		$this->dbforge->add_column('sxsw_links', array(
			'media' => array(
				'type' => 'TEXT',
				'default' => null,
			),
		));
		
	}

	public function down()
	{
		$this->dbforge->drop_column('sxsw_links', 'media');
	}
}
