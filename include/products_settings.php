<?php



$tdataproducts = array();
$tdataproducts[".searchableFields"] = array();
$tdataproducts[".ShortName"] = "products";
$tdataproducts[".OwnerID"] = "";
$tdataproducts[".OriginalTable"] = "products";


$tdataproducts[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataproducts[".originalPagesByType"] = $tdataproducts[".pagesByType"];
$tdataproducts[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataproducts[".originalPages"] = $tdataproducts[".pages"];
$tdataproducts[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataproducts[".originalDefaultPages"] = $tdataproducts[".defaultPages"];

//	field labels
$fieldLabelsproducts = array();
$fieldToolTipsproducts = array();
$pageTitlesproducts = array();
$placeHoldersproducts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproducts["English"] = array();
	$fieldToolTipsproducts["English"] = array();
	$placeHoldersproducts["English"] = array();
	$pageTitlesproducts["English"] = array();
	$fieldLabelsproducts["English"]["product_id"] = "Product Id";
	$fieldToolTipsproducts["English"]["product_id"] = "";
	$placeHoldersproducts["English"]["product_id"] = "";
	$fieldLabelsproducts["English"]["product_name"] = "Product Name";
	$fieldToolTipsproducts["English"]["product_name"] = "";
	$placeHoldersproducts["English"]["product_name"] = "";
	$fieldLabelsproducts["English"]["product_desc"] = "Product Desc";
	$fieldToolTipsproducts["English"]["product_desc"] = "";
	$placeHoldersproducts["English"]["product_desc"] = "";
	$fieldLabelsproducts["English"]["price"] = "Price";
	$fieldToolTipsproducts["English"]["price"] = "";
	$placeHoldersproducts["English"]["price"] = "";
	$fieldLabelsproducts["English"]["category"] = "Category";
	$fieldToolTipsproducts["English"]["category"] = "";
	$placeHoldersproducts["English"]["category"] = "";
	$pageTitlesproducts["English"]["add"] = "Add New Product";
	$pageTitlesproducts["English"]["edit"] = "Update Product Details";
	if (count($fieldToolTipsproducts["English"]))
		$tdataproducts[".isUseToolTips"] = true;
}


	$tdataproducts[".NCSearch"] = true;



$tdataproducts[".shortTableName"] = "products";
$tdataproducts[".nSecOptions"] = 0;

$tdataproducts[".mainTableOwnerID"] = "";
$tdataproducts[".entityType"] = 0;

$tdataproducts[".strOriginalTableName"] = "products";

	



$tdataproducts[".showAddInPopup"] = false;

$tdataproducts[".showEditInPopup"] = false;

$tdataproducts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproducts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataproducts[".listAjax"] = true;
//	temporary
$tdataproducts[".listAjax"] = false;

	$tdataproducts[".audit"] = false;

	$tdataproducts[".locking"] = false;


$pages = $tdataproducts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproducts[".edit"] = true;
	$tdataproducts[".afterEditAction"] = 1;
	$tdataproducts[".closePopupAfterEdit"] = 1;
	$tdataproducts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproducts[".add"] = true;
$tdataproducts[".afterAddAction"] = 1;
$tdataproducts[".closePopupAfterAdd"] = 1;
$tdataproducts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproducts[".list"] = true;
}



$tdataproducts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproducts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproducts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproducts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproducts[".printFriendly"] = true;
}



$tdataproducts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproducts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproducts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproducts[".isUseAjaxSuggest"] = true;

$tdataproducts[".rowHighlite"] = true;



						

$tdataproducts[".ajaxCodeSnippetAdded"] = false;

$tdataproducts[".buttonsAdded"] = false;

