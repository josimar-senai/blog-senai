<h1>Calendário escolar - <?=date('Y')?></h1>
<br>
<div id="calendario"></div>
<script>
    $("#calendario").datepicker({
	inline: true
}).datepicker( "dialog", "10/12/2012" );
</script>
<br>