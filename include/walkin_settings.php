<?php



$tdatawalkin = array();
$tdatawalkin[".searchableFields"] = array();
$tdatawalkin[".ShortName"] = "walkin";
$tdatawalkin[".OwnerID"] = "";
$tdatawalkin[".OriginalTable"] = "accounts";


$tdatawalkin[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"search\":[\"search\"]}" );
$tdatawalkin[".originalPagesByType"] = $tdatawalkin[".pagesByType"];
$tdatawalkin[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"search\":[\"search\"]}" ) );
$tdatawalkin[".originalPages"] = $tdatawalkin[".pages"];
$tdatawalkin[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"search\":\"search\"}" );
$tdatawalkin[".originalDefaultPages"] = $tdatawalkin[".defaultPages"];

//	field labels
$fieldLabelswalkin = array();
$fieldToolTipswalkin = array();
$pageTitleswalkin = array();
$placeHolderswalkin = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswalkin["English"] = array();
	$fieldToolTipswalkin["English"] = array();
	$placeHolderswalkin["English"] = array();
	$pageTitleswalkin["English"] = array();
	$fieldLabelswalkin["English"]["accountID"] = "Account ID";
	$fieldToolTipswalkin["English"]["accountID"] = "";
	$placeHolderswalkin["English"]["accountID"] = "";
	$fieldLabelswalkin["English"]["first_name"] = "First Name";
	$fieldToolTipswalkin["English"]["first_name"] = "";
	$placeHolderswalkin["English"]["first_name"] = "";
	$fieldLabelswalkin["English"]["last_name"] = "Last Name";
	$fieldToolTipswalkin["English"]["last_name"] = "";
	$placeHolderswalkin["English"]["last_name"] = "";
	$fieldLabelswalkin["English"]["middle_name"] = "Middle Name";
	$fieldToolTipswalkin["English"]["middle_name"] = "";
	$placeHolderswalkin["English"]["middle_name"] = "";
	$fieldLabelswalkin["English"]["contact_no"] = "Contact No";
	$fieldToolTipswalkin["English"]["contact_no"] = "";
	$placeHolderswalkin["English"]["contact_no"] = "";
	$fieldLabelswalkin["English"]["address_line"] = "Address Line";
	$fieldToolTipswalkin["English"]["address_line"] = "";
	$placeHolderswalkin["English"]["address_line"] = "";
	$fieldLabelswalkin["English"]["barangay"] = "Barangay";
	$fieldToolTipswalkin["English"]["barangay"] = "";
	$placeHolderswalkin["English"]["barangay"] = "";
	$fieldLabelswalkin["English"]["city_province_region"] = "City/Province/Region";
	$fieldToolTipswalkin["English"]["city_province_region"] = "";
	$placeHolderswalkin["English"]["city_province_region"] = "";
	$fieldLabelswalkin["English"]["email"] = "Email";
	$fieldToolTipswalkin["English"]["email"] = "";
	$placeHolderswalkin["English"]["email"] = "";
	$fieldLabelswalkin["English"]["prefered_mode_of_payment"] = "Prefered Mode Of Payment";
	$fieldToolTipswalkin["English"]["prefered_mode_of_payment"] = "";
	$placeHolderswalkin["English"]["prefered_mode_of_payment"] = "";
	$fieldLabelswalkin["English"]["date_modified"] = "Date Modified";
	$fieldToolTipswalkin["English"]["date_modified"] = "";
	$placeHolderswalkin["English"]["date_modified"] = "";
	$fieldLabelswalkin["English"]["date_created"] = "Date Created";
	$fieldToolTipswalkin["English"]["date_created"] = "";
	$placeHolderswalkin["English"]["date_created"] = "";
	$fieldLabelswalkin["English"]["last_modified_by"] = "Last Modified By";
	$fieldToolTipswalkin["English"]["last_modified_by"] = "";
	$placeHolderswalkin["English"]["last_modified_by"] = "";
	$fieldLabelswalkin["English"]["full_name"] = "Full Name";
	$fieldToolTipswalkin["English"]["full_name"] = "";
	$placeHolderswalkin["English"]["full_name"] = "";
	$fieldLabelswalkin["English"]["id"] = "Id";
	$fieldToolTipswalkin["English"]["id"] = "";
	$placeHolderswalkin["English"]["id"] = "";
	$fieldLabelswalkin["English"]["title"] = "Title";
	$fieldToolTipswalkin["English"]["title"] = "";
	$placeHolderswalkin["English"]["title"] = "";
	$fieldLabelswalkin["English"]["start"] = "Start";
	$fieldToolTipswalkin["English"]["start"] = "";
	$placeHolderswalkin["English"]["start"] = "";
	$fieldLabelswalkin["English"]["end"] = "End";
	$fieldToolTipswalkin["English"]["end"] = "";
	$placeHolderswalkin["English"]["end"] = "";
	$fieldLabelswalkin["English"]["accountID1"] = "Account ID1";
	$fieldToolTipswalkin["English"]["accountID1"] = "";
	$placeHolderswalkin["English"]["accountID1"] = "";
	$fieldLabelswalkin["English"]["date_created1"] = "Date Created1";
	$fieldToolTipswalkin["English"]["date_created1"] = "";
	$placeHolderswalkin["English"]["date_created1"] = "";
	$fieldLabelswalkin["English"]["date_modified1"] = "Date Modified1";
	$fieldToolTipswalkin["English"]["date_modified1"] = "";
	$placeHolderswalkin["English"]["date_modified1"] = "";
	$fieldLabelswalkin["English"]["last_modified_by1"] = "Last Modified By1";
	$fieldToolTipswalkin["English"]["last_modified_by1"] = "";
	$placeHolderswalkin["English"]["last_modified_by1"] = "";
	$fieldLabelswalkin["English"]["status"] = "Status";
	$fieldToolTipswalkin["English"]["status"] = "";
	$placeHolderswalkin["English"]["status"] = "";
	$fieldLabelswalkin["English"]["doctor_id"] = "Attending Doctor";
	$fieldToolTipswalkin["English"]["doctor_id"] = "";
	$placeHolderswalkin["English"]["doctor_id"] = "";
	$fieldLabelswalkin["English"]["email1"] = "Email1";
	$fieldToolTipswalkin["English"]["email1"] = "";
	$placeHolderswalkin["English"]["email1"] = "";
	$fieldLabelswalkin["English"]["serviceID"] = "Service";
	$fieldToolTipswalkin["English"]["serviceID"] = "";
	$placeHolderswalkin["English"]["serviceID"] = "";
	$pageTitleswalkin["English"]["add"] = "New Customer";
	if (count($fieldToolTipswalkin["English"]))
		$tdatawalkin[".isUseToolTips"] = true;
}


	$tdatawalkin[".NCSearch"] = true;



