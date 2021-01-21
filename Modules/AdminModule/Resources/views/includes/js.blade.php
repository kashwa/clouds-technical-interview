<!-- jQuery -->
<script src="{{ asset('assets/') }}/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/') }}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

@yield('plugin-js')

<!-- AdminLTE App -->
<script src="{{ asset('assets/') }}/admin/dist/js/adminlte.min.js"></script>
<script src="https://designreset.com/preview-equation/default/assets/js/design-js/design.js"></script>
<script src="https://designreset.com/preview-equation/default/bootstrap/js/popper.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script type="text/javascript">


    function no_submit() {
        return false;
    }

function notifyOnErrorInput(input){
  var message = input.data('validateHint');
  $.Notify({
      caption: 'Error',
      content: message,
      type: 'alert',
      timeout: 3500 ,
  });
}


function notifyUser(message,caption,type){

  $.Notify({
      caption: caption,
      content: message,
      type: type
  });
}


function submit(form){
  console.log(form);
  return true;
}

    // Change links on Hover
    $(".hover_link").hover(function () {
        $(this).css("background-color", "#389dfa");
    }, function(){
        $(this).css("background-color", "white");
    });
</script>

@yield('js')
