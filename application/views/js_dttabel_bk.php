<script type="text/javascript">
		 $(function() {
                $("#tbltolak").dataTable();
            });
			
        $(document).ready(function() {
			var oTable = $('#tolak_table').dataTable( {
				"bJQueryUI": true,
				"bProcessing": true,
				"bServerSide": true,
				"bDestroy": true,
				"sAjaxSource": '<?php echo base_url(); ?>index.php/tolak/datatable',
						"bJQueryUI": false,
						"sPaginationType": "full_numbers",
						"iDisplayStart ":20,
						"oLanguage": {
							"sProcessing": "<img src='<?php  echo base_url(); ?>assets/images/ajax-loader_dark.gif'>"
						},  
				"fnInitComplete": function() {
						//oTable.fnAdjustColumnSizing();
				 },
				'fnServerData': function(sSource, aoData, fnCallback)
					{
					  $.ajax
					  ({
						'dataType': 'json',
						'type'    : 'POST',
						'url'     : sSource,
						'data'    : aoData,
						'success' : fnCallback
					  });
					}
			} );
			
			var oTable = $('#terima_table').dataTable( {
				"bJQueryUI": true,
				"bProcessing": true,
				"bServerSide": true,
				"bDestroy": true,
				"sAjaxSource": '<?php echo base_url(); ?>index.php/terima/datatable',
						"bJQueryUI": false,
						"sPaginationType": "full_numbers",
						"iDisplayStart ":20,
						"oLanguage": {
							"sProcessing": "<img src='<?php  echo base_url(); ?>assets/images/ajax-loader_dark.gif'>"
						},  
				"fnInitComplete": function() {
						//oTable.fnAdjustColumnSizing();
				 },
				'fnServerData': function(sSource, aoData, fnCallback)
					{
					  $.ajax
					  ({
						'dataType': 'json',
						'type'    : 'POST',
						'url'     : sSource,
						'data'    : aoData,
						'success' : fnCallback
					  });
					}
			} );
			
			var oTable = $('#log_table').dataTable( {
				"bJQueryUI": true,
				"bProcessing": true,
				"bServerSide": true,
				"bDestroy": true,
				"sAjaxSource": '<?php echo base_url(); ?>index.php/log_grat/datatable',
						"bJQueryUI": false,
						"sPaginationType": "full_numbers",
						"iDisplayStart ":20,
						"oLanguage": {
							"sProcessing": "<img src='<?php  echo base_url(); ?>assets/images/ajax-loader_dark.gif'>"
						},  
				"fnInitComplete": function() {
						//oTable.fnAdjustColumnSizing();
				 },
				'fnServerData': function(sSource, aoData, fnCallback)
					{
					  $.ajax
					  ({
						'dataType': 'json',
						'type'    : 'POST',
						'url'     : sSource,
						'data'    : aoData,
						'success' : fnCallback
					  });
					}
			} );
			
			var oTable = $('#jns_table').dataTable( {
				"bJQueryUI": true,
				"bProcessing": true,
				"bServerSide": true,
				"bDestroy": true,
				"sAjaxSource": '<?php echo base_url(); ?>index.php/jns_grat/datatable',
						"bJQueryUI": false,
						"sPaginationType": "full_numbers",
						"iDisplayStart ":20,
						"oLanguage": {
							"sProcessing": "<img src='<?php  echo base_url(); ?>assets/images/ajax-loader_dark.gif'>"
						},  
				"fnInitComplete": function() {
						//oTable.fnAdjustColumnSizing();
				 },
				'fnServerData': function(sSource, aoData, fnCallback)
					{
					  $.ajax
					  ({
						'dataType': 'json',
						'type'    : 'POST',
						'url'     : sSource,
						'data'    : aoData,
						'success' : fnCallback
					  });
					}
			} );
			
} );
</script>