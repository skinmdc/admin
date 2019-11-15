<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["accounts"] ) ) {
			$lookupTableLinks["accounts"] = array();
		}
		if( !isset( $lookupTableLinks["accounts"]["appointments.accountID"] )) {
			$lookupTableLinks["accounts"]["appointments.accountID"] = array();
		}
		$lookupTableLinks["accounts"]["appointments.accountID"]["edit"] = array("table" => "appointments", "field" => "accountID", "page" => "edit");
		if( !isset( $lookupTableLinks["doctors"] ) ) {
			$lookupTableLinks["doctors"] = array();
		}
		if( !isset( $lookupTableLinks["doctors"]["appointments.doctor_id"] )) {
			$lookupTableLinks["doctors"]["appointments.doctor_id"] = array();
		}
		$lookupTableLinks["doctors"]["appointments.doctor_id"]["edit"] = array("table" => "appointments", "field" => "doctor_id", "page" => "edit");
		if( !isset( $lookupTableLinks["services"] ) ) {
			$lookupTableLinks["services"] = array();
		}
		if( !isset( $lookupTableLinks["services"]["appointments.serviceID"] )) {
			$lookupTableLinks["services"]["appointments.serviceID"] = array();
		}
		$lookupTableLinks["services"]["appointments.serviceID"]["edit"] = array("table" => "appointments", "field" => "serviceID", "page" => "edit");
		if( !isset( $lookupTableLinks["accounts"] ) ) {
			$lookupTableLinks["accounts"] = array();
		}
		if( !isset( $lookupTableLinks["accounts"]["scheduled_appointments.accountID"] )) {
			$lookupTableLinks["accounts"]["scheduled_appointments.accountID"] = array();
		}
		$lookupTableLinks["accounts"]["scheduled_appointments.accountID"]["edit"] = array("table" => "Scheduled Appointments", "field" => "accountID", "page" => "edit");
		if( !isset( $lookupTableLinks["doctors"] ) ) {
			$lookupTableLinks["doctors"] = array();
		}
		if( !isset( $lookupTableLinks["doctors"]["scheduled_appointments.doctor_id"] )) {
			$lookupTableLinks["doctors"]["scheduled_appointments.doctor_id"] = array();
		}
		$lookupTableLinks["doctors"]["scheduled_appointments.doctor_id"]["edit"] = array("table" => "Scheduled Appointments", "field" => "doctor_id", "page" => "edit");
		if( !isset( $lookupTableLinks["services"] ) ) {
			$lookupTableLinks["services"] = array();
		}
		if( !isset( $lookupTableLinks["services"]["scheduled_appointments.serviceID"] )) {
			$lookupTableLinks["services"]["scheduled_appointments.serviceID"] = array();
		}
		$lookupTableLinks["services"]["scheduled_appointments.serviceID"]["edit"] = array("table" => "Scheduled Appointments", "field" => "serviceID", "page" => "edit");
		if( !isset( $lookupTableLinks["doctors"] ) ) {
			$lookupTableLinks["doctors"] = array();
		}
		if( !isset( $lookupTableLinks["doctors"]["pending_appointments.doctor_id"] )) {
			$lookupTableLinks["doctors"]["pending_appointments.doctor_id"] = array();
		}
		$lookupTableLinks["doctors"]["pending_appointments.doctor_id"]["edit"] = array("table" => "Pending Appointments", "field" => "doctor_id", "page" => "edit");
		if( !isset( $lookupTableLinks["services"] ) ) {
			$lookupTableLinks["services"] = array();
		}
		if( !isset( $lookupTableLinks["services"]["pending_appointments.serviceID"] )) {
			$lookupTableLinks["services"]["pending_appointments.serviceID"] = array();
		}
		$lookupTableLinks["services"]["pending_appointments.serviceID"]["edit"] = array("table" => "Pending Appointments", "field" => "serviceID", "page" => "edit");
		if( !isset( $lookupTableLinks["doctors"] ) ) {
			$lookupTableLinks["doctors"] = array();
		}
		if( !isset( $lookupTableLinks["doctors"]["cancelled_appointments.doctor_id"] )) {
			$lookupTableLinks["doctors"]["cancelled_appointments.doctor_id"] = array();
		}
		$lookupTableLinks["doctors"]["cancelled_appointments.doctor_id"]["edit"] = array("table" => "Cancelled Appointments", "field" => "doctor_id", "page" => "edit");
		if( !isset( $lookupTableLinks["services"] ) ) {
			$lookupTableLinks["services"] = array();
		}
		if( !isset( $lookupTableLinks["services"]["cancelled_appointments.serviceID"] )) {
			$lookupTableLinks["services"]["cancelled_appointments.serviceID"] = array();
		}
		$lookupTableLinks["services"]["cancelled_appointments.serviceID"]["edit"] = array("table" => "Cancelled Appointments", "field" => "serviceID", "page" => "edit");
		if( !isset( $lookupTableLinks["doctors"] ) ) {
			$lookupTableLinks["doctors"] = array();
		}
		if( !isset( $lookupTableLinks["doctors"]["walkin.doctor_id"] )) {
			$lookupTableLinks["doctors"]["walkin.doctor_id"] = array();
		}
		$lookupTableLinks["doctors"]["walkin.doctor_id"]["edit"] = array("table" => "walkin", "field" => "doctor_id", "page" => "edit");
		if( !isset( $lookupTableLinks["services"] ) ) {
			$lookupTableLinks["services"] = array();
		}
		if( !isset( $lookupTableLinks["services"]["walkin.serviceID"] )) {
			$lookupTableLinks["services"]["walkin.serviceID"] = array();
		}
		$lookupTableLinks["services"]["walkin.serviceID"]["edit"] = array("table" => "walkin", "field" => "serviceID", "page" => "edit");
		if( !isset( $lookupTableLinks["accounts"] ) ) {
			$lookupTableLinks["accounts"] = array();
		}
		if( !isset( $lookupTableLinks["accounts"]["new_walkin.accountID"] )) {
			$lookupTableLinks["accounts"]["new_walkin.accountID"] = array();
		}
		$lookupTableLinks["accounts"]["new_walkin.accountID"]["edit"] = array("table" => "new_walkin", "field" => "accountID", "page" => "edit");
		if( !isset( $lookupTableLinks["doctors"] ) ) {
			$lookupTableLinks["doctors"] = array();
		}
		if( !isset( $lookupTableLinks["doctors"]["new_walkin.doctor_id"] )) {
			$lookupTableLinks["doctors"]["new_walkin.doctor_id"] = array();
		}
		$lookupTableLinks["doctors"]["new_walkin.doctor_id"]["edit"] = array("table" => "new_walkin", "field" => "doctor_id", "page" => "edit");
		if( !isset( $lookupTableLinks["services"] ) ) {
			$lookupTableLinks["services"] = array();
		}
		if( !isset( $lookupTableLinks["services"]["new_walkin.serviceID"] )) {
			$lookupTableLinks["services"]["new_walkin.serviceID"] = array();
		}
		$lookupTableLinks["services"]["new_walkin.serviceID"]["edit"] = array("table" => "new_walkin", "field" => "serviceID", "page" => "edit");
		if( !isset( $lookupTableLinks["accounts"] ) ) {
			$lookupTableLinks["accounts"] = array();
		}
		if( !isset( $lookupTableLinks["accounts"]["scheduled.accountID"] )) {
			$lookupTableLinks["accounts"]["scheduled.accountID"] = array();
		}
		$lookupTableLinks["accounts"]["scheduled.accountID"]["edit"] = array("table" => "scheduled", "field" => "accountID", "page" => "edit");
		if( !isset( $lookupTableLinks["doctors"] ) ) {
			$lookupTableLinks["doctors"] = array();
		}
		if( !isset( $lookupTableLinks["doctors"]["scheduled.doctor_id"] )) {
			$lookupTableLinks["doctors"]["scheduled.doctor_id"] = array();
		}
		$lookupTableLinks["doctors"]["scheduled.doctor_id"]["edit"] = array("table" => "scheduled", "field" => "doctor_id", "page" => "edit");
		if( !isset( $lookupTableLinks["services"] ) ) {
			$lookupTableLinks["services"] = array();
		}
		if( !isset( $lookupTableLinks["services"]["scheduled.serviceID"] )) {
			$lookupTableLinks["services"]["scheduled.serviceID"] = array();
		}
		$lookupTableLinks["services"]["scheduled.serviceID"]["edit"] = array("table" => "scheduled", "field" => "serviceID", "page" => "edit");
		if( !isset( $lookupTableLinks["accounts"] ) ) {
			$lookupTableLinks["accounts"] = array();
		}
		if( !isset( $lookupTableLinks["accounts"]["product_orders.account_id"] )) {
			$lookupTableLinks["accounts"]["product_orders.account_id"] = array();
		}
		$lookupTableLinks["accounts"]["product_orders.account_id"]["edit"] = array("table" => "product_orders", "field" => "account_id", "page" => "edit");
		if( !isset( $lookupTableLinks["products"] ) ) {
			$lookupTableLinks["products"] = array();
		}
		if( !isset( $lookupTableLinks["products"]["product_orders.product_id"] )) {
			$lookupTableLinks["products"]["product_orders.product_id"] = array();
		}
		$lookupTableLinks["products"]["product_orders.product_id"]["edit"] = array("table" => "product_orders", "field" => "product_id", "page" => "edit");
}

?>