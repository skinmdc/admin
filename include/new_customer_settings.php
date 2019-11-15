<?php
require_once(getabspath("classes/cipherer.php"));



$tdatanew_customer = array();
$tdatanew_customer[".ShortName"] = "new_customer";

$tdatanew_customer[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatanew_customer[".originalPagesByType"] = $tdatanew_customer[".pagesByType"];
$tdatanew_customer[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatanew_customer[".originalPages"] = $tdatanew_customer[".pages"];
$tdatanew_customer[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatanew_customer[".originalDefaultPages"] = $tdatanew_customer[".defaultPages"];


//	field labels
$fieldLabelsnew_customer = array();
$pageTitlesnew_customer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnew_customer["English"] = array();
}

//	search fields
$tdatanew_customer[".searchFields"] = array();

// all search fields
$tdatanew_customer[".allSearchFields"] = array();

// good like search fields
$tdatanew_customer[".googleLikeFields"] = array();

$tdatanew_customer[".dashElements"] = array();


$tdatanew_customer[".shortTableName"] = "new_customer";
$tdatanew_customer[".entityType"] = 4;



$tableEvents["New Customer"] = new eventsBase;
$tdatanew_customer[".hasEvents"] = false;


$tdatanew_customer[".tableType"] = "dashboard";


		
$tdatanew_customer[".addPageEvents"] = false;

$tdatanew_customer[".isUseAjaxSuggest"] = true;

$tables_data["New Customer"]=&$tdatanew_customer;
$field_labels["New_Customer"] = &$fieldLabelsnew_customer;
$page_titles["New_Customer"] = &$pageTitlesnew_customer;

?>