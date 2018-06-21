<!-- Footer -->          
            @include('footer.footer')
            <!-- End Footer -->       
        </div>
        <!-- End Page Wrap -->
       @include('footer/footer-scr')
      
<?php $url=Route::getFacadeRoot()->current()->uri();?> 
<?php if ((\Request::is('*/references'))||(\Request::is('references')))
{?> 
@include('footer.bottom_pdf')
<?php } ?>
<?php if(! empty ($de_id)) echo'
        <script>
        $( document ).ready(function() {
            document.getElementById('.$de_id.').click();
            return false;
        });
        </script>
        ';
        ?>
    </body>
</html>
