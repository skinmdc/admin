<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;


//	onscreen events
		$this->events["Administrator_snippet1"] = true;
		$this->events["New_Customer_snippet"] = true;
		$this->events["Administrator_snippet2"] = true;
		$this->events["Administrator_snippet"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		$_SESSION['user_email'] = $data['email'];

if($data['access_type']=="Doctor Account"){
		$a = array();
		$a["email"] = $data['email'];
		$rs = DB::Select("doctors", $a );
		while( $record = $rs->fetchAssoc() )
		{
			  $_SESSION['doctor_id'] = $record['doctor_id'];
		}
		header("Location: doctor_dashboard.php");
		exit();
}else{
		header("Location: administrator_dashboard.php");
		exit();
}

;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_Administrator_snippet1(&$params)
	{
	include "basic_calendar/index.html"
	;
}
	function event_New_Customer_snippet(&$params)
	{
	include "fullcalendar/index.php";
	;
}
	function event_Administrator_snippet2(&$params)
	{
	include "fullcalendar/index.php";
	;
}
	function event_Administrator_snippet(&$params)
	{
	date_default_timezone_set('Asia/Manila');
$timeOfDay = date('a');
    if($timeOfDay == 'am'){
        $header = 'Good morning, '.$_SESSION['UserName'];
    }else{
        $header = 'Good afternoon, '.$_SESSION['UserName'];
    }
echo '<a href="new_walkin_add.php" type="button" class="btn btn-primary" data-popup>New Customer</a>';
echo "<br><br>";
echo '<a href="appointments_add.php" type="button" class="btn btn-default" data-popup>Schedule a Returning Customer</a>';
	;
}




}
?>
