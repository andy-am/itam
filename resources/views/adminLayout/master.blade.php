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

            @yield('contentAdmin')

        </aside>

    </div><!-- ./wrapper -->

</body>

@include('adminLayout.scripts')

</html>