$tdatawalkin[".shortTableName"] = "walkin";
$tdatawalkin[".nSecOptions"] = 0;

$tdatawalkin[".mainTableOwnerID"] = "";
$tdatawalkin[".entityType"] = 1;

$tdatawalkin[".strOriginalTableName"] = "accounts";

	



$tdatawalkin[".showAddInPopup"] = false;

$tdatawalkin[".showEditInPopup"] = false;

$tdatawalkin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawalkin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatawalkin[".listAjax"] = true;
//	temporary
$tdatawalkin[".listAjax"] = false;

	$tdatawalkin[".audit"] = false;

	$tdatawalkin[".locking"] = false;


$pages = $tdatawalkin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatawalkin[".edit"] = true;
	$tdatawalkin[".afterEditAction"] = 0;
	$tdatawalkin[".closePopupAfterEdit"] = 1;
	$tdatawalkin[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatawalkin[".add"] = true;
$tdatawalkin[".afterAddAction"] = 0;
$tdatawalkin[".closePopupAfterAdd"] = 1;
$tdatawalkin[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatawalkin[".list"] = true;
}



$tdatawalkin[".strSortControlSettingsJSON"] = "";

$tdatawalkin[".strClickActionJSON"] = "{\"fields\":{\"accountID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address_line\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"barangay\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"city_province_region\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"contact_no\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"date_created\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"date_modified\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"email\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"first_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"full_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"last_modified_by\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"last_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"middle_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"prefered_mode_of_payment\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"popup\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatawalkin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatawalkin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatawalkin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatawalkin[".printFriendly"] = true;
}



