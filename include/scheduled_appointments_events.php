<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_scheduled_appointments  extends eventsBase
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

		


//**********  Check if specific record exists  ************

$rs = DB::Query("select * from appointments where start=".$values['start']);
$data=$rs->fetchAssoc();
if($data)
{
	// if record exists do something
	$pageObject->setMessageType(MESSAGE_ERROR);
	$pageObject->setMessage("Appointment Date and Time is not available. Please try a different date or time.");
}
else
{
	// if dont exist do something else
$r = array();
$r["title"] = $values['title'];
$r["start"] = $values['start'];
$r["end"] = $values['end'];
$r["accountID"] = $values['accountID'];
$r["status"] = $values['status'];
$r["doctor_id"] = $values['doctor_id'];
$r["email"] = $values['email'];
$r["serviceID"] = $values['serviceID'];
DB::Insert("appointments", $r);
}





// Place event code here.
// Use "Add Action" button to add code snippets.

return false;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
