<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_administrator  extends eventsBase
{
	function __construct()
	{
	// fill list of events

	}

//	handlers


// dashboatd snippets function
function event_Administrator_snippet( &$header )
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
echo '<a href="appointments_add.php" type="button" class="btn btn-default" data-popup>Schedule a Returning Customer</a>';;
}
function event_Administrator_snippet2( &$header )
{
	include "fullcalendar/index.php";;
}

}
?>
