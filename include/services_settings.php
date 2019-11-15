<?php



$tdataservices = array();
$tdataservices[".searchableFields"] = array();
$tdataservices[".ShortName"] = "services";
$tdataservices[".OwnerID"] = "";
$tdataservices[".OriginalTable"] = "services";


$tdataservices[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataservices[".originalPagesByType"] = $tdataservices[".pagesByType"];
$tdataservices[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataservices[".originalPages"] = $tdataservices[".pages"];
$tdataservices[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataservices[".originalDefaultPages"] = $tdataservices[".defaultPages"];

//	field labels
$fieldLabelsservices = array();
$fieldToolTipsservices = array();
$pageTitlesservices = array();
$placeHoldersservices = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsservices["English"] = array();
	$fieldToolTipsservices["English"] = array();
	$placeHoldersservices["English"] = array();
	$pageTitlesservices["English"] = array();
	$fieldLabelsservices["English"]["serviceID"] = "Service ID";
	$fieldToolTipsservices["English"]["serviceID"] = "";
	$placeHoldersservices["English"]["serviceID"] = "";
	$fieldLabelsservices["English"]["service_name"] = "Service";
	$fieldToolTipsservices["English"]["service_name"] = "";
	$placeHoldersservices["English"]["service_name"] = "";
	$fieldLabelsservices["English"]["service_desc"] = "Service Description";
	$fieldToolTipsservices["English"]["service_desc"] = "";
	$placeHoldersservices["English"]["service_desc"] = "";
	$fieldLabelsservices["English"]["standard_price_per_session"] = "Price";
	$fieldToolTipsservices["English"]["standard_price_per_session"] = "";
	$placeHoldersservices["English"]["standard_price_per_session"] = "";
	$fieldLabelsservices["English"]["date_created"] = "Date Created";
	$fieldToolTipsservices["English"]["date_created"] = "";
	$placeHoldersservices["English"]["date_created"] = "";
	$fieldLabelsservices["English"]["date_modified"] = "Date Modified";
	$fieldToolTipsservices["English"]["date_modified"] = "";
	$placeHoldersservices["English"]["date_modified"] = "";
	$fieldLabelsservices["English"]["last_modified_by"] = "Last Modified By";
	$fieldToolTipsservices["English"]["last_modified_by"] = "";
	$placeHoldersservices["English"]["last_modified_by"] = "";
	$fieldLabelsservices["English"]["category"] = "Category";
	$fieldToolTipsservices["English"]["category"] = "";
	$placeHoldersservices["English"]["category"] = "";
	$pageTitlesservices["English"]["add"] = "Add new Service";
	$pageTitlesservices["English"]["edit"] = "Edit Services Information";
	if (count($fieldToolTipsservices["English"]))
		$tdataservices[".isUseToolTips"] = true;
}


	$tdataservices[".NCSearch"] = true;



$tdataservices[".shortTableName"] = "services";
$tdataservices[".nSecOptions"] = 0;

$tdataservices[".mainTableOwnerID"] = "";
$tdataservices[".entityType"] = 0;

$tdataservices[".strOriginalTableName"] = "services";

	



$tdataservices[".showAddInPopup"] = false;

$tdataservices[".showEditInPopup"] = false;

$tdataservices[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataservices[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataservices[".listAjax"] = true;
//	temporary
$tdataservices[".listAjax"] = false;

	$tdataservices[".audit"] = false;

	$tdataservices[".locking"] = false;


$pages = $tdataservices[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataservices[".edit"] = true;
	$tdataservices[".afterEditAction"] = 0;
	$tdataservices[".closePopupAfterEdit"] = 1;
	$tdataservices[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataservices[".add"] = true;
$tdataservices[".afterAddAction"] = 0;
$tdataservices[".closePopupAfterAdd"] = 1;
$tdataservices[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataservices[".list"] = true;
}



$tdataservices[".strSortControlSettingsJSON"] = "";

$tdataservices[".strClickActionJSON"] = "{\"fields\":{\"category\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"date_created\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"date_modified\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"last_modified_by\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"serviceID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"service_desc\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"service_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"standard_price_per_session\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"popup\",\"page\":\"edit\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataservices[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataservices[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataservices[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataservices[".printFriendly"] = true;
}



$tdataservices[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataservices[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataservices[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataservices[".isUseAjaxSuggest"] = true;

$tdataservices[".rowHighlite"] = true;



						

$tdataservices[".ajaxCodeSnippetAdded"] = false;

$tdataservices[".buttonsAdded"] = false;

$tdataservices[".addPageEvents"] = false;

// use timepicker for search panel
$tdataservices[".isUseTimeForSearch"] = false;


$tdataservices[".badgeColor"] = "CD853F";


$tdataservices[".allSearchFields"] = array();
$tdataservices[".filterFields"] = array();
$tdataservices[".requiredSearchFields"] = array();

$tdataservices[".googleLikeFields"] = array();
$tdataservices[".googleLikeFields"][] = "serviceID";
$tdataservices[".googleLikeFields"][] = "service_name";
$tdataservices[".googleLikeFields"][] = "service_desc";
$tdataservices[".googleLikeFields"][] = "standard_price_per_session";
$tdataservices[".googleLikeFields"][] = "date_created";
$tdataservices[".googleLikeFields"][] = "date_modified";
$tdataservices[".googleLikeFields"][] = "last_modified_by";
$tdataservices[".googleLikeFields"][] = "category";



$tdataservices[".tableType"] = "list";

$tdataservices[".printerPageOrientation"] = 0;
$tdataservices[".nPrinterPageScale"] = 100;

$tdataservices[".nPrinterSplitRecords"] = 40;

$tdataservices[".geocodingEnabled"] = false;





$tdataservices[".isResizeColumns"] = true;





$tdataservices[".pageSize"] = 20;

$tdataservices[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataservices[".strOrderBy"] = $tstrOrderBy;

$tdataservices[".orderindexes"] = array();

$tdataservices[".sqlHead"] = "SELECT serviceID,  	service_name,  	service_desc,  	standard_price_per_session,  	date_created,  	date_modified,  	last_modified_by,  	category";
$tdataservices[".sqlFrom"] = "FROM services";
$tdataservices[".sqlWhereExpr"] = "";
$tdataservices[".sqlTail"] = "";

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
$tdataservices[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataservices[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataservices[".arrGroupsPerPage"] = $arrGPP;

$tdataservices[".highlightSearchResults"] = true;

$tableKeysservices = array();
$tableKeysservices[] = "serviceID";
$tdataservices[".Keys"] = $tableKeysservices;


$tdataservices[".hideMobileList"] = array();




//	serviceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "serviceID";
	$fdata["GoodName"] = "serviceID";
	$fdata["ownerTable"] = "services";
	$fdata["Label"] = GetFieldLabel("services","serviceID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdataservices["serviceID"] = $fdata;
		$tdataservices[".searchableFields"][] = "serviceID";
//	service_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "service_name";
	$fdata["GoodName"] = "service_name";
	$fdata["ownerTable"] = "services";
	$fdata["Label"] = GetFieldLabel("services","service_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "service_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "service_name";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Service %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdataservices["service_name"] = $fdata;
		$tdataservices[".searchableFields"][] = "service_name";
//	service_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "service_desc";
	$fdata["GoodName"] = "service_desc";
	$fdata["ownerTable"] = "services";
	$fdata["Label"] = GetFieldLabel("services","service_desc");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "service_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "service_desc";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataservices["service_desc"] = $fdata;
		$tdataservices[".searchableFields"][] = "service_desc";
//	standard_price_per_session
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "standard_price_per_session";
	$fdata["GoodName"] = "standard_price_per_session";
	$fdata["ownerTable"] = "services";
	$fdata["Label"] = GetFieldLabel("services","standard_price_per_session");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "standard_price_per_session";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "standard_price_per_session";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdataservices["standard_price_per_session"] = $fdata;
		$tdataservices[".searchableFields"][] = "standard_price_per_session";
//	date_created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_created";
	$fdata["GoodName"] = "date_created";
	$fdata["ownerTable"] = "services";
	$fdata["Label"] = GetFieldLabel("services","date_created");
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


	$tdataservices["date_created"] = $fdata;
		$tdataservices[".searchableFields"][] = "date_created";
//	date_modified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_modified";
	$fdata["GoodName"] = "date_modified";
	$fdata["ownerTable"] = "services";
	$fdata["Label"] = GetFieldLabel("services","date_modified");
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


	$tdataservices["date_modified"] = $fdata;
		$tdataservices[".searchableFields"][] = "date_modified";
//	last_modified_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "last_modified_by";
	$fdata["GoodName"] = "last_modified_by";
	$fdata["ownerTable"] = "services";
	$fdata["Label"] = GetFieldLabel("services","last_modified_by");
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


	$tdataservices["last_modified_by"] = $fdata;
		$tdataservices[".searchableFields"][] = "last_modified_by";
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "services";
	$fdata["Label"] = GetFieldLabel("services","category");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category";

	
	
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
	$edata["LookupValues"][] = "Facial and Peels";
	$edata["LookupValues"][] = "Skin Lightening and Smoothening";
	$edata["LookupValues"][] = "Stretchmarks, Cellulites, Acne Removal";
	$edata["LookupValues"][] = "Products";

	
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


	$tdataservices["category"] = $fdata;
		$tdataservices[".searchableFields"][] = "category";


$tables_data["services"]=&$tdataservices;
$field_labels["services"] = &$fieldLabelsservices;
$fieldToolTips["services"] = &$fieldToolTipsservices;
$placeHolders["services"] = &$placeHoldersservices;
$page_titles["services"] = &$pageTitlesservices;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["services"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["services"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_services()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "serviceID,  	service_name,  	service_desc,  	standard_price_per_session,  	date_created,  	date_modified,  	last_modified_by,  	category";
$proto0["m_strFrom"] = "FROM services";
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
	"m_strName" => "serviceID",
	"m_strTable" => "services",
	"m_srcTableName" => "services"
));

$proto6["m_sql"] = "serviceID";
$proto6["m_srcTableName"] = "services";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "service_name",
	"m_strTable" => "services",
	"m_srcTableName" => "services"
));

$proto8["m_sql"] = "service_name";
$proto8["m_srcTableName"] = "services";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "service_desc",
	"m_strTable" => "services",
	"m_srcTableName" => "services"
));

$proto10["m_sql"] = "service_desc";
$proto10["m_srcTableName"] = "services";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "standard_price_per_session",
	"m_strTable" => "services",
	"m_srcTableName" => "services"
));

$proto12["m_sql"] = "standard_price_per_session";
$proto12["m_srcTableName"] = "services";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "date_created",
	"m_strTable" => "services",
	"m_srcTableName" => "services"
));

$proto14["m_sql"] = "date_created";
$proto14["m_srcTableName"] = "services";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modified",
	"m_strTable" => "services",
	"m_srcTableName" => "services"
));

$proto16["m_sql"] = "date_modified";
$proto16["m_srcTableName"] = "services";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "last_modified_by",
	"m_strTable" => "services",
	"m_srcTableName" => "services"
));

$proto18["m_sql"] = "last_modified_by";
$proto18["m_srcTableName"] = "services";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "services",
	"m_srcTableName" => "services"
));

$proto20["m_sql"] = "category";
$proto20["m_srcTableName"] = "services";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "services";
$proto23["m_srcTableName"] = "services";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "serviceID";
$proto23["m_columns"][] = "service_name";
$proto23["m_columns"][] = "service_desc";
$proto23["m_columns"][] = "standard_price_per_session";
$proto23["m_columns"][] = "date_created";
$proto23["m_columns"][] = "date_modified";
$proto23["m_columns"][] = "last_modified_by";
$proto23["m_columns"][] = "category";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "services";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "services";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="services";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_services = createSqlQuery_services();


	
		;

								

$tdataservices[".sqlquery"] = $queryData_services;

$tableEvents["services"] = new eventsBase;
$tdataservices[".hasEvents"] = false;

?>