$tdataproducts[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproducts[".isUseTimeForSearch"] = false;


$tdataproducts[".badgeColor"] = "B22222";


$tdataproducts[".allSearchFields"] = array();
$tdataproducts[".filterFields"] = array();
$tdataproducts[".requiredSearchFields"] = array();

$tdataproducts[".googleLikeFields"] = array();
$tdataproducts[".googleLikeFields"][] = "product_id";
$tdataproducts[".googleLikeFields"][] = "product_name";
$tdataproducts[".googleLikeFields"][] = "product_desc";
$tdataproducts[".googleLikeFields"][] = "price";
$tdataproducts[".googleLikeFields"][] = "category";



$tdataproducts[".tableType"] = "list";

$tdataproducts[".printerPageOrientation"] = 0;
$tdataproducts[".nPrinterPageScale"] = 100;

$tdataproducts[".nPrinterSplitRecords"] = 40;

$tdataproducts[".geocodingEnabled"] = false;





$tdataproducts[".isResizeColumns"] = true;





$tdataproducts[".pageSize"] = 20;

$tdataproducts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproducts[".strOrderBy"] = $tstrOrderBy;

$tdataproducts[".orderindexes"] = array();

$tdataproducts[".sqlHead"] = "SELECT product_id,  	product_name,  	product_desc,  	price,  	category";
$tdataproducts[".sqlFrom"] = "FROM products";
$tdataproducts[".sqlWhereExpr"] = "";
$tdataproducts[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproducts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproducts[".arrGroupsPerPage"] = $arrGPP;

$tdataproducts[".highlightSearchResults"] = true;

$tableKeysproducts = array();
$tableKeysproducts[] = "product_id";
$tdataproducts[".Keys"] = $tableKeysproducts;


$tdataproducts[".hideMobileList"] = array();




//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_id";

	
	
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


	$tdataproducts["product_id"] = $fdata;
		$tdataproducts[".searchableFields"][] = "product_id";
//	product_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_name";
	$fdata["GoodName"] = "product_name";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","product_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "product_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Product %value% already exists", "messageType" => "Text");

	
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


	$tdataproducts["product_name"] = $fdata;
		$tdataproducts[".searchableFields"][] = "product_name";
//	product_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_desc";
	$fdata["GoodName"] = "product_desc";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","product_desc");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "product_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_desc";

	
	
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


	$tdataproducts["product_desc"] = $fdata;
		$tdataproducts[".searchableFields"][] = "product_desc";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","price");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "price";

	
	
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


	$tdataproducts["price"] = $fdata;
		$tdataproducts[".searchableFields"][] = "price";
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = GetFieldLabel("products","category");
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


	$tdataproducts["category"] = $fdata;
		$tdataproducts[".searchableFields"][] = "category";


$tables_data["products"]=&$tdataproducts;
$field_labels["products"] = &$fieldLabelsproducts;
$fieldToolTips["products"] = &$fieldToolTipsproducts;
$placeHolders["products"] = &$placeHoldersproducts;
$page_titles["products"] = &$pageTitlesproducts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["products"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["products"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_products()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "product_id,  	product_name,  	product_desc,  	price,  	category";
$proto0["m_strFrom"] = "FROM products";
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
	"m_strName" => "product_id",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto6["m_sql"] = "product_id";
$proto6["m_srcTableName"] = "products";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "product_name",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto8["m_sql"] = "product_name";
$proto8["m_srcTableName"] = "products";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_desc",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto10["m_sql"] = "product_desc";
$proto10["m_srcTableName"] = "products";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto12["m_sql"] = "price";
$proto12["m_srcTableName"] = "products";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "products",
	"m_srcTableName" => "products"
));

$proto14["m_sql"] = "category";
$proto14["m_srcTableName"] = "products";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "products";
$proto17["m_srcTableName"] = "products";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "product_id";
$proto17["m_columns"][] = "product_name";
$proto17["m_columns"][] = "product_desc";
$proto17["m_columns"][] = "price";
$proto17["m_columns"][] = "category";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "products";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "products";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="products";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_products = createSqlQuery_products();


	
		;

					

$tdataproducts[".sqlquery"] = $queryData_products;

$tableEvents["products"] = new eventsBase;
$tdataproducts[".hasEvents"] = false;

?>