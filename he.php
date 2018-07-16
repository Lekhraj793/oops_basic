<html> 
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" defer="defer"></script>
<title>hello</title>

</head>
<body>
	<div style="width:300px; clear:both;">
      <p>
        <label for="date">Pick a delivery date:</label>
        <input id="date" type="text" name="attributes[date]" />
        <span style="display:block" class="instructions"> We do not deliver during the weekend.</span>
      </p>
    </div>
	
	<script type="text/javascript">
 $(document).ready( function() {
      $(function() {
        $("#date").datepicker( {
          minDate: +1,
          maxDate: +2M,
          beforeShowDay: jQuery.datepicker.noWeekends
        } );
      });
    });
	</script>
</body>
</html>