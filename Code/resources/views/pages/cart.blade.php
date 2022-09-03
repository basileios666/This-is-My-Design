    @extends('layouts.Master')

    @section('title', 'Cart')

    @section('content')
        <!-- cart -->
        <div class="cart-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="cart-table-wrap">
                            <table class="cart-table">
                                <thead class="cart-table-head">
                                    <tr class="table-head-row">
                                        <th class="product-remove">Delete</th>
                                        <th class="product-image">Product Image</th>
                                        <th class="product-name">Name</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-body-row">
                                        <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a>
                                        </td>
                                        <td class="product-image"><img src="assets/img/products/3.jpg" alt=""></td>
                                        <td class="product-name">Book</td>
                                        <td class="product-price">$85</td>
                                        <td class="product-quantity"><input type="number" placeholder="0"></td>
                                        <td class="product-total">1</td>
                                    </tr>
                                    <tr class="table-body-row">
                                        <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a>
                                        </td>
                                        <td class="product-image"><img src="assets/img/products/6.jpg" alt=""></td>
                                        <td class="product-name">Calculator</td>
                                        <td class="product-price">$70</td>
                                        <td class="product-quantity"><input type="number" placeholder="0"></td>
                                        <td class="product-total">1</td>
                                    </tr>
                                    <tr class="table-body-row">
                                        <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a>
                                        </td>
                                        <td class="product-image"><img src="assets/img/products/1.jpg" alt=""></td>
                                        <td class="product-name">Book</td>
                                        <td class="product-price">$35</td>
                                        <td class="product-quantity"><input type="number" placeholder="0"></td>
                                        <td class="product-total">1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="total-section">
                            <table class="total-table">
                                <thead class="total-table-head">
                                    <tr class="table-total-row">
                                        <th>Total</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="total-data">
                                        <td><strong>Subtotal: </strong></td>
                                        <td>$500</td>
                                    </tr>
                                    <tr class="total-data">
                                        <td><strong>Shipping: </strong></td>
                                        <td>$45</td>
                                    </tr>
                                    <tr class="total-data">
                                        <td><strong>Total: </strong></td>
                                        <td>$545</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="cart-buttons">
                                <a href="/cart" class="boxed-btn">Update Cart</a>
                                <a href="/checkout" class="boxed-btn black">Check Out</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end cart -->
    @endsection
