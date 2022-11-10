<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin/style5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1> Mroo</h1>
            </div>

            <ul class="list-unstyled components">
                <li  class="active">
                    <a href="{{ route('admin.index') }}">
                        <i class='fas fa-tachometer-alt'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#orderSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class='fas fa-shopping-bag'></i> 
                        <span>Orders</span>
                    </a>
                    <ul class="collapse list-unstyled" id="orderSubmenu">
                        <li>
                            <a href="{{ route('showCod.order') }}" class="hello">COD</a>
                        </li>
                        <li>
                            <a href="{{ route('paypal.order') }}">Paypal</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#productSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class='fas fa-boxes'></i>
                        <span>Products</span>
                    </a>
                    <ul class="collapse list-unstyled" id="productSubmenu">
                        <li>
                            <a href="{{ route('add.product') }}">
                                <i class='fas fa-plus-circle'></i>
                                Add Product
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('edit.product') }}">
                                <i class='fas fa-edit'></i> 
                                Edit Products
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#categorySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class='fas fa-align-right'></i>
                        <span>Categories</span>
                    </a>
                    <ul class="collapse list-unstyled" id="categorySubmenu">
                        <li>
                            <a href="{{ route('add.category') }}">
                                <i class='fas fa-plus-circle'></i>
                                Add category
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('edit.category') }}">
                                <i class='fas fa-edit'></i>
                                Edit Categories
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#slideSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class='fas fa-image'></i> 
                        <span>Sliders</span>
                    </a>
                    <ul class="collapse list-unstyled" id="slideSubmenu">
                        <li>
                            <a href="{{ route('add.slide') }}">
                                <i class='fas fa-plus-circle'></i>
                                Add New Slide
                        </a>
                        </li>
                        <li>
                            <a href="{{ route('add.offer') }}">
                                <i class='fas fa-plus-circle'></i>
                                Add New Offer
                        </a>
                        </li>
                        <li>
                            
                            <a href="{{ route('edit.slide') }}">
                                <i class='fas fa-edit'></i> 
                                Edit Slides
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#brandSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class='fas fa-align-right'></i>
                        <span>Brands</span>
                    </a>
                    <ul class="collapse list-unstyled" id="brandSubmenu">
                        <li>
                            <a href="{{ route('add.brand') }}">
                                <i class='fas fa-plus-circle'></i>
                                Add brand
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('index.brand') }}">
                                <i class='fas fa-edit'></i>
                                all brand
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('admin.logout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>