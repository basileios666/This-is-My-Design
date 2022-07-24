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
            background-color: black;
            color: #fff;
        }

        .select_color {
            background-color: #fff;
            color: black;
        }

        .margin_tabel {
            margin-top: 50px;
        }

        .light {
            background-color: #fff;
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
        <div class="container main-panel">
            <div class="content-wrapper">

                @if (session()->has('message'))
                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="div_center">
                    <h2 class="h2_font">Add product</h2>

                    <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group mb-3 light">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                            </div>
                            <input type="text" name="title" class="form-control input_color" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" required>
                        </div>

                        <div class="input-group mb-3 light">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                            </div>
                            <input type="text" name="description" class="form-control input_color"
                                aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>

                        <div class="input-group light">
                            <input type="number" name="price" class="form-control input_color"
                                aria-label="Amount (to the nearest dinar)" placeholder="put the price" required>
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                            </div>
                        </div>
                        <br>

                        <div class="input-group mb-3 light">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" required>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <br>

                        <div>
                            <select class="form-select select_color" name="category" aria-label="Default select example" required>
                                <option selected>Chose the University</option>
                                @foreach ($Category as $Category)
                                <option value="{{$Category->category_name}}">{{$Category->category_name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <br>

                        <div><input type="submit" class="btn btn-primary" name="submit" value="Add product"></div>
                    </form>
                </div>

            </div>
        </div>

        <!-- container-scroller -->

        @include('admin.js')
</body>

</html>
