<?php



$tdatanew_walkin = array();
$tdatanew_walkin[".searchableFields"] = array();
$tdatanew_walkin[".ShortName"] = "new_walkin";
$tdatanew_walkin[".OwnerID"] = "";
$tdatanew_walkin[".OriginalTable"] = "appointments";


$tdatanew_walkin[".pagesByType"] = my_json_decode( "{\"add\":[\"add\",\"add1\"],\"export\":[\"export\"],\"import\":[\"import\"],\"search\":[\"search\"]}" );
$tdatanew_walkin[".originalPagesByType"] = $tdatanew_walkin[".pagesByType"];
$tdatanew_walkin[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\",\"add1\"],\"export\":[\"export\"],\"import\":[\"import\"],\"search\":[\"search\"]}" ) );
$tdatanew_walkin[".originalPages"] = $tdatanew_walkin[".pages"];
$tdatanew_walkin[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"search\":\"search\"}" );
$tdatanew_walkin[".originalDefaultPages"] = $tdatanew_walkin[".defaultPages"];

//	field labels
$fieldLabelsnew_walkin = array();
$fieldToolTipsnew_walkin = array();
$pageTitlesnew_walkin = array();
$placeHoldersnew_walkin = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnew_walkin["English"] = array();
	$fieldToolTipsnew_walkin["English"] = array();
	$placeHoldersnew_walkin["English"] = array();
	$pageTitlesnew_walkin["English"] = array();
	$fieldLabelsnew_walkin["English"]["title"] = "Title";
	$fieldToolTipsnew_walkin["English"]["title"] = "";
	$placeHoldersnew_walkin["English"]["title"] = "";
	$fieldLabelsnew_walkin["English"]["start"] = "Start Date and Time";
	$fieldToolTipsnew_walkin["English"]["start"] = "";
	$placeHoldersnew_walkin["English"]["start"] = "";
	$fieldLabelsnew_walkin["English"]["end"] = "End";
	$fieldToolTipsnew_walkin["English"]["end"] = "";
	$placeHoldersnew_walkin["English"]["end"] = "";
	$fieldLabelsnew_walkin["English"]["accountID"] = "Customer";
	$fieldToolTipsnew_walkin["English"]["accountID"] = "";
	$placeHoldersnew_walkin["English"]["accountID"] = "";
	$fieldLabelsnew_walkin["English"]["date_created"] = "Date Created";
	$fieldToolTipsnew_walkin["English"]["date_created"] = "";
	$placeHoldersnew_walkin["English"]["date_created"] = "";
	$fieldLabelsnew_walkin["English"]["date_modified"] = "Date Modified";
	$fieldToolTipsnew_walkin["English"]["date_modified"] = "";
	$placeHoldersnew_walkin["English"]["date_modified"] = "";
	$fieldLabelsnew_walkin["English"]["last_modified_by"] = "Last Modified By";
	$fieldToolTipsnew_walkin["English"]["last_modified_by"] = "";
	$placeHoldersnew_walkin["English"]["last_modified_by"] = "";
	$fieldLabelsnew_walkin["English"]["status"] = "Status";
	$fieldToolTipsnew_walkin["English"]["status"] = "";
	$placeHoldersnew_walkin["English"]["status"] = "";
	$fieldLabelsnew_walkin["English"]["doctor_id"] = "Attending Doctor";
	$fieldToolTipsnew_walkin["English"]["doctor_id"] = "";
	$placeHoldersnew_walkin["English"]["doctor_id"] = "";
	$fieldLabelsnew_walkin["English"]["email"] = "Email";
	$fieldToolTipsnew_walkin["English"]["email"] = "";
	$placeHoldersnew_walkin["English"]["email"] = "";
	$fieldLabelsnew_walkin["English"]["serviceID"] = "Service";
	$fieldToolTipsnew_walkin["English"]["serviceID"] = "";
	$placeHoldersnew_walkin["English"]["serviceID"] = "";
	$fieldLabelsnew_walkin["English"]["id"] = "Id";
	$fieldToolTipsnew_walkin["English"]["id"] = "";
	$placeHoldersnew_walkin["English"]["id"] = "";
	$fieldLabelsnew_walkin["English"]["accountID1"] = "Account ID1";
	$fieldToolTipsnew_walkin["English"]["accountID1"] = "";
	$placeHoldersnew_walkin["English"]["accountID1"] = "";
	$fieldLabelsnew_walkin["English"]["first_name"] = "First Name";
	$fieldToolTipsnew_walkin["English"]["first_name"] = "";
	$placeHoldersnew_walkin["English"]["first_name"] = "";
	$fieldLabelsnew_walkin["English"]["last_name"] = "Last Name";
	$fieldToolTipsnew_walkin["English"]["last_name"] = "";
	$placeHoldersnew_walkin["English"]["last_name"] = "";
	$fieldLabelsnew_walkin["English"]["middle_name"] = "Middle Name";
	$fieldToolTipsnew_walkin["English"]["middle_name"] = "";
	$placeHoldersnew_walkin["English"]["middle_name"] = "";
	$fieldLabelsnew_walkin["English"]["contact_no"] = "Contact No";
	$fieldToolTipsnew_walkin["English"]["contact_no"] = "";
	$placeHoldersnew_walkin["English"]["contact_no"] = "";
	$fieldLabelsnew_walkin["English"]["address_line"] = "Address Line";
	$fieldToolTipsnew_walkin["English"]["address_line"] = "";
	$placeHoldersnew_walkin["English"]["address_line"] = "";
	$fieldLabelsnew_walkin["English"]["barangay"] = "Barangay";
	$fieldToolTipsnew_walkin["English"]["barangay"] = "";
	$placeHoldersnew_walkin["English"]["barangay"] = "";
	$fieldLabelsnew_walkin["English"]["city_province_region"] = "City/Province/Region";
	$fieldToolTipsnew_walkin["English"]["city_province_region"] = "";
	$placeHoldersnew_walkin["English"]["city_province_region"] = "";
	$fieldLabelsnew_walkin["English"]["email1"] = "Email";
	$fieldToolTipsnew_walkin["English"]["email1"] = "";
	$placeHoldersnew_walkin["English"]["email1"] = "";
	$fieldLabelsnew_walkin["English"]["prefered_mode_of_payment"] = "Prefered Mode Of Payment";
	$fieldToolTipsnew_walkin["English"]["prefered_mode_of_payment"] = "";
	$placeHoldersnew_walkin["English"]["prefered_mode_of_payment"] = "";
	$fieldLabelsnew_walkin["English"]["date_modified1"] = "Date Modified1";
	$fieldToolTipsnew_walkin["English"]["date_modified1"] = "";
	$placeHoldersnew_walkin["English"]["date_modified1"] = "";
	$fieldLabelsnew_walkin["English"]["date_created1"] = "Date Created1";
	$fieldToolTipsnew_walkin["English"]["date_created1"] = "";
	$placeHoldersnew_walkin["English"]["date_created1"] = "";
	$fieldLabelsnew_walkin["English"]["last_modified_by1"] = "Last Modified By1";
	$fieldToolTipsnew_walkin["English"]["last_modified_by1"] = "";
	$placeHoldersnew_walkin["English"]["last_modified_by1"] = "";
	$fieldLabelsnew_walkin["English"]["full_name"] = "Full Name";
	$fieldToolTipsnew_walkin["English"]["full_name"] = "";
	$placeHoldersnew_walkin["English"]["full_name"] = "";
	$pageTitlesnew_walkin["English"]["add"] = "New Customer";
	if (count($fieldToolTipsnew_walkin["English"]))
		$tdatanew_walkin[".isUseToolTips"] = true;
}


	$tdatanew_walkin[".NCSearch"] = true;



