<html>
<head>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<title>Subscriber management</title>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen"/>	
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="wrapper">
<script type="text/javascript">
        $(document).ready(function() {
			var oTable = $('#big_table').dataTable( {
				"bProcessing": true,
				"bServerSide": true,
				"sAjaxSource": '<?php echo base_url(); ?>index.php/subscriber/datatable',
						"bJQueryUI": true,
						"sPaginationType": "full_numbers",
						"iDisplayStart ":20,
						"oLanguage": {
					"sProcessing": "<img src='<?php echo base_url(); ?>assets/images/ajax-loader_dark.gif'>"
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
<h1>Subscriber management</h1>
<?php echo $this->table->generate(); ?>
    </div>
</body>
<footer>
    <label class="footer-label" >Tutorial created by Ahmed Samy <a href="http://www.ahmed-samy.com">blog </a></label>
</footer>
</html>
