<?php

/**
 *	phpIPAM API class to work with tools
 *
 */
class Tools_controller extends Common_functions {

	/* public variables */
	public $Response_type;				// sets output - JSON or XML

	/* object holders */
	protected $Database;
	protected $Response;
	protected $Tools;

	/**
	 * __construct function
	 *
	 * @access public
	 * @param class $Database
	 * @param class $Tools
	 * @param mixed $params		// post/get values
	 * @return void
	 */
	public function __construct($Database, $Tools, $params, $Response) {
		$this->Database = $Database;
		$this->Response = $Response;
		$this->Tools 	= $Tools;
		$this->_params 	= $params;
	}





	/**
	 * returns general Controllers and supported methods
	 *
	 * @access public
	 * @return void
	 */
	public function OPTIONS () {
		// validate
		$this->validate_options_request ();

		// controllers
		$controllers = array(
						array("rel"=>"sections",	"href"=>"/api/".$_GET['app_id']."/sections/"),
						array("rel"=>"subnets",		"href"=>"/api/".$_GET['app_id']."/subnets/"),
						array("rel"=>"folders",		"href"=>"/api/".$_GET['app_id']."/folders/"),
						array("rel"=>"addresses",	"href"=>"/api/".$_GET['app_id']."/addresses/"),
						array("rel"=>"vlans",		"href"=>"/api/".$_GET['app_id']."/vlans/"),
						array("rel"=>"vrfs",		"href"=>"/api/".$_GET['app_id']."/vrfs/"),
						array("rel"=>"tools",		"href"=>"/api/".$_GET['app_id']."/tools/")
					);
		# Response
		return array("code"=>200, "data"=>$controllers);
	}






	/**
	 * Creates new vlan
	 *
	 * @access public
	 * @return void
	 */
	public function POST () {

	}





	/**
	 * Read vlan functions
	 *
	 * @access public
	 * @return void
	 */
	public function GET () {

	}





	/**
	 * Updates existing vlan
	 *
	 * @access public
	 * @return void
	 */
	public function PATCH () {

	}

	/**
	 * Alias function for edit
	 *
	 * @access public
	 * @return void
	 */
	public function PUT () {
		return $this->PATCH ();
	}





	/**
	 * Deletes existing vlan
	 *
	 * @access public
	 * @return void
	 */
	public function DELETE () {

	}
}

?>