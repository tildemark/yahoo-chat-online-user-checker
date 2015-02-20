<?php
/**
 * <b>Online Vistors Count</b> class.
 * @author Alfredo Sanchez
 * @version 1.0 / PHP4
 * @see http://www.tildemark.com/programming/php
 * @copyright Free for personal & commercial use.  
 */
class Yahoo {

    /**
     * Function that checks online status based on the given Yahoo ID. 
     * Returns true if the Yahoo ID is online and false if otherwise.
     *
     * @param $yahooid 
     * @return boolean $status
     */
	function Get_status($yahooid){

		$status = file_get_contents("http://opi.yahoo.com/online?u=$yahooid&m=a&t=1");
		if ($status === '00')
			return false;
		elseif ($status === '01')
			return true;
	}
	
}
?>