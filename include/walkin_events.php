<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_walkin  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		


//**********  Insert a record into another table  ************

$data = array();
$data["first_name"] = $values['first_name'];
$data["last_name"]= $values['last_name'];
$data['middle_name'] = $values['middle_name'];
$data['contact_no'] = $values['contact_no'];
$data['address_line'] = $values['address_line'];
$data['barangay'] = $values['barangay'];
$data['city_province_region'] = $values['city_province_region'];
$data['email'] = $values['email'];
$data['prefered_mode_of_payment'] = $values['prefered_mode_of_payment'];
$data['date_modified'] = now();
$data['date_created'] = now();
$data['last_modified_by'] = $_SESSION['UserName'];
DB::Insert("accounts", $data );

$accountID = DB::LastId();

//**********  Save new data in another table  ************

$data = array();
$data["title"] = $values["title"];
$data["start"] = $values['start'];
$data["end"] = $values['end'];
$data["accountID"] = $accountID;
$data["date_created"] = now();
$data["date_modified"] = now();
$data["last_modified_by"] = $_SESSION['UserName'];
$data["status"] = $values["status"];
$data["doctor_id"] = $values["doctor_id"];
$data["serviceID"] = $values["serviceID"];
DB::Insert("appointments", $data );



return false;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
