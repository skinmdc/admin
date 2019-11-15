<?php
require_once(getabspath("classes/cipherer.php"));



$tdataadministrator = array();
$tdataadministrator[".ShortName"] = "administrator";

$tdataadministrator[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdataadministrator[".originalPagesByType"] = $tdataadministrator[".pagesByType"];
$tdataadministrator[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdataadministrator[".originalPages"] = $tdataadministrator[".pages"];
$tdataadministrator[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdataadministrator[".originalDefaultPages"] = $tdataadministrator[".defaultPages"];


//	field labels
$fieldLabelsadministrator = array();
$pageTitlesadministrator = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadministrator["English"] = array();
}

//	search fields
$tdataadministrator[".searchFields"] = array();

// all search fields
$tdataadministrator[".allSearchFields"] = array();

// good like search fields
$tdataadministrator[".googleLikeFields"] = array();

$tdataadministrator[".dashElements"] = array();

	$dbelement = array( "elementName" => "administrator_snippet", "table" => "Administrator", 
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "cell_0_0";

				$dbelement["snippetId"] = "Administrator_snippet";


	$tdataadministrator[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "administrator_snippet1", "table" => "Administrator", 
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "cell_1_0";

				$dbelement["snippetId"] = "Administrator_snippet2";


	$tdataadministrator[".dashElements"][] = $dbelement;

$tdataadministrator[".shortTableName"] = "administrator";
$tdataadministrator[".entityType"] = 4;




include_once(getabspath("include/administrator_events.php"));
$tableEvents["Administrator"] = new eventclass_administrator;
$tdataadministrator[".hasEvents"] = true;


$tdataadministrator[".tableType"] = "dashboard";


		
$tdataadministrator[".addPageEvents"] = false;

$tdataadministrator[".isUseAjaxSuggest"] = true;

$tables_data["Administrator"]=&$tdataadministrator;
$field_labels["Administrator"] = &$fieldLabelsadministrator;
$page_titles["Administrator"] = &$pageTitlesadministrator;

?>