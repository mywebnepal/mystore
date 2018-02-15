<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/offcanvas.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/setup.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/jquery.datetimepicker.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/daterangepicker.js') }}"></script>

<script type="text/javascript">
    var closebtn    = $('.closebtn');
    var sociallink  = $('.sociallink');
    closebtn.on('click', function(){
      sociallink.toggle();
    });
    // sticky
    $(document).ready(function(){
            $(".fix-to-top").sticky({topSpacing:0, zIndex: '999'});
        });
</script>