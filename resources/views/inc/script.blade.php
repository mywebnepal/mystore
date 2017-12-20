
    <!-- =============================================================
         END footer SECTION
     ==============================================================-->
   
     <!-- <script src="{{ asset('js/app.js') }}"></script> -->
     <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
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