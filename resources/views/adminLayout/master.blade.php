<html>

    @include('adminLayout.head')

<body class="skin-blue">

    @include('adminLayout.header')

    <!-- header logo: style can be found in header.less -->
    <div class="wrapper row-offcanvas row-offcanvas-left">

        @include('adminLayout.leftMenu')

        <aside class="right-side">
            <!-- Content Header (Page header) -->
            @yield('adminBreadCrumbs')
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
            </div> <!-- end .flash-message -->
            @yield('contentAdmin')

        </aside>

    </div><!-- ./wrapper -->
    <div class='notifications bottom-left'></div>
</body>

@include('adminLayout.scripts')

</html>