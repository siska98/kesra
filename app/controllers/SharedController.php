<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * pengguna_Username_value_exist Model Action
     * @return array
     */
	function pengguna_Username_value_exist($val){
		$db = $this->GetModel();
		$db->where("Username", $val);
		$exist = $db->has("pengguna");
		return $exist;
	}

	/**
     * pengguna_Email_value_exist Model Action
     * @return array
     */
	function pengguna_Email_value_exist($val){
		$db = $this->GetModel();
		$db->where("Email", $val);
		$exist = $db->has("pengguna");
		return $exist;
	}

	/**
     * getcount_bintal Model Action
     * @return Value
     */
	function getcount_bintal(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM bintal";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_kesmas Model Action
     * @return Value
     */
	function getcount_kesmas(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM kesmas";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_sosial Model Action
     * @return Value
     */
	function getcount_sosial(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM sosial";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_pengguna Model Action
     * @return Value
     */
	function getcount_pengguna(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM pengguna";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
