<?php
			$optionsArray = array( 'totals' => array( 'user_id' => array( 'totalsType' => '' ),
'username' => array( 'totalsType' => '' ),
'password' => array( 'totalsType' => '' ),
'fname' => array( 'totalsType' => '' ),
'lname' => array( 'totalsType' => '' ),
'status' => array( 'totalsType' => '' ),
'date_created' => array( 'totalsType' => '' ),
'date_updated' => array( 'totalsType' => '' ),
'access_type' => array( 'totalsType' => '' ),
'token' => array( 'totalsType' => '' ),
'last_modified_by' => array( 'totalsType' => '' ),
'email' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'user_id',
'username',
'password',
'fname',
'lname',
'status',
'date_created',
'date_updated',
'access_type',
'token',
'last_modified_by',
'email' ),
'exportFields' => array( 'user_id',
'username',
'password',
'fname',
'lname',
'status',
'date_created',
'date_updated',
'access_type',
'token',
'last_modified_by',
'email' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'user_id' => array( 'export_field' ),
'username' => array( 'export_field1' ),
'password' => array( 'export_field2' ),
'fname' => array( 'export_field3' ),
'lname' => array( 'export_field4' ),
'status' => array( 'export_field5' ),
'date_created' => array( 'export_field6' ),
'date_updated' => array( 'export_field7' ),
'access_type' => array( 'export_field8' ),
'token' => array( 'export_field9' ),
'last_modified_by' => array( 'export_field10' ),
'email' => array( 'export_field11' ) ) ),
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
'export_field11' ),
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
'export_field11' ) ),
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
'export_field11' ),
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
'export_field' => array( 'field' => 'user_id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'username',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'password',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'fname',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'lname',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'status',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'date_created',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'date_updated',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'access_type',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'token',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'last_modified_by',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'email',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>