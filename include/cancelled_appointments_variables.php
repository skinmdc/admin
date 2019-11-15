<?php
$strTableName="Cancelled Appointments";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="appointments";

$gstrOrderBy="ORDER BY `start`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Cancelled Appointments");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Cancelled Appointments"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>