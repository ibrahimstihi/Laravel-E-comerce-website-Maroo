@extends('admin.index')
@section('content')

@section('content')

@if (session()->has('success'))
    <h1>{{ session('success') }}</h1>
@endif
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Dashboard</a>
                    <a class="breadcrumb-item text-dark" href="#">Slides & offers</a>
                    <span class="breadcrumb-item active">Add New Slide</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<section>
@if($errors->any())
  
  <div class="danger alert-danger">
    @foreach($errors->all() as $error)
       <div>
        {{ $error }}
       </div>
    @endforeach
  </div>
  
@endif
    <form method="post" action="{{ route('store.slide') }}" style="box-shadow: 2px 2px 5px #8080807d;
            padding: 20px;"  enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Slide Title" name="title">
        </div>

        <div class="form-row">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="title" placeholder="Slide Description">
        </div>

        <div class="form-row">
            <label for="link">Link</label>
            <input type="text" name="link" class="form-control" id="link" placeholder="Slide link" >
        </div>
        
        <div class="form-row">
              <label for="inputCity">Image</label>
              <input type="file" class="form-control" id="inputCity" name="image">
        </div>
        
        <button type="submit"  style="
              background-color: #FFD333;
              width: 100%;
              padding: 12px;
              border-radius: 5px;
              box-shadow: 2px 2px 5px #8080807d;
              color: #3D464D;
            ">
            <i class='fas fa-edit'></i>
            Add Category
        </button>
      </form>
</section>
@endsection