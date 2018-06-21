  <script type="text/javascript" src="{{ url('/') }}/js/jquery.dataTables.min.js"></script>
     <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>-->
    <script type="text/javascript" src="{{ url('/') }}/js/dataTables.bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>-->
   <script language="javascript">
	   $(document).ready(function() {
    $('#news').dataTable( {
		"pageLength": 2,
		"bLengthChange" : false, //thought this line could hide the LengthMenu
        "bInfo":false,
		"order": [[ 1, "asc" ]]
		//searchPlaceholder: "Search records"
		//"sInfo":false,
	} );
		   $(".search-field").attr("placeholder", "Search...");
} );
</script> 