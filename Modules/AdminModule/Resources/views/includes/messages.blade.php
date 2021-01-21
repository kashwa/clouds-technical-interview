@if (session('success'))
    <script>
        $(document).ready(function () {
            // Success Type
            toastr.success("{{  session('success') }}", 'Good Job !');
        });
    </script>
@endif