$tdatanew_walkin[".shortTableName"] = "new_walkin";
$tdatanew_walkin[".nSecOptions"] = 0;

$tdatanew_walkin[".mainTableOwnerID"] = "";
$tdatanew_walkin[".entityType"] = 1;

$tdatanew_walkin[".strOriginalTableName"] = "appointments";

	



$tdatanew_walkin[".showAddInPopup"] = false;

$tdatanew_walkin[".showEditInPopup"] = false;

$tdatanew_walkin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanew_walkin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatanew_walkin[".listAjax"] = true;
//	temporary
$tdatanew_walkin[".listAjax"] = false;

	$tdatanew_walkin[".audit"] = false;

	$tdatanew_walkin[".locking"] = false;


$pages = $tdatanew_walkin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanew_walkin[".edit"] = true;
	$tdatanew_walkin[".afterEditAction"] = 1;
	$tdatanew_walkin[".closePopupAfterEdit"] = 1;
	$tdatanew_walkin[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanew_walkin[".add"] = true;
$tdatanew_walkin[".afterAddAction"] = 0;
$tdatanew_walkin[".closePopupAfterAdd"] = 1;
$tdatanew_walkin[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatanew_walkin[".list"] = true;
}



$tdatanew_walkin[".strSortControlSettingsJSON"] = "";

$tdatanew_walkin[".strClickActionJSON"] = "{\"fields\":{\"accountID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"date_created\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"date_modified\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"doctor_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"email\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"end\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"last_modified_by\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"serviceID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"start\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"status\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"title\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":null,\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatanew_walkin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanew_walkin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanew_walkin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanew_walkin[".printFriendly"] = true;
}



