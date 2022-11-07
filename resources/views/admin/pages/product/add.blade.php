@extends('admin.index')
@section('content')
<section>
  @if($errors->any())
  {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
    <form action="{{ route('store.product') }}" method="post"style="box-shadow: 2px 2px 5px #8080807d;
    padding: 20px;" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Product Name">
        </div>
        <div class="form-row">
          <label for="inputAddress">Description</label>
          <textarea name="description" class="form-control" id="Description" placeholder="Product Details" rows="3"></textarea>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Price (dh)</label>
            <input type="number" class="form-control" id="inputCity" name="price">
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Category</label>
            <select id="inputState" class="form-control" name="category_id">
              @foreach ($categories as $category)
                 <option value="{{ $category->id }}">{{ $category->title }}</option>
              @endforeach
              
            </select>
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Image</label>
              <input type="file" class="form-control" id="inputCity" name="image[]" multiple>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Stock</label>
                <input type="number" class="form-control" id="inStock" name="inStock" name="inStock">
            </div>
        </div>
        
        <button type="submit"  style="
              background-color: #FFD333;
              width: 100%;
              padding: 12px;
              border-radius: 5px;
              box-shadow: 2px 2px 5px #8080807d;
              color: #3D464D;
            ">
            <i class='fas fa-plus-circle'></i>
            Add Product
        </button>
      </form>
</section>
@endsection