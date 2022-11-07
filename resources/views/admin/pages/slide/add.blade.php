@extends('admin.index')
@section('content')
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