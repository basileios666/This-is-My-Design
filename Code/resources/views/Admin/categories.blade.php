<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .div_center {
            text-align: center;
            margin-top: 40px;
        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color {
            color: black;
        }

        .margin_tabel {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')


        <!-- partial:partials/_navbar.html -->
        @include('admin.nav')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if (session()->has('message_delete'))
                    <div class="alert alert-danger">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        {{ session()->get('message_delete') }}
                    </div>
                @endif

                @if (session()->has('message'))
                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="div_center">
                    <h2 class="h2_font">Add Category</h2>
                    <form action="/add_categories" method="POST">
                        @csrf
                        <input class="input_color" type="text" name="category" placeholder="write category name">

                        <input type="submit" class="btn btn-primary" name="submit" value="Add category">
                    </form>
                </div>

                <div class="container margin_tabel">

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">University name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)

                            <tr>
                                <th scope="row">1</th>
                                <td>{{$data->category_name}}</td>
                                <td><a onclick="return confirm('Are You Sure You Want to Delete this?!')" href="{{url('delete_category', $data->id)}}"><button class="btn btn-danger">Delete</button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <!-- container-scroller -->

        @include('admin.js')
</body>

</html>
