<?php



$tdatascheduled = array();
$tdatascheduled[".searchableFields"] = array();
$tdatascheduled[".ShortName"] = "scheduled";
$tdatascheduled[".OwnerID"] = "";
$tdatascheduled[".OriginalTable"] = "appointments";


$tdatascheduled[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit1\",\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"search\":[\"search\"]}" );
$tdatascheduled[".originalPagesByType"] = $tdatascheduled[".pagesByType"];
$tdatascheduled[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit1\",\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"search\":[\"search\"]}" ) );
$tdatascheduled[".originalPages"] = $tdatascheduled[".pages"];
$tdatascheduled[".defaultPages"] = my_json_decode( "{\"edit\":\"edit1\",\"export\":\"export\",\"import\":\"import\",\"search\":\"search\"}" );
$tdatascheduled[".originalDefaultPages"] = $tdatascheduled[".defaultPages"];

//	field labels
$fieldLabelsscheduled = array();
$fieldToolTipsscheduled = array();
$pageTitlesscheduled = array();
$placeHoldersscheduled = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsscheduled["English"] = array();
	$fieldToolTipsscheduled["English"] = array();
	$placeHoldersscheduled["English"] = array();
	$pageTitlesscheduled["English"] = array();
	$fieldLabelsscheduled["English"]["title"] = "Title";
	$fieldToolTipsscheduled["English"]["title"] = "";
	$placeHoldersscheduled["English"]["title"] = "";
	$fieldLabelsscheduled["English"]["start"] = "Start Date and Time";
	$fieldToolTipsscheduled["English"]["start"] = "";
	$placeHoldersscheduled["English"]["start"] = "";
	$fieldLabelsscheduled["English"]["end"] = "End";
	$fieldToolTipsscheduled["English"]["end"] = "";
	$placeHoldersscheduled["English"]["end"] = "";
	$fieldLabelsscheduled["English"]["accountID"] = "Customer";
	$fieldToolTipsscheduled["English"]["accountID"] = "";
	$placeHoldersscheduled["English"]["accountID"] = "";
	$fieldLabelsscheduled["English"]["date_created"] = "Date Created";
	$fieldToolTipsscheduled["English"]["date_created"] = "";
	$placeHoldersscheduled["English"]["date_created"] = "";
	$fieldLabelsscheduled["English"]["date_modified"] = "Date Modified";
	$fieldToolTipsscheduled["English"]["date_modified"] = "";
	$placeHoldersscheduled["English"]["date_modified"] = "";
	$fieldLabelsscheduled["English"]["last_modified_by"] = "Last Modified By";
	$fieldToolTipsscheduled["English"]["last_modified_by"] = "";
	$placeHoldersscheduled["English"]["last_modified_by"] = "";
	$fieldLabelsscheduled["English"]["status"] = "Status";
	$fieldToolTipsscheduled["English"]["status"] = "";
	$placeHoldersscheduled["English"]["status"] = "";
	$fieldLabelsscheduled["English"]["doctor_id"] = "Attending Doctor";
	$fieldToolTipsscheduled["English"]["doctor_id"] = "";
	$placeHoldersscheduled["English"]["doctor_id"] = "";
	$fieldLabelsscheduled["English"]["email"] = "Email";
	$fieldToolTipsscheduled["English"]["email"] = "";
	$placeHoldersscheduled["English"]["email"] = "";
	$fieldLabelsscheduled["English"]["serviceID"] = "Service";
	$fieldToolTipsscheduled["English"]["serviceID"] = "";
	$placeHoldersscheduled["English"]["serviceID"] = "";
	$fieldLabelsscheduled["English"]["id"] = "Id";
	$fieldToolTipsscheduled["English"]["id"] = "";
	$placeHoldersscheduled["English"]["id"] = "";
	if (count($fieldToolTipsscheduled["English"]))
		$tdatascheduled[".isUseToolTips"] = true;
}


	$tdatascheduled[".NCSearch"] = true;



$tdatascheduled[".shortTableName"] = "scheduled";
$tdatascheduled[".nSecOptions"] = 0;

$tdatascheduled[".mainTableOwnerID"] = "";
$tdatascheduled[".entityType"] = 1;

$tdatascheduled[".strOriginalTableName"] = "appointments";

	



$tdatascheduled[".showAddInPopup"] = false;

$tdatascheduled[".showEditInPopup"] = false;