$tdatawalkin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatawalkin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatawalkin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatawalkin[".isUseAjaxSuggest"] = true;

$tdatawalkin[".rowHighlite"] = true;



						

$tdatawalkin[".ajaxCodeSnippetAdded"] = false;

$tdatawalkin[".buttonsAdded"] = false;

$tdatawalkin[".addPageEvents"] = true;

// use timepicker for search panel
$tdatawalkin[".isUseTimeForSearch"] = false;


$tdatawalkin[".badgeColor"] = "B22222";


$tdatawalkin[".allSearchFields"] = array();
$tdatawalkin[".filterFields"] = array();
$tdatawalkin[".requiredSearchFields"] = array();

$tdatawalkin[".googleLikeFields"] = array();
$tdatawalkin[".googleLikeFields"][] = "accountID";
$tdatawalkin[".googleLikeFields"][] = "first_name";
$tdatawalkin[".googleLikeFields"][] = "last_name";
$tdatawalkin[".googleLikeFields"][] = "middle_name";
$tdatawalkin[".googleLikeFields"][] = "contact_no";
$tdatawalkin[".googleLikeFields"][] = "address_line";
$tdatawalkin[".googleLikeFields"][] = "barangay";
$tdatawalkin[".googleLikeFields"][] = "city_province_region";
$tdatawalkin[".googleLikeFields"][] = "email";
$tdatawalkin[".googleLikeFields"][] = "prefered_mode_of_payment";
$tdatawalkin[".googleLikeFields"][] = "date_modified";
$tdatawalkin[".googleLikeFields"][] = "date_created";
$tdatawalkin[".googleLikeFields"][] = "last_modified_by";
$tdatawalkin[".googleLikeFields"][] = "full_name";
$tdatawalkin[".googleLikeFields"][] = "id";
$tdatawalkin[".googleLikeFields"][] = "title";
$tdatawalkin[".googleLikeFields"][] = "start";
$tdatawalkin[".googleLikeFields"][] = "end";
$tdatawalkin[".googleLikeFields"][] = "accountID1";
$tdatawalkin[".googleLikeFields"][] = "date_created1";
$tdatawalkin[".googleLikeFields"][] = "date_modified1";
$tdatawalkin[".googleLikeFields"][] = "last_modified_by1";
$tdatawalkin[".googleLikeFields"][] = "status";
$tdatawalkin[".googleLikeFields"][] = "doctor_id";
$tdatawalkin[".googleLikeFields"][] = "email1";
$tdatawalkin[".googleLikeFields"][] = "serviceID";



$tdatawalkin[".tableType"] = "list";

$tdatawalkin[".printerPageOrientation"] = 0;
$tdatawalkin[".nPrinterPageScale"] = 100;

$tdatawalkin[".nPrinterSplitRecords"] = 40;

$tdatawalkin[".geocodingEnabled"] = false;





$tdatawalkin[".isResizeColumns"] = true;





$tdatawalkin[".pageSize"] = 20;

$tdatawalkin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawalkin[".strOrderBy"] = $tstrOrderBy;

$tdatawalkin[".orderindexes"] = array();

