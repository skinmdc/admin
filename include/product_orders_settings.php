<?php



$tdataproduct_orders = array();
$tdataproduct_orders[".searchableFields"] = array();
$tdataproduct_orders[".ShortName"] = "product_orders";
$tdataproduct_orders[".OwnerID"] = "";
$tdataproduct_orders[".OriginalTable"] = "product_orders";


$tdataproduct_orders[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataproduct_orders[".originalPagesByType"] = $tdataproduct_orders[".pagesByType"];
$tdataproduct_orders[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataproduct_orders[".originalPages"] = $tdataproduct_orders[".pages"];
$tdataproduct_orders[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataproduct_orders[".originalDefaultPages"] = $tdataproduct_orders[".defaultPages"];

//	field labels
$fieldLabelsproduct_orders = array();
$fieldToolTipsproduct_orders = array();
$pageTitlesproduct_orders = array();
$placeHoldersproduct_orders = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproduct_orders["English"] = array();
	$fieldToolTipsproduct_orders["English"] = array();
	$placeHoldersproduct_orders["English"] = array();
	$pageTitlesproduct_orders["English"] = array();
	$fieldLabelsproduct_orders["English"]["order_id"] = "Order Id";
	$fieldToolTipsproduct_orders["English"]["order_id"] = "";
	$placeHoldersproduct_orders["English"]["order_id"] = "";
	$fieldLabelsproduct_orders["English"]["account_id"] = "Customer";
	$fieldToolTipsproduct_orders["English"]["account_id"] = "";
	$placeHoldersproduct_orders["English"]["account_id"] = "";
	$fieldLabelsproduct_orders["English"]["product_id"] = "Product";
	$fieldToolTipsproduct_orders["English"]["product_id"] = "";
	$placeHoldersproduct_orders["English"]["product_id"] = "";
	$fieldLabelsproduct_orders["English"]["quantity"] = "Quantity";
	$fieldToolTipsproduct_orders["English"]["quantity"] = "";
	$placeHoldersproduct_orders["English"]["quantity"] = "";
	$fieldLabelsproduct_orders["English"]["total"] = "Total";
	$fieldToolTipsproduct_orders["English"]["total"] = "";
	$placeHoldersproduct_orders["English"]["total"] = "";
	$fieldLabelsproduct_orders["English"]["date_of_purchase"] = "Date Of Purchase";
	$fieldToolTipsproduct_orders["English"]["date_of_purchase"] = "";
	$placeHoldersproduct_orders["English"]["date_of_purchase"] = "";
	$fieldLabelsproduct_orders["English"]["accountID"] = "Account ID";
	$fieldToolTipsproduct_orders["English"]["accountID"] = "";
	$placeHoldersproduct_orders["English"]["accountID"] = "";
	$fieldLabelsproduct_orders["English"]["first_name"] = "First Name";
	$fieldToolTipsproduct_orders["English"]["first_name"] = "";
	$placeHoldersproduct_orders["English"]["first_name"] = "";
	$fieldLabelsproduct_orders["English"]["last_name"] = "Last Name";
	$fieldToolTipsproduct_orders["English"]["last_name"] = "";
	$placeHoldersproduct_orders["English"]["last_name"] = "";
	$fieldLabelsproduct_orders["English"]["email"] = "Email";
	$fieldToolTipsproduct_orders["English"]["email"] = "";
	$placeHoldersproduct_orders["English"]["email"] = "";
	$fieldLabelsproduct_orders["English"]["product_id1"] = "Product Id1";
	$fieldToolTipsproduct_orders["English"]["product_id1"] = "";
	$placeHoldersproduct_orders["English"]["product_id1"] = "";
	$fieldLabelsproduct_orders["English"]["product_name"] = "Product Name";
	$fieldToolTipsproduct_orders["English"]["product_name"] = "";
	$placeHoldersproduct_orders["English"]["product_name"] = "";
	$fieldLabelsproduct_orders["English"]["price"] = "Price";
	$fieldToolTipsproduct_orders["English"]["price"] = "";
	$placeHoldersproduct_orders["English"]["price"] = "";
	if (count($fieldToolTipsproduct_orders["English"]))
		$tdataproduct_orders[".isUseToolTips"] = true;
}


	$tdataproduct_orders[".NCSearch"] = true;



$tdataproduct_orders[".shortTableName"] = "product_orders";
$tdataproduct_orders[".nSecOptions"] = 0;

$tdataproduct_orders[".mainTableOwnerID"] = "";
$tdataproduct_orders[".entityType"] = 0;

$tdataproduct_orders[".strOriginalTableName"] = "product_orders";

	



$tdataproduct_orders[".showAddInPopup"] = false;

$tdataproduct_orders[".showEditInPopup"] = false;

$tdataproduct_orders[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproduct_orders[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataproduct_orders[".listAjax"] = true;
//	temporary
$tdataproduct_orders[".listAjax"] = false;

	$tdataproduct_orders[".audit"] = false;

	$tdataproduct_orders[".locking"] = false;


$pages = $tdataproduct_orders[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproduct_orders[".edit"] = true;
	$tdataproduct_orders[".afterEditAction"] = 0;
	$tdataproduct_orders[".closePopupAfterEdit"] = 1;
	$tdataproduct_orders[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataproduct_orders[".add"] = true;
$tdataproduct_orders[".afterAddAction"] = 0;
$tdataproduct_orders[".closePopupAfterAdd"] = 1;
$tdataproduct_orders[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataproduct_orders[".list"] = true;
}



$tdataproduct_orders[".strSortControlSettingsJSON"] = "";

$tdataproduct_orders[".strClickActionJSON"] = "{\"fields\":{\"accountID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"account_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"date_of_purchase\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"email\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"first_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"last_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"order_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"product_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"product_id1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"product_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"quantity\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"total\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataproduct_orders[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproduct_orders[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproduct_orders[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproduct_orders[".printFriendly"] = true;
}



$tdataproduct_orders[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproduct_orders[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproduct_orders[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproduct_orders[".isUseAjaxSuggest"] = true;

$tdataproduct_orders[".rowHighlite"] = true;



						

$tdataproduct_orders[".ajaxCodeSnippetAdded"] = false;

$tdataproduct_orders[".buttonsAdded"] = false;

$tdataproduct_orders[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproduct_orders[".isUseTimeForSearch"] = false;


$tdataproduct_orders[".badgeColor"] = "1E90FF";


$tdataproduct_orders[".allSearchFields"] = array();
$tdataproduct_orders[".filterFields"] = array();
$tdataproduct_orders[".requiredSearchFields"] = array();

$tdataproduct_orders[".googleLikeFields"] = array();
$tdataproduct_orders[".googleLikeFields"][] = "order_id";
$tdataproduct_orders[".googleLikeFields"][] = "account_id";
$tdataproduct_orders[".googleLikeFields"][] = "product_id";
$tdataproduct_orders[".googleLikeFields"][] = "quantity";
$tdataproduct_orders[".googleLikeFields"][] = "total";
$tdataproduct_orders[".googleLikeFields"][] = "date_of_purchase";
$tdataproduct_orders[".googleLikeFields"][] = "accountID";
$tdataproduct_orders[".googleLikeFields"][] = "first_name";
$tdataproduct_orders[".googleLikeFields"][] = "last_name";
$tdataproduct_orders[".googleLikeFields"][] = "email";
$tdataproduct_orders[".googleLikeFields"][] = "product_id1";
$tdataproduct_orders[".googleLikeFields"][] = "product_name";
$tdataproduct_orders[".googleLikeFields"][] = "price";



$tdataproduct_orders[".tableType"] = "list";

$tdataproduct_orders[".printerPageOrientation"] = 0;
$tdataproduct_orders[".nPrinterPageScale"] = 100;

$tdataproduct_orders[".nPrinterSplitRecords"] = 40;

$tdataproduct_orders[".geocodingEnabled"] = false;





$tdataproduct_orders[".isResizeColumns"] = true;





$tdataproduct_orders[".pageSize"] = 20;

$tdataproduct_orders[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproduct_orders[".strOrderBy"] = $tstrOrderBy;

$tdataproduct_orders[".orderindexes"] = array();

$tdataproduct_orders[".sqlHead"] = "SELECT product_orders.order_id,  product_orders.account_id,  product_orders.product_id,  product_orders.quantity,  product_orders.total,  product_orders.date_of_purchase,  accounts.accountID,  accounts.first_name,  accounts.last_name,  accounts.email,  products.product_id AS product_id1,  products.product_name,  products.price";
$tdataproduct_orders[".sqlFrom"] = "FROM product_orders  INNER JOIN accounts ON accounts.accountID = product_orders.account_id  INNER JOIN products ON products.product_id = product_orders.product_id";
$tdataproduct_orders[".sqlWhereExpr"] = "";
$tdataproduct_orders[".sqlTail"] = "";

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
$tdataproduct_orders[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproduct_orders[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproduct_orders[".arrGroupsPerPage"] = $arrGPP;

$tdataproduct_orders[".highlightSearchResults"] = true;

$tableKeysproduct_orders = array();
$tableKeysproduct_orders[] = "order_id";
$tdataproduct_orders[".Keys"] = $tableKeysproduct_orders;


$tdataproduct_orders[".hideMobileList"] = array();




//	order_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "order_id";
	$fdata["GoodName"] = "order_id";
	$fdata["ownerTable"] = "product_orders";
	$fdata["Label"] = GetFieldLabel("product_orders","order_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "order_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_orders.order_id";

	
	
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


	$tdataproduct_orders["order_id"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "order_id";
//	account_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_id";
	$fdata["GoodName"] = "account_id";
	$fdata["ownerTable"] = "product_orders";
	$fdata["Label"] = GetFieldLabel("product_orders","account_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "account_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_orders.account_id";

	
	
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
	$edata["DisplayField"] = " concat(last_name,', ',first_name)   ";

	

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_orders["account_id"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "account_id";
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "product_orders";
	$fdata["Label"] = GetFieldLabel("product_orders","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_orders.product_id";

	
	
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
	$edata["LookupTable"] = "products";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "product_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "product_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdataproduct_orders["product_id"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "product_id";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "product_orders";
	$fdata["Label"] = GetFieldLabel("product_orders","quantity");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "quantity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_orders.quantity";

	
	
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


	$tdataproduct_orders["quantity"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "quantity";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "product_orders";
	$fdata["Label"] = GetFieldLabel("product_orders","total");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_orders.total";

	
	
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


	$tdataproduct_orders["total"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "total";
//	date_of_purchase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_of_purchase";
	$fdata["GoodName"] = "date_of_purchase";
	$fdata["ownerTable"] = "product_orders";
	$fdata["Label"] = GetFieldLabel("product_orders","date_of_purchase");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "date_of_purchase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_orders.date_of_purchase";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdataproduct_orders["date_of_purchase"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "date_of_purchase";
//	accountID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "accountID";
	$fdata["GoodName"] = "accountID";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("product_orders","accountID");
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


	$tdataproduct_orders["accountID"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "accountID";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("product_orders","first_name");
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


	$tdataproduct_orders["first_name"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "first_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("product_orders","last_name");
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


	$tdataproduct_orders["last_name"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "last_name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("product_orders","email");
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


	$tdataproduct_orders["email"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "email";
//	product_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "product_id1";
	$fdata["GoodName"] = "product_id1";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("product_orders","product_id1");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "products.product_id";

	
	
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


	$tdataproduct_orders["product_id1"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "product_id1";
//	product_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "product_name";
	$fdata["GoodName"] = "product_name";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("product_orders","product_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "product_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "products.product_name";

	
	
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


	$tdataproduct_orders["product_name"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "product_name";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("product_orders","price");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "products.price";

	
	
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


	$tdataproduct_orders["price"] = $fdata;
		$tdataproduct_orders[".searchableFields"][] = "price";


$tables_data["product_orders"]=&$tdataproduct_orders;
$field_labels["product_orders"] = &$fieldLabelsproduct_orders;
$fieldToolTips["product_orders"] = &$fieldToolTipsproduct_orders;
$placeHolders["product_orders"] = &$placeHoldersproduct_orders;
$page_titles["product_orders"] = &$pageTitlesproduct_orders;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["product_orders"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["product_orders"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_product_orders()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "product_orders.order_id,  product_orders.account_id,  product_orders.product_id,  product_orders.quantity,  product_orders.total,  product_orders.date_of_purchase,  accounts.accountID,  accounts.first_name,  accounts.last_name,  accounts.email,  products.product_id AS product_id1,  products.product_name,  products.price";
$proto0["m_strFrom"] = "FROM product_orders  INNER JOIN accounts ON accounts.accountID = product_orders.account_id  INNER JOIN products ON products.product_id = product_orders.product_id";
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
	"m_strName" => "order_id",
	"m_strTable" => "product_orders",
	"m_srcTableName" => "product_orders"
));

$proto6["m_sql"] = "product_orders.order_id";
$proto6["m_srcTableName"] = "product_orders";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "account_id",
	"m_strTable" => "product_orders",
	"m_srcTableName" => "product_orders"
));

$proto8["m_sql"] = "product_orders.account_id";
$proto8["m_srcTableName"] = "product_orders";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "product_orders",
	"m_srcTableName" => "product_orders"
));

$proto10["m_sql"] = "product_orders.product_id";
$proto10["m_srcTableName"] = "product_orders";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "product_orders",
	"m_srcTableName" => "product_orders"
));

$proto12["m_sql"] = "product_orders.quantity";
$proto12["m_srcTableName"] = "product_orders";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "product_orders",
	"m_srcTableName" => "product_orders"
));

$proto14["m_sql"] = "product_orders.total";
$proto14["m_srcTableName"] = "product_orders";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "date_of_purchase",
	"m_strTable" => "product_orders",
	"m_srcTableName" => "product_orders"
));

$proto16["m_sql"] = "product_orders.date_of_purchase";
$proto16["m_srcTableName"] = "product_orders";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "accountID",
	"m_strTable" => "accounts",
	"m_srcTableName" => "product_orders"
));

$proto18["m_sql"] = "accounts.accountID";
$proto18["m_srcTableName"] = "product_orders";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "product_orders"
));

$proto20["m_sql"] = "accounts.first_name";
$proto20["m_srcTableName"] = "product_orders";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "accounts",
	"m_srcTableName" => "product_orders"
));

$proto22["m_sql"] = "accounts.last_name";
$proto22["m_srcTableName"] = "product_orders";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "accounts",
	"m_srcTableName" => "product_orders"
));

$proto24["m_sql"] = "accounts.email";
$proto24["m_srcTableName"] = "product_orders";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "products",
	"m_srcTableName" => "product_orders"
));

$proto26["m_sql"] = "products.product_id";
$proto26["m_srcTableName"] = "product_orders";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "product_id1";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "product_name",
	"m_strTable" => "products",
	"m_srcTableName" => "product_orders"
));

$proto28["m_sql"] = "products.product_name";
$proto28["m_srcTableName"] = "product_orders";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "products",
	"m_srcTableName" => "product_orders"
));

$proto30["m_sql"] = "products.price";
$proto30["m_srcTableName"] = "product_orders";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "product_orders";
$proto33["m_srcTableName"] = "product_orders";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "order_id";
$proto33["m_columns"][] = "account_id";
$proto33["m_columns"][] = "product_id";
$proto33["m_columns"][] = "quantity";
$proto33["m_columns"][] = "total";
$proto33["m_columns"][] = "date_of_purchase";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "product_orders";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "product_orders";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "accounts";
$proto37["m_srcTableName"] = "product_orders";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "accountID";
$proto37["m_columns"][] = "first_name";
$proto37["m_columns"][] = "last_name";
$proto37["m_columns"][] = "middle_name";
$proto37["m_columns"][] = "contact_no";
$proto37["m_columns"][] = "address_line";
$proto37["m_columns"][] = "barangay";
$proto37["m_columns"][] = "city_province_region";
$proto37["m_columns"][] = "email";
$proto37["m_columns"][] = "prefered_mode_of_payment";
$proto37["m_columns"][] = "date_modified";
$proto37["m_columns"][] = "date_created";
$proto37["m_columns"][] = "last_modified_by";
$proto37["m_columns"][] = "full_name";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN accounts ON accounts.accountID = product_orders.account_id";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "product_orders";
$proto38=array();
$proto38["m_sql"] = "accounts.accountID = product_orders.account_id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "accountID",
	"m_strTable" => "accounts",
	"m_srcTableName" => "product_orders"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= product_orders.account_id";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "products";
$proto41["m_srcTableName"] = "product_orders";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "product_id";
$proto41["m_columns"][] = "product_name";
$proto41["m_columns"][] = "product_desc";
$proto41["m_columns"][] = "price";
$proto41["m_columns"][] = "category";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "INNER JOIN products ON products.product_id = product_orders.product_id";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "product_orders";
$proto42=array();
$proto42["m_sql"] = "products.product_id = product_orders.product_id";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "products",
	"m_srcTableName" => "product_orders"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= product_orders.product_id";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="product_orders";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_product_orders = createSqlQuery_product_orders();


	
		;

													

$tdataproduct_orders[".sqlquery"] = $queryData_product_orders;

$tableEvents["product_orders"] = new eventsBase;
$tdataproduct_orders[".hasEvents"] = false;

?>