<?php
require_once(getabspath("classes/cipherer.php"));



$tdataappointments___reschedule = array();
$tdataappointments___reschedule[".ShortName"] = "appointments___reschedule";

$tdataappointments___reschedule[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdataappointments___reschedule[".originalPagesByType"] = $tdataappointments___reschedule[".pagesByType"];
$tdataappointments___reschedule[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdataappointments___reschedule[".originalPages"] = $tdataappointments___reschedule[".pages"];
$tdataappointments___reschedule[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdataappointments___reschedule[".originalDefaultPages"] = $tdataappointments___reschedule[".defaultPages"];


//	field labels
$fieldLabelsappointments___reschedule = array();
$pageTitlesappointments___reschedule = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsappointments___reschedule["English"] = array();
}

//	search fields
$tdataappointments___reschedule[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"id" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"title" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"start" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_start"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"end" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_end"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"accountID" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_accountID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"date_created" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_date_created"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"date_modified" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_date_modified"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"last_modified_by" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_last_modified_by"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"status" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_status"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"doctor_id" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_doctor_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"email" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Scheduled Appointments", "field"=>"serviceID" );
$tdataappointments___reschedule[".searchFields"]["Scheduled_Appointments_serviceID"] = $dashField;

// all search fields
$tdataappointments___reschedule[".allSearchFields"] = array();
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_id";
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_title";
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_start";
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_end";
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_accountID";
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_date_created";
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_date_modified";
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_last_modified_by";
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_status";
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_doctor_id";
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_email";
$tdataappointments___reschedule[".allSearchFields"][] = "Scheduled_Appointments_serviceID";

// good like search fields
$tdataappointments___reschedule[".googleLikeFields"] = array();
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_id";
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_title";
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_start";
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_end";
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_accountID";
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_date_created";
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_date_modified";
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_last_modified_by";
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_status";
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_doctor_id";
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_email";
$tdataappointments___reschedule[".googleLikeFields"][] = "Scheduled_Appointments_serviceID";

$tdataappointments___reschedule[".dashElements"] = array();

	$dbelement = array( "elementName" => "scheduled_appointments_list", "table" => "Scheduled Appointments", 
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_0_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;
	
	$dbelement["updateSelected"] = 0 > 0;


	$tdataappointments___reschedule[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "pending_appointments_list", "table" => "Pending Appointments", 
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_1_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;
	
	$dbelement["updateSelected"] = 0 > 0;


	$tdataappointments___reschedule[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "cancelled_appointments_list", "table" => "Cancelled Appointments", 
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_2_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;
	
	$dbelement["updateSelected"] = 0 > 0;


	$tdataappointments___reschedule[".dashElements"][] = $dbelement;

$tdataappointments___reschedule[".shortTableName"] = "appointments___reschedule";
$tdataappointments___reschedule[".entityType"] = 4;



$tableEvents["Appointments / Reschedule"] = new eventsBase;
$tdataappointments___reschedule[".hasEvents"] = false;


$tdataappointments___reschedule[".tableType"] = "dashboard";


		
$tdataappointments___reschedule[".addPageEvents"] = false;

$tdataappointments___reschedule[".isUseAjaxSuggest"] = true;

$tables_data["Appointments / Reschedule"]=&$tdataappointments___reschedule;
$field_labels["Appointments___Reschedule"] = &$fieldLabelsappointments___reschedule;
$page_titles["Appointments___Reschedule"] = &$pageTitlesappointments___reschedule;

?>