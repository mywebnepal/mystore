<script type="text/javascript">
	    $(".deleteMe").click(function(e) {
	        var url = $(this).data('url');
          alert(url);
	        var name = $(this).data('name');
          var infoDiv   = $('.infoDiv');
	        if (confirm("Are you sure your want to  delete  " + name +'?')) {
	                $.ajax({
                          'type' : "GET",
                          'url'  : url,
                          success:function(response){
                          	console.log(response.message);
                            if (response.success == true) {
                               infoDiv.addClass('alert alert-success').append(response.message).fadeOut(5000);
                            }else{
                              infoDiv.addClass('alert alert-danger').append(response.message).fadeOut(5000);
                            }
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

      var catVal = $('.catVal');
      var divSubCat = $('.divSubCat');
      catVal.on('change', function(){
        var subCatoption = $('.subCatoption');
        subCatoption.empty();
        $.ajax({
           'type' : 'GET',
           'url'  : "{{URL::to('/')}}" + "/sisadmin/sub_categories/getSubCategory/"+catVal.val(),
           success:function(response){
            if (response) {
            console.log(response);
              divSubCat.css('display', 'block');
              var id   = '';
              var name = '';
              for(var i=0; i<response.length; i++){
                var id   = response[i]['id'];
                var name = response[i]['name'];
                 subCatoption.append('<option  value=' + id + '>' + name + '</option>');
              }
            }
           }
        });
      });

</script>