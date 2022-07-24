<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .light {
            margin-top: 50px;
            background-color: #fff;
        }

        .h11 {
            font-size: 3rem;
            font-weight: 600;
            text-align: center;
        }

        .image_size {
            width: 150px;
            height: 150px;
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
                <table class="table container light">
                    <h1 class="h11">Products</h1>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">University</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($product as $product)
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <img src="/product/{{$product->image}}">
                            </td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- container-scroller -->

        @include('admin.js')
</body>

</html>
