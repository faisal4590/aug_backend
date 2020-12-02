<?php
include_once "./DAL/DALController.php";

class Items {

	private $items;
	/**
	 * items constructor.
	 */
	function __construct( ){
		$this->items = array();
	}
	/**
	 * Setting Items.
	 *
	 * @param $items
	 */
    function set_items($items) {
        $this->items = $items;
	}
	
	/**
	 * Getting Items.
	 */
    function get_items() {
        return $this->items;
	}
	
	/**
	 * Check if items has key
	 *
	 * @param $array
	 * @param $key
	 *
	 * @return true or false
	 */

	// Task 2: (Method 1: Return boolean if given key is present inside given array)
    function hasItem ($array, $key) {
		$this->set_items($array);
		$items_array = $this->get_items();
		
		// Task 2: (Using any design pattern)(I have created seperate Data Access Layer(DAL))
		$dal = new DALController;
        return $dal->check_array_key($items_array,$key);
	}
	
	/**
	 * Exclude items from an array
	 *
	 * @param $array
	 * @param $key
	 *
	 * @return array
	 */

	// Task 2: (Method 2: Exclude item(s) from an array)
	function only($array, $key) {
		$this->set_items($array);
		$items_array = $this->get_items();

		
		// Task 2: (Using any design pattern)(I have created seperate Data Access Layer(DAL))
		$dal = new DALController;
		return $dal->exclude_items($items_array,$key);
	}
}