$tdatawalkin[".sqlHead"] = "SELECT accounts.accountID,  accounts.first_name,  accounts.last_name,  accounts.middle_name,  accounts.contact_no,  accounts.address_line,  accounts.barangay,  accounts.city_province_region,  accounts.email,  accounts.prefered_mode_of_payment,  accounts.date_modified,  accounts.date_created,  accounts.last_modified_by,  accounts.full_name,  appointments.id,  appointments.title,  appointments.`start`,  appointments.`end`,  appointments.accountID AS accountID1,  appointments.date_created AS date_created1,  appointments.date_modified AS date_modified1,  appointments.last_modified_by AS last_modified_by1,  appointments.status,  appointments.doctor_id,  appointments.email AS email1,  appointments.serviceID";
$tdatawalkin[".sqlFrom"] = "FROM accounts  INNER JOIN appointments ON accounts.accountID = appointments.accountID";
$tdatawalkin[".sqlWhereExpr"] = "";
$tdatawalkin[".sqlTail"] = "";

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
$tdatawalkin[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawalkin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawalkin[".arrGroupsPerPage"] = $arrGPP;

$tdatawalkin[".highlightSearchResults"] = true;

$tableKeyswalkin = array();
$tableKeyswalkin[] = "accountID";
$tdatawalkin[".Keys"] = $tableKeyswalkin;


$tdatawalkin[".hideMobileList"] = array();




//	accountID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "accountID";
	$fdata["GoodName"] = "accountID";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","accountID");
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


	$tdatawalkin["accountID"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "accountID";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","first_name");
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatawalkin["first_name"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "first_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","last_name");
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatawalkin["last_name"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "last_name";
//	middle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "middle_name";
	$fdata["GoodName"] = "middle_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","middle_name");
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


	$tdatawalkin["middle_name"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "middle_name";
//	contact_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contact_no";
	$fdata["GoodName"] = "contact_no";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","contact_no");
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatawalkin["contact_no"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "contact_no";
//	address_line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "address_line";
	$fdata["GoodName"] = "address_line";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","address_line");
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


	$tdatawalkin["address_line"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "address_line";
//	barangay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "barangay";
	$fdata["GoodName"] = "barangay";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","barangay");
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


	$tdatawalkin["barangay"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "barangay";
//	city_province_region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "city_province_region";
	$fdata["GoodName"] = "city_province_region";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","city_province_region");
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


	$tdatawalkin["city_province_region"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "city_province_region";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","email");
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatawalkin["email"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "email";
//	prefered_mode_of_payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "prefered_mode_of_payment";
	$fdata["GoodName"] = "prefered_mode_of_payment";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","prefered_mode_of_payment");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Cash";
	$edata["LookupValues"][] = "Debit/Credit Card";

	
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


	$tdatawalkin["prefered_mode_of_payment"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "prefered_mode_of_payment";
//	date_modified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "date_modified";
	$fdata["GoodName"] = "date_modified";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","date_modified");
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


	$tdatawalkin["date_modified"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "date_modified";
//	date_created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "date_created";
	$fdata["GoodName"] = "date_created";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","date_created");
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


	$tdatawalkin["date_created"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "date_created";
//	last_modified_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "last_modified_by";
	$fdata["GoodName"] = "last_modified_by";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","last_modified_by");
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


	$tdatawalkin["last_modified_by"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "last_modified_by";
//	full_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "full_name";
	$fdata["GoodName"] = "full_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("walkin","full_name");
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatawalkin["full_name"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "full_name";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","id");
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


	$tdatawalkin["id"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","title");
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


	$tdatawalkin["title"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "title";
//	start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "start";
	$fdata["GoodName"] = "start";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","start");
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

		$edata["weekdayMessage"] = array("message" => "Business Days are from Mondays to Fridays only.", "messageType" => "Text");
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
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Date or Time is unavailable", "messageType" => "Text");

	
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


	$tdatawalkin["start"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "start";
//	end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "end";
	$fdata["GoodName"] = "end";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","end");
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


	$tdatawalkin["end"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "end";
//	accountID1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "accountID1";
	$fdata["GoodName"] = "accountID1";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","accountID1");
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


	$tdatawalkin["accountID1"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "accountID1";
//	date_created1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "date_created1";
	$fdata["GoodName"] = "date_created1";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","date_created1");
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


	$tdatawalkin["date_created1"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "date_created1";
//	date_modified1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "date_modified1";
	$fdata["GoodName"] = "date_modified1";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","date_modified1");
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


	$tdatawalkin["date_modified1"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "date_modified1";
//	last_modified_by1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "last_modified_by1";
	$fdata["GoodName"] = "last_modified_by1";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","last_modified_by1");
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


	$tdatawalkin["last_modified_by1"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "last_modified_by1";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","status");
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


	$tdatawalkin["status"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "status";
//	doctor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "doctor_id";
	$fdata["GoodName"] = "doctor_id";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","doctor_id");
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
	$edata["DisplayField"] = "concat(first_name,' ',last_name,', ', title)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "first_name";

	
	
	
	

	
	
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


	$tdatawalkin["doctor_id"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "doctor_id";
//	email1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "email1";
	$fdata["GoodName"] = "email1";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","email1");
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


	$tdatawalkin["email1"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "email1";
//	serviceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "serviceID";
	$fdata["GoodName"] = "serviceID";
	$fdata["ownerTable"] = "appointments";
	$fdata["Label"] = GetFieldLabel("walkin","serviceID");
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

				$edata["LookupWhere"] = "category<>\"Products\"";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
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


	$tdatawalkin["serviceID"] = $fdata;
		$tdatawalkin[".searchableFields"][] = "serviceID";


$tables_data["walkin"]=&$tdatawalkin;
$field_labels["walkin"] = &$fieldLabelswalkin;
$fieldToolTips["walkin"] = &$fieldToolTipswalkin;
$placeHolders["walkin"] = &$placeHolderswalkin;
$page_titles["walkin"] = &$pageTitleswalkin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["walkin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["walkin"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_walkin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "accounts.accountID,  accounts.first_name,  accounts.last_name,  accounts.middle_name,  accounts.contact_no,  accounts.address_line,  accounts.barangay,  accounts.city_province_region,  accounts.email,  accounts.prefered_mode_of_payment,  accounts.date_modified,  accounts.date_created,  accounts.last_modified_by,  accounts.full_name,  appointments.id,  appointments.title,  appointments.`start`,  appointments.`end`,  appointments.accountID AS accountID1,  appointments.date_created AS date_created1,  appointments.date_modified AS date_modified1,  appointments.last_modified_by AS last_modified_by1,  appointments.status,  appointments.doctor_id,  appointments.email AS email1,  appointments.serviceID";
$proto0["m_strFrom"] = "FROM accounts  INNER JOIN appointments ON accounts.accountID = appointments.accountID";
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
	"m_strName" => "accountID",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto6["m_sql"] = "accounts.accountID";
$proto6["m_srcTableName"] = "walkin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto8["m_sql"] = "accounts.first_name";
$proto8["m_srcTableName"] = "walkin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto10["m_sql"] = "accounts.last_name";
$proto10["m_srcTableName"] = "walkin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "middle_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto12["m_sql"] = "accounts.middle_name";
$proto12["m_srcTableName"] = "walkin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_no",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto14["m_sql"] = "accounts.contact_no";
$proto14["m_srcTableName"] = "walkin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "address_line",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto16["m_sql"] = "accounts.address_line";
$proto16["m_srcTableName"] = "walkin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "barangay",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto18["m_sql"] = "accounts.barangay";
$proto18["m_srcTableName"] = "walkin";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "city_province_region",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto20["m_sql"] = "accounts.city_province_region";
$proto20["m_srcTableName"] = "walkin";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto22["m_sql"] = "accounts.email";
$proto22["m_srcTableName"] = "walkin";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "prefered_mode_of_payment",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto24["m_sql"] = "accounts.prefered_mode_of_payment";
$proto24["m_srcTableName"] = "walkin";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modified",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto26["m_sql"] = "accounts.date_modified";
$proto26["m_srcTableName"] = "walkin";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "date_created",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto28["m_sql"] = "accounts.date_created";
$proto28["m_srcTableName"] = "walkin";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "last_modified_by",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto30["m_sql"] = "accounts.last_modified_by";
$proto30["m_srcTableName"] = "walkin";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "full_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto32["m_sql"] = "accounts.full_name";
$proto32["m_srcTableName"] = "walkin";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto34["m_sql"] = "appointments.id";
$proto34["m_srcTableName"] = "walkin";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto36["m_sql"] = "appointments.title";
$proto36["m_srcTableName"] = "walkin";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "start",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto38["m_sql"] = "appointments.`start`";
$proto38["m_srcTableName"] = "walkin";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "end",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto40["m_sql"] = "appointments.`end`";
$proto40["m_srcTableName"] = "walkin";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "accountID",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto42["m_sql"] = "appointments.accountID";
$proto42["m_srcTableName"] = "walkin";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "accountID1";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "date_created",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto44["m_sql"] = "appointments.date_created";
$proto44["m_srcTableName"] = "walkin";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "date_created1";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modified",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto46["m_sql"] = "appointments.date_modified";
$proto46["m_srcTableName"] = "walkin";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "date_modified1";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "last_modified_by",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto48["m_sql"] = "appointments.last_modified_by";
$proto48["m_srcTableName"] = "walkin";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "last_modified_by1";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto50["m_sql"] = "appointments.status";
$proto50["m_srcTableName"] = "walkin";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "doctor_id",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto52["m_sql"] = "appointments.doctor_id";
$proto52["m_srcTableName"] = "walkin";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto54["m_sql"] = "appointments.email";
$proto54["m_srcTableName"] = "walkin";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "email1";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "serviceID",
	"m_strTable" => "appointments",
	"m_srcTableName" => "walkin"
));

$proto56["m_sql"] = "appointments.serviceID";
$proto56["m_srcTableName"] = "walkin";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "accounts";
$proto59["m_srcTableName"] = "walkin";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "accountID";
$proto59["m_columns"][] = "first_name";
$proto59["m_columns"][] = "last_name";
$proto59["m_columns"][] = "middle_name";
$proto59["m_columns"][] = "contact_no";
$proto59["m_columns"][] = "address_line";
$proto59["m_columns"][] = "barangay";
$proto59["m_columns"][] = "city_province_region";
$proto59["m_columns"][] = "email";
$proto59["m_columns"][] = "prefered_mode_of_payment";
$proto59["m_columns"][] = "date_modified";
$proto59["m_columns"][] = "date_created";
$proto59["m_columns"][] = "last_modified_by";
$proto59["m_columns"][] = "full_name";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "accounts";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "walkin";
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
$proto62["m_link"] = "SQLL_INNERJOIN";
			$proto63=array();
$proto63["m_strName"] = "appointments";
$proto63["m_srcTableName"] = "walkin";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "id";
$proto63["m_columns"][] = "title";
$proto63["m_columns"][] = "start";
$proto63["m_columns"][] = "end";
$proto63["m_columns"][] = "accountID";
$proto63["m_columns"][] = "date_created";
$proto63["m_columns"][] = "date_modified";
$proto63["m_columns"][] = "last_modified_by";
$proto63["m_columns"][] = "status";
$proto63["m_columns"][] = "doctor_id";
$proto63["m_columns"][] = "email";
$proto63["m_columns"][] = "serviceID";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "INNER JOIN appointments ON accounts.accountID = appointments.accountID";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "walkin";
$proto64=array();
$proto64["m_sql"] = "accounts.accountID = appointments.accountID";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "accountID",
	"m_strTable" => "accounts",
	"m_srcTableName" => "walkin"
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "= appointments.accountID";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="walkin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_walkin = createSqlQuery_walkin();


	
		;

																										

$tdatawalkin[".sqlquery"] = $queryData_walkin;

include_once(getabspath("include/walkin_events.php"));
$tableEvents["walkin"] = new eventclass_walkin;
$tdatawalkin[".hasEvents"] = true;

?>