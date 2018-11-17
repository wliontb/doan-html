<?php include '../config/config.php'; ?>		
		</div>
	</div>
	<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
	</script>
	<script src="<?php echo $url ?>js/custom.js"></script>
	<script src="<?php echo $url ?>js/bootstrap.min.js"></script>
	<script src="<?php echo $url ?>js/jquery-3.2.1.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$(function() {
			var from = $(".fromDate")
			.datepicker({
				dateFormat: "dd-mm-yy",
				changeMonth: true
			})
			.on("change", function() {
				to.datepicker( "option", "minDate", getDate(this) );
			}),
			to = $( ".toDate" ).datepicker({
				dateFormat: "dd-mm-yy",
				changeMonth: true
			})
			.on("change", function() {
				from.datepicker( "option", "maxDate", getDate(this) );
			});

			function getDate(element) {
				var date;
				var dateFormat = "dd-mm-yy";
			try {
				date = $.datepicker.parseDate(dateFormat, element.value );
			} catch(error) {
				date = null;
			}
			return date;
			}
		});
	</script>
</body>
</html>