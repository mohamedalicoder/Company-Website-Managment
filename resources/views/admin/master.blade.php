<!doctype html>
<html lang="en">

@include('admin.partials.head')

<body class="vertical  light  ">

    <div class="wrapper">


        @include('admin.partials.navbar')

        @yield('content')


    </div>



@include('admin.partials.scripts')
</body>

</html>