$tdatanew_walkin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanew_walkin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanew_walkin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanew_walkin[".isUseAjaxSuggest"] = true;

$tdatanew_walkin[".rowHighlite"] = true;



						

$tdatanew_walkin[".ajaxCodeSnippetAdded"] = false;

$tdatanew_walkin[".buttonsAdded"] = false;

$tdatanew_walkin[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanew_walkin[".isUseTimeForSearch"] = false;


$tdatanew_walkin[".badgeColor"] = "6493EA";


$tdatanew_walkin[".allSearchFields"] = array();
$tdatanew_walkin[".filterFields"] = array();
$tdatanew_walkin[".requiredSearchFields"] = array();

$tdatanew_walkin[".googleLikeFields"] = array();
$tdatanew_walkin[".googleLikeFields"][] = "id";
$tdatanew_walkin[".googleLikeFields"][] = "title";
$tdatanew_walkin[".googleLikeFields"][] = "start";
$tdatanew_walkin[".googleLikeFields"][] = "end";
$tdatanew_walkin[".googleLikeFields"][] = "accountID";
$tdatanew_walkin[".googleLikeFields"][] = "date_created";
$tdatanew_walkin[".googleLikeFields"][] = "date_modified";
$tdatanew_walkin[".googleLikeFields"][] = "last_modified_by";
$tdatanew_walkin[".googleLikeFields"][] = "status";
$tdatanew_walkin[".googleLikeFields"][] = "doctor_id";
$tdatanew_walkin[".googleLikeFields"][] = "email";
$tdatanew_walkin[".googleLikeFields"][] = "serviceID";
$tdatanew_walkin[".googleLikeFields"][] = "accountID1";
$tdatanew_walkin[".googleLikeFields"][] = "first_name";
$tdatanew_walkin[".googleLikeFields"][] = "last_name";
$tdatanew_walkin[".googleLikeFields"][] = "middle_name";
$tdatanew_walkin[".googleLikeFields"][] = "contact_no";
$tdatanew_walkin[".googleLikeFields"][] = "address_line";
$tdatanew_walkin[".googleLikeFields"][] = "barangay";
$tdatanew_walkin[".googleLikeFields"][] = "city_province_region";
$tdatanew_walkin[".googleLikeFields"][] = "email1";
$tdatanew_walkin[".googleLikeFields"][] = "prefered_mode_of_payment";
$tdatanew_walkin[".googleLikeFields"][] = "date_modified1";
$tdatanew_walkin[".googleLikeFields"][] = "date_created1";
$tdatanew_walkin[".googleLikeFields"][] = "last_modified_by1";
$tdatanew_walkin[".googleLikeFields"][] = "full_name";



$tdatanew_walkin[".tableType"] = "list";

$tdatanew_walkin[".printerPageOrientation"] = 0;
$tdatanew_walkin[".nPrinterPageScale"] = 100;

$tdatanew_walkin[".nPrinterSplitRecords"] = 40;

$tdatanew_walkin[".geocodingEnabled"] = false;





$tdatanew_walkin[".isResizeColumns"] = true;





$tdatanew_walkin[".pageSize"] = 20;

$tdatanew_walkin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanew_walkin[".strOrderBy"] = $tstrOrderBy;

$tdatanew_walkin[".orderindexes"] = array();

$tdatanew_walkin[".sqlHead"] = "SELECT appointments.id,  appointments.title,  appointments.`start`,  appointments.`end`,  appointments.accountID,  appointments.date_created,  appointments.date_modified,  appointments.last_modified_by,  appointments.status,  appointments.doctor_id,  appointments.email,  appointments.serviceID,  accounts.accountID AS accountID1,  accounts.first_name,  accounts.last_name,  accounts.middle_name,  accounts.contact_no,  accounts.address_line,  accounts.barangay,  accounts.city_province_region,  accounts.email AS email1,  accounts.prefered_mode_of_payment,  accounts.date_modified AS date_modified1,  accounts.date_created AS date_created1,  accounts.last_modified_by AS last_modified_by1,  accounts.full_name";
$tdatanew_walkin[".sqlFrom"] = "FROM appointments  , accounts";
$tdatanew_walkin[".sqlWhereExpr"] = "";
$tdatanew_walkin[".sqlTail"] = "";

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
$tdatanew_walkin[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanew_walkin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanew_walkin[".arrGroupsPerPage"] = $arrGPP;

$tdatanew_walkin[".highlightSearchResults"] = true;

$tableKeysnew_walkin = array();
$tableKeysnew_walkin[] = "id";
$tdatanew_walkin[".Keys"] = $tableKeysnew_walkin;


$tdatanew_walkin[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.id";

	
	
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


	$tdatanew_walkin["id"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","title");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.title";

	
	
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


	$tdatanew_walkin["title"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "title";
//	start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "start";
	$fdata["GoodName"] = "start";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","start");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.`start`";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Date and Time is not available.", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatanew_walkin["start"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "start";
//	end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "end";
	$fdata["GoodName"] = "end";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","end");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "end";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.`end`";

	
	
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


	$tdatanew_walkin["end"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "end";
//	accountID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "accountID";
	$fdata["GoodName"] = "accountID";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","accountID");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "accountID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.accountID";

	
	
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


	$tdatanew_walkin["accountID"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "accountID";
//	date_created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_created";
	$fdata["GoodName"] = "date_created";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","date_created");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "date_created";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.date_created";

	
	
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


	$tdatanew_walkin["date_created"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "date_created";
//	date_modified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "date_modified";
	$fdata["GoodName"] = "date_modified";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","date_modified");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "date_modified";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.date_modified";

	
	
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


	$tdatanew_walkin["date_modified"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "date_modified";
//	last_modified_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "last_modified_by";
	$fdata["GoodName"] = "last_modified_by";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","last_modified_by");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "last_modified_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.last_modified_by";

	
	
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


	$tdatanew_walkin["last_modified_by"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "last_modified_by";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","status");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.status";

	
	
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


	$tdatanew_walkin["status"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "status";
//	doctor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "doctor_id";
	$fdata["GoodName"] = "doctor_id";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","doctor_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "doctor_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.doctor_id";

	
	
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


	$tdatanew_walkin["doctor_id"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "doctor_id";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.email";

	
	
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


	$tdatanew_walkin["email"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "email";
//	serviceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "serviceID";
	$fdata["GoodName"] = "serviceID";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("new_walkin","serviceID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "serviceID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "appointments.serviceID";

	
	
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


	$tdatanew_walkin["serviceID"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "serviceID";
//	accountID1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "accountID1";
	$fdata["GoodName"] = "accountID1";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","accountID1");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "accountID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.accountID";

	
	
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


	$tdatanew_walkin["accountID1"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "accountID1";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","first_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "first_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.first_name";

	
	
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


	$tdatanew_walkin["first_name"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "first_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","last_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "last_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.last_name";

	
	
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


	$tdatanew_walkin["last_name"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "last_name";
//	middle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "middle_name";
	$fdata["GoodName"] = "middle_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","middle_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "middle_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.middle_name";

	
	
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


	$tdatanew_walkin["middle_name"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "middle_name";
//	contact_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "contact_no";
	$fdata["GoodName"] = "contact_no";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","contact_no");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contact_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.contact_no";

	
	
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


	$tdatanew_walkin["contact_no"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "contact_no";
//	address_line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "address_line";
	$fdata["GoodName"] = "address_line";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","address_line");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "address_line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.address_line";

	
	
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


	$tdatanew_walkin["address_line"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "address_line";
//	barangay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "barangay";
	$fdata["GoodName"] = "barangay";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","barangay");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "barangay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.barangay";

	
	
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


	$tdatanew_walkin["barangay"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "barangay";
//	city_province_region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "city_province_region";
	$fdata["GoodName"] = "city_province_region";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","city_province_region");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "city_province_region";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.city_province_region";

	
	
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


	$tdatanew_walkin["city_province_region"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "city_province_region";
//	email1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "email1";
	$fdata["GoodName"] = "email1";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","email1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.email";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdatanew_walkin["email1"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "email1";
//	prefered_mode_of_payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "prefered_mode_of_payment";
	$fdata["GoodName"] = "prefered_mode_of_payment";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","prefered_mode_of_payment");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "prefered_mode_of_payment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.prefered_mode_of_payment";

	
	
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


	$tdatanew_walkin["prefered_mode_of_payment"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "prefered_mode_of_payment";
//	date_modified1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "date_modified1";
	$fdata["GoodName"] = "date_modified1";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","date_modified1");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "date_modified";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.date_modified";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatanew_walkin["date_modified1"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "date_modified1";
//	date_created1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "date_created1";
	$fdata["GoodName"] = "date_created1";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","date_created1");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "date_created";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.date_created";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatanew_walkin["date_created1"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "date_created1";
//	last_modified_by1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "last_modified_by1";
	$fdata["GoodName"] = "last_modified_by1";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","last_modified_by1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "last_modified_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.last_modified_by";

	
	
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


	$tdatanew_walkin["last_modified_by1"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "last_modified_by1";
//	full_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "full_name";
	$fdata["GoodName"] = "full_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("new_walkin","full_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "full_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accounts.full_name";

	
	
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


	$tdatanew_walkin["full_name"] = $fdata;
		$tdatanew_walkin[".searchableFields"][] = "full_name";


$tables_data["new_walkin"]=&$tdatanew_walkin;
$field_labels["new_walkin"] = &$fieldLabelsnew_walkin;
$fieldToolTips["new_walkin"] = &$fieldToolTipsnew_walkin;
$placeHolders["new_walkin"] = &$placeHoldersnew_walkin;
$page_titles["new_walkin"] = &$pageTitlesnew_walkin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["new_walkin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["new_walkin"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_new_walkin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "appointments.id,  appointments.title,  appointments.`start`,  appointments.`end`,  appointments.accountID,  appointments.date_created,  appointments.date_modified,  appointments.last_modified_by,  appointments.status,  appointments.doctor_id,  appointments.email,  appointments.serviceID,  accounts.accountID AS accountID1,  accounts.first_name,  accounts.last_name,  accounts.middle_name,  accounts.contact_no,  accounts.address_line,  accounts.barangay,  accounts.city_province_region,  accounts.email AS email1,  accounts.prefered_mode_of_payment,  accounts.date_modified AS date_modified1,  accounts.date_created AS date_created1,  accounts.last_modified_by AS last_modified_by1,  accounts.full_name";
$proto0["m_strFrom"] = "FROM appointments  , accounts";
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
	"m_srcTableName" => "new_walkin"
));

$proto6["m_sql"] = "appointments.id";
$proto6["m_srcTableName"] = "new_walkin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "appointments",
	"m_srcTableName" => "new_walkin"
));

$proto8["m_sql"] = "appointments.title";
$proto8["m_srcTableName"] = "new_walkin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "start",
	"m_strTable" => "appointments",
	"m_srcTableName" => "new_walkin"
));

$proto10["m_sql"] = "appointments.`start`";
$proto10["m_srcTableName"] = "new_walkin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "end",
	"m_strTable" => "appointments",
	"m_srcTableName" => "new_walkin"
));

$proto12["m_sql"] = "appointments.`end`";
$proto12["m_srcTableName"] = "new_walkin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "accountID",
	"m_strTable" => "appointments",
	"m_srcTableName" => "new_walkin"
));

$proto14["m_sql"] = "appointments.accountID";
$proto14["m_srcTableName"] = "new_walkin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "date_created",
	"m_strTable" => "appointments",
	"m_srcTableName" => "new_walkin"
));

$proto16["m_sql"] = "appointments.date_created";
$proto16["m_srcTableName"] = "new_walkin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modified",
	"m_strTable" => "appointments",
	"m_srcTableName" => "new_walkin"
));

$proto18["m_sql"] = "appointments.date_modified";
$proto18["m_srcTableName"] = "new_walkin";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "last_modified_by",
	"m_strTable" => "appointments",
	"m_srcTableName" => "new_walkin"
));

$proto20["m_sql"] = "appointments.last_modified_by";
$proto20["m_srcTableName"] = "new_walkin";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "appointments",
	"m_srcTableName" => "new_walkin"
));

$proto22["m_sql"] = "appointments.status";
$proto22["m_srcTableName"] = "new_walkin";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "doctor_id",
	"m_strTable" => "appointments",
	"m_srcTableName" => "new_walkin"
));

$proto24["m_sql"] = "appointments.doctor_id";
$proto24["m_srcTableName"] = "new_walkin";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "appointments",
	"m_srcTableName" => "new_walkin"
));

$proto26["m_sql"] = "appointments.email";
$proto26["m_srcTableName"] = "new_walkin";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "serviceID",
	"m_strTable" => "appointments",
	"m_srcTableName" => "new_walkin"
));

$proto28["m_sql"] = "appointments.serviceID";
$proto28["m_srcTableName"] = "new_walkin";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "accountID",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto30["m_sql"] = "accounts.accountID";
$proto30["m_srcTableName"] = "new_walkin";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "accountID1";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto32["m_sql"] = "accounts.first_name";
$proto32["m_srcTableName"] = "new_walkin";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto34["m_sql"] = "accounts.last_name";
$proto34["m_srcTableName"] = "new_walkin";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "middle_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto36["m_sql"] = "accounts.middle_name";
$proto36["m_srcTableName"] = "new_walkin";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_no",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto38["m_sql"] = "accounts.contact_no";
$proto38["m_srcTableName"] = "new_walkin";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "address_line",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto40["m_sql"] = "accounts.address_line";
$proto40["m_srcTableName"] = "new_walkin";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "barangay",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto42["m_sql"] = "accounts.barangay";
$proto42["m_srcTableName"] = "new_walkin";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "city_province_region",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto44["m_sql"] = "accounts.city_province_region";
$proto44["m_srcTableName"] = "new_walkin";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto46["m_sql"] = "accounts.email";
$proto46["m_srcTableName"] = "new_walkin";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "email1";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "prefered_mode_of_payment",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto48["m_sql"] = "accounts.prefered_mode_of_payment";
$proto48["m_srcTableName"] = "new_walkin";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modified",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto50["m_sql"] = "accounts.date_modified";
$proto50["m_srcTableName"] = "new_walkin";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "date_modified1";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "date_created",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto52["m_sql"] = "accounts.date_created";
$proto52["m_srcTableName"] = "new_walkin";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "date_created1";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "last_modified_by",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto54["m_sql"] = "accounts.last_modified_by";
$proto54["m_srcTableName"] = "new_walkin";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "last_modified_by1";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "full_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "new_walkin"
));

$proto56["m_sql"] = "accounts.full_name";
$proto56["m_srcTableName"] = "new_walkin";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "appointments";
$proto59["m_srcTableName"] = "new_walkin";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "id";
$proto59["m_columns"][] = "title";
$proto59["m_columns"][] = "start";
$proto59["m_columns"][] = "end";
$proto59["m_columns"][] = "accountID";
$proto59["m_columns"][] = "date_created";
$proto59["m_columns"][] = "date_modified";
$proto59["m_columns"][] = "last_modified_by";
$proto59["m_columns"][] = "status";
$proto59["m_columns"][] = "doctor_id";
$proto59["m_columns"][] = "email";
$proto59["m_columns"][] = "serviceID";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "appointments";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "new_walkin";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
												$proto62=array();
$proto62["m_link"] = "SQLL_CROSSJOIN";
			$proto63=array();
$proto63["m_strName"] = "accounts";
$proto63["m_srcTableName"] = "new_walkin";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "accountID";
$proto63["m_columns"][] = "first_name";
$proto63["m_columns"][] = "last_name";
$proto63["m_columns"][] = "middle_name";
$proto63["m_columns"][] = "contact_no";
$proto63["m_columns"][] = "address_line";
$proto63["m_columns"][] = "barangay";
$proto63["m_columns"][] = "city_province_region";
$proto63["m_columns"][] = "email";
$proto63["m_columns"][] = "prefered_mode_of_payment";
$proto63["m_columns"][] = "date_modified";
$proto63["m_columns"][] = "date_created";
$proto63["m_columns"][] = "last_modified_by";
$proto63["m_columns"][] = "full_name";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "accounts";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "new_walkin";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="new_walkin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_new_walkin = createSqlQuery_new_walkin();


	
		;

																										

$tdatanew_walkin[".sqlquery"] = $queryData_new_walkin;

include_once(getabspath("include/new_walkin_events.php"));
$tableEvents["new_walkin"] = new eventclass_new_walkin;
$tdatanew_walkin[".hasEvents"] = true;

?>