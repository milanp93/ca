@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            $.toast({
                heading: 'Error',
                hideAfter : 1500,
                onclick: null,
                text: "{!!  $error !!}",
                showHideTransition: 'fade',
                icon: 'error',
                position: 'mid-center',
            })
        </script>

    @endforeach
@endif

@if (Session::has('info'))
    <script>
        $.toast({
            heading: 'info',

            text: "{!! Session::get('info') !!}",
            showHideTransition: 'fade',
            icon: 'info',
            position: 'mid-center',
        })
    </script>
@endif