$tdatascheduled[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatascheduled[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatascheduled[".listAjax"] = true;
//	temporary
$tdatascheduled[".listAjax"] = false;

	$tdatascheduled[".audit"] = false;

	$tdatascheduled[".locking"] = false;


$pages = $tdatascheduled[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatascheduled[".edit"] = true;
	$tdatascheduled[".afterEditAction"] = 0;
	$tdatascheduled[".closePopupAfterEdit"] = 1;
	$tdatascheduled[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatascheduled[".add"] = true;
$tdatascheduled[".afterAddAction"] = 0;
$tdatascheduled[".closePopupAfterAdd"] = 1;
$tdatascheduled[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatascheduled[".list"] = true;
}



$tdatascheduled[".strSortControlSettingsJSON"] = "";

$tdatascheduled[".strClickActionJSON"] = "{\"fields\":{\"accountID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"date_created\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"date_modified\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"doctor_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"email\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"end\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"last_modified_by\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"serviceID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"start\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"status\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"title\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":null,\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatascheduled[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatascheduled[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatascheduled[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatascheduled[".printFriendly"] = true;
}



$tdatascheduled[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatascheduled[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatascheduled[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatascheduled[".isUseAjaxSuggest"] = true;

$tdatascheduled[".rowHighlite"] = true;



						

$tdatascheduled[".ajaxCodeSnippetAdded"] = false;

$tdatascheduled[".buttonsAdded"] = false;

$tdatascheduled[".addPageEvents"] = true;

// use timepicker for search panel
$tdatascheduled[".isUseTimeForSearch"] = false;


$tdatascheduled[".badgeColor"] = "EDCA00";


$tdatascheduled[".allSearchFields"] = array();
$tdatascheduled[".filterFields"] = array();
$tdatascheduled[".requiredSearchFields"] = array();

$tdatascheduled[".googleLikeFields"] = array();
$tdatascheduled[".googleLikeFields"][] = "id";
$tdatascheduled[".googleLikeFields"][] = "title";
$tdatascheduled[".googleLikeFields"][] = "start";
$tdatascheduled[".googleLikeFields"][] = "end";
$tdatascheduled[".googleLikeFields"][] = "accountID";
$tdatascheduled[".googleLikeFields"][] = "date_created";
$tdatascheduled[".googleLikeFields"][] = "date_modified";
$tdatascheduled[".googleLikeFields"][] = "last_modified_by";
$tdatascheduled[".googleLikeFields"][] = "status";
$tdatascheduled[".googleLikeFields"][] = "doctor_id";
$tdatascheduled[".googleLikeFields"][] = "email";
$tdatascheduled[".googleLikeFields"][] = "serviceID";



$tdatascheduled[".tableType"] = "list";

$tdatascheduled[".printerPageOrientation"] = 0;
$tdatascheduled[".nPrinterPageScale"] = 100;

$tdatascheduled[".nPrinterSplitRecords"] = 40;

$tdatascheduled[".geocodingEnabled"] = false;





$tdatascheduled[".isResizeColumns"] = true;





$tdatascheduled[".pageSize"] = 20;

$tdatascheduled[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatascheduled[".strOrderBy"] = $tstrOrderBy;

$tdatascheduled[".orderindexes"] = array();

$tdatascheduled[".sqlHead"] = "SELECT id,  	title,  	`start`,  	`end`,  	accountID,  	date_created,  	date_modified,  	last_modified_by,  	status,  	doctor_id,  	email,  	serviceID";
$tdatascheduled[".sqlFrom"] = "FROM appointments";
$tdatascheduled[".sqlWhereExpr"] = "";
$tdatascheduled[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatascheduled[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatascheduled[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatascheduled[".arrGroupsPerPage"] = $arrGPP;

$tdatascheduled[".highlightSearchResults"] = true;

$tableKeysscheduled = array();
$tableKeysscheduled[] = "id";
$tdatascheduled[".Keys"] = $tableKeysscheduled;


$tdatascheduled[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["id"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","title");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["title"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "title";
//	start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "start";
	$fdata["GoodName"] = "start";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","start");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`start`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Business Days are from Monday to Friday 9-6PM only", "messageType" => "Text");
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["start"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "start";
//	end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "end";
	$fdata["GoodName"] = "end";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","end");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "end";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`end`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["end"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "end";
//	accountID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "accountID";
	$fdata["GoodName"] = "accountID";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","accountID");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "accountID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accountID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accounts";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "accountID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(last_name,', ',first_name)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["accountID"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "accountID";
//	date_created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_created";
	$fdata["GoodName"] = "date_created";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","date_created");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "date_created";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_created";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["date_created"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "date_created";
//	date_modified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "date_modified";
	$fdata["GoodName"] = "date_modified";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","date_modified");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "date_modified";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_modified";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["date_modified"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "date_modified";
//	last_modified_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "last_modified_by";
	$fdata["GoodName"] = "last_modified_by";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","last_modified_by");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "last_modified_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_modified_by";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["last_modified_by"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "last_modified_by";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","status");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Pending";
	$edata["LookupValues"][] = "Scheduled";
	$edata["LookupValues"][] = "Cancelled";
	$edata["LookupValues"][] = "Done";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["status"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "status";
//	doctor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "doctor_id";
	$fdata["GoodName"] = "doctor_id";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","doctor_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "doctor_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doctor_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "doctors";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "doctor_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(first_name,' ',middle_initial,'. ', last_name,', ', title)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["doctor_id"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "doctor_id";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["email"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "email";
//	serviceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "serviceID";
	$fdata["GoodName"] = "serviceID";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("scheduled","serviceID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "serviceID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "serviceID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "services";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "serviceID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "service_name";

				$edata["LookupWhere"] = "category <> \"Products\"";


	
	$edata["LookupOrderBy"] = "category";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatascheduled["serviceID"] = $fdata;
		$tdatascheduled[".searchableFields"][] = "serviceID";


$tables_data["scheduled"]=&$tdatascheduled;
$field_labels["scheduled"] = &$fieldLabelsscheduled;
$fieldToolTips["scheduled"] = &$fieldToolTipsscheduled;
$placeHolders["scheduled"] = &$placeHoldersscheduled;
$page_titles["scheduled"] = &$pageTitlesscheduled;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["scheduled"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["scheduled"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_scheduled()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	title,  	`start`,  	`end`,  	accountID,  	date_created,  	date_modified,  	last_modified_by,  	status,  	doctor_id,  	email,  	serviceID";
$proto0["m_strFrom"] = "FROM appointments";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "scheduled";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "scheduled";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "start",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto10["m_sql"] = "`start`";
$proto10["m_srcTableName"] = "scheduled";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "end",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto12["m_sql"] = "`end`";
$proto12["m_srcTableName"] = "scheduled";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "accountID",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto14["m_sql"] = "accountID";
$proto14["m_srcTableName"] = "scheduled";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "date_created",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto16["m_sql"] = "date_created";
$proto16["m_srcTableName"] = "scheduled";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modified",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto18["m_sql"] = "date_modified";
$proto18["m_srcTableName"] = "scheduled";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "last_modified_by",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto20["m_sql"] = "last_modified_by";
$proto20["m_srcTableName"] = "scheduled";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto22["m_sql"] = "status";
$proto22["m_srcTableName"] = "scheduled";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "doctor_id",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto24["m_sql"] = "doctor_id";
$proto24["m_srcTableName"] = "scheduled";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto26["m_sql"] = "email";
$proto26["m_srcTableName"] = "scheduled";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "serviceID",
	"m_strTable" => "appointments",
	"m_srcTableName" => "scheduled"
));

$proto28["m_sql"] = "serviceID";
$proto28["m_srcTableName"] = "scheduled";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "appointments";
$proto31["m_srcTableName"] = "scheduled";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "title";
$proto31["m_columns"][] = "start";
$proto31["m_columns"][] = "end";
$proto31["m_columns"][] = "accountID";
$proto31["m_columns"][] = "date_created";
$proto31["m_columns"][] = "date_modified";
$proto31["m_columns"][] = "last_modified_by";
$proto31["m_columns"][] = "status";
$proto31["m_columns"][] = "doctor_id";
$proto31["m_columns"][] = "email";
$proto31["m_columns"][] = "serviceID";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "appointments";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "scheduled";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="scheduled";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_scheduled = createSqlQuery_scheduled();


	
		;

												

$tdatascheduled[".sqlquery"] = $queryData_scheduled;

include_once(getabspath("include/scheduled_events.php"));
$tableEvents["scheduled"] = new eventclass_scheduled;
$tdatascheduled[".hasEvents"] = true;

?>