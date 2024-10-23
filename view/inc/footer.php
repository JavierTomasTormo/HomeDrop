
    <script>
        
        $(":radio").change(function() {
            
            var radioSeleccionados = $("input:radio:checked").map(function(){
                return $(this).val();
            }).get().join(':');

            $("#radioSincronizado").val(radioSeleccionados);
        });
    </script>



 
<script>
    $("input[name='Superficie[]']").change(function() {
        var valoresSeleccionados = $("input[name='Superficie[]']:checked").map(function(){
            return $(this).val();
        }).get().join(':');

        $("#inputSincronizado").val(valoresSeleccionados);
    });
</script>

<script>
    $("input[name='Extras[]']").change(function() {
        var valoresSeleccionados = $("input[name='Extras[]']:checked").map(function(){
            return $(this).val();
        }).get().join(':');

        $("#extrasSincronizados").val(valoresSeleccionados);
    });
</script>



</div>
		<div id="footer" align="center">
			&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><hr width="10%"></a>&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
	</body>





	   

</html>	