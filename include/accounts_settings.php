<?php



$tdataaccounts = array();
$tdataaccounts[".searchableFields"] = array();
$tdataaccounts[".ShortName"] = "accounts";
$tdataaccounts[".OwnerID"] = "";
$tdataaccounts[".OriginalTable"] = "accounts";


$tdataaccounts[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaccounts[".originalPagesByType"] = $tdataaccounts[".pagesByType"];
$tdataaccounts[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaccounts[".originalPages"] = $tdataaccounts[".pages"];
$tdataaccounts[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaccounts[".originalDefaultPages"] = $tdataaccounts[".defaultPages"];

//	field labels
$fieldLabelsaccounts = array();
$fieldToolTipsaccounts = array();
$pageTitlesaccounts = array();
$placeHoldersaccounts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccounts["English"] = array();
	$fieldToolTipsaccounts["English"] = array();
	$placeHoldersaccounts["English"] = array();
	$pageTitlesaccounts["English"] = array();
	$fieldLabelsaccounts["English"]["accountID"] = "Account ID";
	$fieldToolTipsaccounts["English"]["accountID"] = "";
	$placeHoldersaccounts["English"]["accountID"] = "";
	$fieldLabelsaccounts["English"]["first_name"] = "First Name";
	$fieldToolTipsaccounts["English"]["first_name"] = "";
	$placeHoldersaccounts["English"]["first_name"] = "";
	$fieldLabelsaccounts["English"]["last_name"] = "Last Name";
	$fieldToolTipsaccounts["English"]["last_name"] = "";
	$placeHoldersaccounts["English"]["last_name"] = "";
	$fieldLabelsaccounts["English"]["middle_name"] = "Middle Name";
	$fieldToolTipsaccounts["English"]["middle_name"] = "";
	$placeHoldersaccounts["English"]["middle_name"] = "";
	$fieldLabelsaccounts["English"]["contact_no"] = "Contact No";
	$fieldToolTipsaccounts["English"]["contact_no"] = "";
	$placeHoldersaccounts["English"]["contact_no"] = "";
	$fieldLabelsaccounts["English"]["address_line"] = "Address Line";
	$fieldToolTipsaccounts["English"]["address_line"] = "";
	$placeHoldersaccounts["English"]["address_line"] = "";
	$fieldLabelsaccounts["English"]["barangay"] = "Barangay";
	$fieldToolTipsaccounts["English"]["barangay"] = "";
	$placeHoldersaccounts["English"]["barangay"] = "";
	$fieldLabelsaccounts["English"]["city_province_region"] = "City/Province/Region";
	$fieldToolTipsaccounts["English"]["city_province_region"] = "";
	$placeHoldersaccounts["English"]["city_province_region"] = "";
	$fieldLabelsaccounts["English"]["email"] = "Email";
	$fieldToolTipsaccounts["English"]["email"] = "";
	$placeHoldersaccounts["English"]["email"] = "";
	$fieldLabelsaccounts["English"]["prefered_mode_of_payment"] = "Prefered Mode Of Payment";
	$fieldToolTipsaccounts["English"]["prefered_mode_of_payment"] = "";
	$placeHoldersaccounts["English"]["prefered_mode_of_payment"] = "";
	$fieldLabelsaccounts["English"]["date_modified"] = "Date Modified";
	$fieldToolTipsaccounts["English"]["date_modified"] = "";
	$placeHoldersaccounts["English"]["date_modified"] = "";
	$fieldLabelsaccounts["English"]["date_created"] = "Date Created";
	$fieldToolTipsaccounts["English"]["date_created"] = "";
	$placeHoldersaccounts["English"]["date_created"] = "";
	$fieldLabelsaccounts["English"]["last_modified_by"] = "Last Modified By";
	$fieldToolTipsaccounts["English"]["last_modified_by"] = "";
	$placeHoldersaccounts["English"]["last_modified_by"] = "";
	$fieldLabelsaccounts["English"]["full_name"] = "Full Name";
	$fieldToolTipsaccounts["English"]["full_name"] = "";
	$placeHoldersaccounts["English"]["full_name"] = "";
	if (count($fieldToolTipsaccounts["English"]))
		$tdataaccounts[".isUseToolTips"] = true;
}


	$tdataaccounts[".NCSearch"] = true;



$tdataaccounts[".shortTableName"] = "accounts";
$tdataaccounts[".nSecOptions"] = 0;

$tdataaccounts[".mainTableOwnerID"] = "";
$tdataaccounts[".entityType"] = 0;

$tdataaccounts[".strOriginalTableName"] = "accounts";

	



$tdataaccounts[".showAddInPopup"] = false;

$tdataaccounts[".showEditInPopup"] = false;

$tdataaccounts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataaccounts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataaccounts[".listAjax"] = true;
//	temporary
$tdataaccounts[".listAjax"] = false;

	$tdataaccounts[".audit"] = false;

	$tdataaccounts[".locking"] = false;


$pages = $tdataaccounts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaccounts[".edit"] = true;
	$tdataaccounts[".afterEditAction"] = 0;
	$tdataaccounts[".closePopupAfterEdit"] = 1;
	$tdataaccounts[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataaccounts[".add"] = true;
$tdataaccounts[".afterAddAction"] = 0;
$tdataaccounts[".closePopupAfterAdd"] = 1;
$tdataaccounts[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataaccounts[".list"] = true;
}



$tdataaccounts[".strSortControlSettingsJSON"] = "";

$tdataaccounts[".strClickActionJSON"] = "{\"fields\":{\"accountID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address_line\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"barangay\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"city_province_region\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"contact_no\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"date_created\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"date_modified\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"email\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"first_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"full_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"last_modified_by\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"last_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"middle_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"prefered_mode_of_payment\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"popup\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataaccounts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaccounts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaccounts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaccounts[".printFriendly"] = true;
}



$tdataaccounts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaccounts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaccounts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaccounts[".isUseAjaxSuggest"] = true;

$tdataaccounts[".rowHighlite"] = true;



						

$tdataaccounts[".ajaxCodeSnippetAdded"] = false;

$tdataaccounts[".buttonsAdded"] = false;

$tdataaccounts[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccounts[".isUseTimeForSearch"] = false;


$tdataaccounts[".badgeColor"] = "E8926F";


$tdataaccounts[".allSearchFields"] = array();
$tdataaccounts[".filterFields"] = array();
$tdataaccounts[".requiredSearchFields"] = array();

$tdataaccounts[".googleLikeFields"] = array();
$tdataaccounts[".googleLikeFields"][] = "accountID";
$tdataaccounts[".googleLikeFields"][] = "first_name";
$tdataaccounts[".googleLikeFields"][] = "last_name";
$tdataaccounts[".googleLikeFields"][] = "middle_name";
$tdataaccounts[".googleLikeFields"][] = "contact_no";
$tdataaccounts[".googleLikeFields"][] = "address_line";
$tdataaccounts[".googleLikeFields"][] = "barangay";
$tdataaccounts[".googleLikeFields"][] = "city_province_region";
$tdataaccounts[".googleLikeFields"][] = "email";
$tdataaccounts[".googleLikeFields"][] = "prefered_mode_of_payment";
$tdataaccounts[".googleLikeFields"][] = "date_modified";
$tdataaccounts[".googleLikeFields"][] = "date_created";
$tdataaccounts[".googleLikeFields"][] = "last_modified_by";
$tdataaccounts[".googleLikeFields"][] = "full_name";



$tdataaccounts[".tableType"] = "list";

$tdataaccounts[".printerPageOrientation"] = 0;
$tdataaccounts[".nPrinterPageScale"] = 100;

$tdataaccounts[".nPrinterSplitRecords"] = 40;

$tdataaccounts[".geocodingEnabled"] = false;





$tdataaccounts[".isResizeColumns"] = true;





$tdataaccounts[".pageSize"] = 20;

$tdataaccounts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaccounts[".strOrderBy"] = $tstrOrderBy;

$tdataaccounts[".orderindexes"] = array();

$tdataaccounts[".sqlHead"] = "SELECT accountID,  	first_name,  	last_name,  	middle_name,  	contact_no,  	address_line,  	barangay,  	city_province_region,  	email,  	prefered_mode_of_payment,  	date_modified,  	date_created,  	last_modified_by,  	full_name";
$tdataaccounts[".sqlFrom"] = "FROM accounts";
$tdataaccounts[".sqlWhereExpr"] = "";
$tdataaccounts[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccounts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccounts[".arrGroupsPerPage"] = $arrGPP;

$tdataaccounts[".highlightSearchResults"] = true;

$tableKeysaccounts = array();
$tableKeysaccounts[] = "accountID";
$tdataaccounts[".Keys"] = $tableKeysaccounts;


$tdataaccounts[".hideMobileList"] = array();




//	accountID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "accountID";
	$fdata["GoodName"] = "accountID";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","accountID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdataaccounts["accountID"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "accountID";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","first_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "first_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "first_name";

	
	
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


	$tdataaccounts["first_name"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "first_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","last_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "last_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_name";

	
	
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


	$tdataaccounts["last_name"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "last_name";
//	middle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "middle_name";
	$fdata["GoodName"] = "middle_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","middle_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "middle_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "middle_name";

	
	
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


	$tdataaccounts["middle_name"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "middle_name";
//	contact_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contact_no";
	$fdata["GoodName"] = "contact_no";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","contact_no");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contact_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_no";

	
	
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


	$tdataaccounts["contact_no"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "contact_no";
//	address_line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "address_line";
	$fdata["GoodName"] = "address_line";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","address_line");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "address_line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_line";

	
	
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


	$tdataaccounts["address_line"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "address_line";
//	barangay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "barangay";
	$fdata["GoodName"] = "barangay";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","barangay");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "barangay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "barangay";

	
	
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


	$tdataaccounts["barangay"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "barangay";
//	city_province_region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "city_province_region";
	$fdata["GoodName"] = "city_province_region";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","city_province_region");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "city_province_region";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city_province_region";

	
	
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


	$tdataaccounts["city_province_region"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "city_province_region";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","email");
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


	$tdataaccounts["email"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "email";
//	prefered_mode_of_payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "prefered_mode_of_payment";
	$fdata["GoodName"] = "prefered_mode_of_payment";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","prefered_mode_of_payment");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "prefered_mode_of_payment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prefered_mode_of_payment";

	
	
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


	$tdataaccounts["prefered_mode_of_payment"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "prefered_mode_of_payment";
//	date_modified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "date_modified";
	$fdata["GoodName"] = "date_modified";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","date_modified");
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


	$tdataaccounts["date_modified"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "date_modified";
//	date_created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "date_created";
	$fdata["GoodName"] = "date_created";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","date_created");
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


	$tdataaccounts["date_created"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "date_created";
//	last_modified_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "last_modified_by";
	$fdata["GoodName"] = "last_modified_by";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","last_modified_by");
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


	$tdataaccounts["last_modified_by"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "last_modified_by";
//	full_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "full_name";
	$fdata["GoodName"] = "full_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","full_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "full_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "full_name";

	
	
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


	$tdataaccounts["full_name"] = $fdata;
		$tdataaccounts[".searchableFields"][] = "full_name";


$tables_data["accounts"]=&$tdataaccounts;
$field_labels["accounts"] = &$fieldLabelsaccounts;
$fieldToolTips["accounts"] = &$fieldToolTipsaccounts;
$placeHolders["accounts"] = &$placeHoldersaccounts;
$page_titles["accounts"] = &$pageTitlesaccounts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["accounts"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["accounts"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_accounts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "accountID,  	first_name,  	last_name,  	middle_name,  	contact_no,  	address_line,  	barangay,  	city_province_region,  	email,  	prefered_mode_of_payment,  	date_modified,  	date_created,  	last_modified_by,  	full_name";
$proto0["m_strFrom"] = "FROM accounts";
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
	"m_srcTableName" => "accounts"
));

$proto6["m_sql"] = "accountID";
$proto6["m_srcTableName"] = "accounts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto8["m_sql"] = "first_name";
$proto8["m_srcTableName"] = "accounts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto10["m_sql"] = "last_name";
$proto10["m_srcTableName"] = "accounts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "middle_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto12["m_sql"] = "middle_name";
$proto12["m_srcTableName"] = "accounts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_no",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto14["m_sql"] = "contact_no";
$proto14["m_srcTableName"] = "accounts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "address_line",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto16["m_sql"] = "address_line";
$proto16["m_srcTableName"] = "accounts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "barangay",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto18["m_sql"] = "barangay";
$proto18["m_srcTableName"] = "accounts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "city_province_region",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto20["m_sql"] = "city_province_region";
$proto20["m_srcTableName"] = "accounts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto22["m_sql"] = "email";
$proto22["m_srcTableName"] = "accounts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "prefered_mode_of_payment",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto24["m_sql"] = "prefered_mode_of_payment";
$proto24["m_srcTableName"] = "accounts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modified",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto26["m_sql"] = "date_modified";
$proto26["m_srcTableName"] = "accounts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "date_created",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto28["m_sql"] = "date_created";
$proto28["m_srcTableName"] = "accounts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "last_modified_by",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto30["m_sql"] = "last_modified_by";
$proto30["m_srcTableName"] = "accounts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "full_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto32["m_sql"] = "full_name";
$proto32["m_srcTableName"] = "accounts";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "accounts";
$proto35["m_srcTableName"] = "accounts";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "accountID";
$proto35["m_columns"][] = "first_name";
$proto35["m_columns"][] = "last_name";
$proto35["m_columns"][] = "middle_name";
$proto35["m_columns"][] = "contact_no";
$proto35["m_columns"][] = "address_line";
$proto35["m_columns"][] = "barangay";
$proto35["m_columns"][] = "city_province_region";
$proto35["m_columns"][] = "email";
$proto35["m_columns"][] = "prefered_mode_of_payment";
$proto35["m_columns"][] = "date_modified";
$proto35["m_columns"][] = "date_created";
$proto35["m_columns"][] = "last_modified_by";
$proto35["m_columns"][] = "full_name";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "accounts";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "accounts";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="accounts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_accounts = createSqlQuery_accounts();


	
		;

														

$tdataaccounts[".sqlquery"] = $queryData_accounts;

$tableEvents["accounts"] = new eventsBase;
$tdataaccounts[".hasEvents"] = false;

?>
