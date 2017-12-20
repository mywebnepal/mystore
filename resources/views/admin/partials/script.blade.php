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
                           window.location.reload();
                          }
	                });
	            }
	            return false;
	        e.preventDefault();
	    });

	    $('.summernote').summernote({
                    height: 200,
                    toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen', 'codeview', 'help']]

                  ]
                });

</script>