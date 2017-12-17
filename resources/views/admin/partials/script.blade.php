<script type="text/javascript">
	    $(".deleteMe").click(function(e) {
	        var url = $(this).data('url');
	        var name = $(this).data('name');
	        alert(url);
	        if (confirm("Are you sure your want to  delete  " + name +'?')) {
	                $.ajax({
                          'type' : "GET",
                          'url'  : url,
                          success:function(response){
                          	console.log(response);
                           // $(id).closest('tr').remove();
                           window.location.reload();
                          }
	                });
	            }
	            return false;
	        e.preventDefault();
	    })
</script>