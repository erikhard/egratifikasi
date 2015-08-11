

<script type="text/javascript">

		 
		 
		$(document).ready(function() {
			$('#form_tolak').validate({
				rules: {
					
					/* waktu_terima_tgl: {
						indonesianDate:true
					}, */
					emp_email: {
						email: true
					},
				},
				messages: {
					status_app : {
						required: "<div class='alert alert-error'><strong>Check</strong> </div>"
					},
					
					emp_email: {
						email: "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'></button><strong>Format email tidak valid</strong> </div>"
						
					}
				}
			});
		});
		
		$.validator.addMethod(
			"indonesianDate",
			function(value, element) {
				// put your own logic here, this is just a (crappy) example
				return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
			},
			"<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'></button><strong>Please enter a date in the format DD/MM/YYYY</strong> </div>"
		);
</script>
