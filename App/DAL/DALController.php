<?php

Class DALController{
    /**
	 * Check if items has key
	 *
	 * @param $array
	 * @param $key
	 *
	 * @return true or false
	 */
    function check_array_key($array, $key){
        if (array_key_exists($key,$array)){
			return 'true';
		}
		else{
			return 'false';
		}
    }

    /**
	 * Exclude items from an array
	 *
	 * @param $array
	 * @param $key
	 *
	 * @return array
	 */
    function exclude_items($array, $key){
        // check if key is array or string
        if(gettype($key) == 'string'){
			unset($array[$key]); 
		}else if((gettype($key) == 'array')){
			foreach ($key as $single_key) {
				unset($array[$single_key]); 
			}
        }
        return $array;
    }
}