<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_coversheet_module_check extends CI_Migration {

	public function up()
	{
		mysql_query("INSERT INTO `modes_config` (`name` ,`development` ,`staging` ,`production`) VALUES ('coversheet',  '0',  '0',  '0')");
	}

	public function down()
	{
		mysql_query("DELETE FROM `modes_config` WHERE name='coversheet'");
	}
}
