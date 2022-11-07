@extends('admin.index')
@section('content')
<section class="dashboard-home">
    <div class="dashboard-news" id="new-order">
        <div class="top-side">
            <div>
                <h3>{{ $orders->count() }}</h3>
                <span>New Orders</span>
            </div>
            <div class="news-icon" id="order-icon">
                <i class='fas fa-shopping-bag'></i>  
            </div>
        </div>
        <div class="bottom-side" id="order-info">
            <a href="#">
                More info
                <i class='fas fa-arrow-alt-circle-right' class="icon"></i>
            </a>
        </div>
    </div>
    <div class="dashboard-news" id="new-user">
        <div class="top-side">
            <div>
                <h3>{{ $users->count() }}</h3>
                <span>User Registration</span>
            </div>
            <div class="news-icon" id="user-icon">
                <i class='fas fa-user-check'></i> 
            </div>
        </div>
        <div class="bottom-side" id="user-info">
            <a href="#">
                More info
                <i class='fas fa-boxes' class="icon"></i>
            </a>
        </div>
    </div>
    <div class="dashboard-news" id="balance">
        <div class="top-side">
            <div>
                <h3>{{ $products->count() }}</h3>
                <span>Total Product</span>
            </div>
            <div class="news-icon" id="balance-icon">
                <i class='fas fa-dollar-sign'></i>
            </div>
        </div>
        <div class="bottom-side" id="balance-info">
            <a href="#">
                More info
                <i class='fas fa-arrow-alt-circle-right' class="icon"></i>
            </a>
        </div>
    </div>
    <div class="dashboard-news" id="visitor">
        <div class="top-side">
            <div>
                <h3>404</h3>
                <span>Visitors</span>
            </div>
            <div class="news-icon" id="visitor-icon">
                <i class='fas fa-chart-line'></i>  
            </div>
        </div>
        <div class="bottom-side" id="visitor-info">
            <a href="#">
                More info
                <i class='fas fa-arrow-alt-circle-right'></i>
            </a>
        </div>
    </div>
</section>
@endsection