<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'accountID',
'first_name',
'last_name',
'middle_name',
'contact_no',
'address_line',
'barangay',
'city_province_region',
'email',
'prefered_mode_of_payment' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'accountID' => array( 'import_field' ),
'first_name' => array( 'import_field1' ),
'last_name' => array( 'import_field2' ),
'middle_name' => array( 'import_field3' ),
'contact_no' => array( 'import_field4' ),
'address_line' => array( 'import_field5' ),
'barangay' => array( 'import_field6' ),
'city_province_region' => array( 'import_field7' ),
'email' => array( 'import_field8' ),
'prefered_mode_of_payment' => array( 'import_field9' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9' ) ),
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
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'accountID',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'first_name',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'last_name',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'middle_name',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'contact_no',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'address_line',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'barangay',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'city_province_region',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'email',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'prefered_mode_of_payment',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>