<?php
			$optionsArray = array( 'totals' => array( 'accountID' => array( 'totalsType' => '' ),
'first_name' => array( 'totalsType' => '' ),
'last_name' => array( 'totalsType' => '' ),
'middle_name' => array( 'totalsType' => '' ),
'contact_no' => array( 'totalsType' => '' ),
'address_line' => array( 'totalsType' => '' ),
'barangay' => array( 'totalsType' => '' ),
'city_province_region' => array( 'totalsType' => '' ),
'email' => array( 'totalsType' => '' ),
'prefered_mode_of_payment' => array( 'totalsType' => '' ),
'date_modified' => array( 'totalsType' => '' ),
'date_created' => array( 'totalsType' => '' ),
'last_modified_by' => array( 'totalsType' => '' ),
'full_name' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'accountID',
'first_name',
'last_name',
'middle_name',
'contact_no',
'address_line',
'barangay',
'city_province_region',
'email',
'prefered_mode_of_payment',
'date_modified',
'date_created',
'last_modified_by' ),
'exportFields' => array( 'accountID',
'first_name',
'last_name',
'middle_name',
'contact_no',
'address_line',
'barangay',
'city_province_region',
'email',
'prefered_mode_of_payment',
'date_modified',
'date_created',
'last_modified_by' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'accountID' => array( 'export_field' ),
'first_name' => array( 'export_field1' ),
'last_name' => array( 'export_field2' ),
'middle_name' => array( 'export_field3' ),
'contact_no' => array( 'export_field4' ),
'address_line' => array( 'export_field5' ),
'barangay' => array( 'export_field6' ),
'city_province_region' => array( 'export_field7' ),
'email' => array( 'export_field8' ),
'prefered_mode_of_payment' => array( 'export_field9' ),
'date_modified' => array( 'export_field10' ),
'date_created' => array( 'export_field11' ),
'last_modified_by' => array( 'export_field12' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'accountID',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'first_name',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'last_name',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'middle_name',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'contact_no',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'address_line',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'barangay',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'city_province_region',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'email',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'prefered_mode_of_payment',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'date_modified',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'date_created',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'last_modified_by',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>