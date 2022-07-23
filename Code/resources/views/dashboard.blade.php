<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')


        <!-- partial:partials/_navbar.html -->
        @include('admin.nav')

        <!-- partial -->
        @include('admin.body')

    <!-- container-scroller -->

    @include('admin.js')
</body>

</html>
