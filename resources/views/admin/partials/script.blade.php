{!! Html::script('backEndAdmin/js/all.js') !!}
{!! Html::script('backEndAdmin/sound/messagebox.mp3') !!}
{!! Html::script('backEndAdmin/js/notification/SmartNotification.min.js') !!}
<script type="text/javascript">
	    $(".deleteMe").click(function(e) {
	    	

	        var url = $(this).data('url');
	        var data = $(this).data('data');
	        var id = this;
	//            console.log($(this).parent().parent());
	        $.SmartMessageBox({
	            title : "Delete Confirmation!",
	            content : "Are You sure want to remove this?",
	            buttons : '[No][Yes]'
	        }, function(ButtonPressed) {
	            if (ButtonPressed === "Yes") {
	                /*delete item using ajax*/
	                $.ajax({
	                    type: "POST",
	                    context: data,
	                    url: url,
	                });
	                /*remove parent tr*/
	                $(id).closest('tr').remove();
	                /*show alert*/
	                $.smallBox({
	                    title : "Deleted!",
	                    content : "<i class='fa fa-clock-o'></i> <i>Selected item deleted..</i>",
	                    color : "#659265",
	                    iconSmall : "fa fa-check fa-2x fadeInRight animated",
	                    timeout : 4000
	                });
	            }
	            if (ButtonPressed === "No") {
	                $.smallBox({
	                    title : "Cancel Process",
	                    content : "<i class='fa fa-clock-o'></i> <i>You pressed No...</i>",
	                    color : "#C46A69",
	                    iconSmall : "fa fa-times fa-2x fadeInRight animated",
	                    timeout : 4000
	                });
	            }

	        });
	        e.preventDefault();
	    })
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>