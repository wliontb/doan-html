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
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
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