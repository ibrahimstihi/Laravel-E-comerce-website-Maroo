@extends('admin.index')
@section('content')
<section>
  @if($errors->any())
  {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
    <form method="post" action="{{ route('post.update.product',$product) }}" style="box-shadow: 2px 2px 5px #8080807d;
            padding: 20px;"   enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Product Name" value="{{ $product->title }}" name="title">
        </div>
        <div class="form-row">
          <label for="inputAddress">Description</label>
          <textarea name="description" class="form-control" id="Description" placeholder="Product Details" rows="3" name="description">
            {{ $product->description }}
          </textarea>
        </div>
        <div class="form-row">
            <label for="inputState">Category</label>
            <select id="inputState" class="form-control" name="category_id">
              <option selected value="{{ $product->category->id }}">{{ $product->category->title }}</option>
              @foreach($categories as $category)
                 @if ( $product->category->id != $category->id)
                    <option value="{{ $category->id }}">{{ $category->title }}</option> 
                 @endif   
              @endforeach
            </select>
          </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Old Price (dh)</label>
            <input type="number" class="form-control" id="inputCity" value="{{ $product->old_price }}" name="old_price">
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Price Now</label>
            <input type="number" class="form-control" id="inputCity" value="{{ $product->price }}" name="price">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="image">Image</label>
              <input type="file" multiple class="form-control" id="image" name="image">
              
            </div>
            <div class="form-group col-md-6" >
                <label for="inputZip">Stock</label>
                <input type="number" class="form-control" id="inStock" name="inStock" value="{{ $product->inStock }}">
            </div>
        </div>
        <div class="form-row">
          @foreach ($product->product_images as $image)
             <img src="{{ asset($image->image) }}" width="100" style="margin-left:10px;border:1px solid gray;border-radius:5px">
          @endforeach  
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
            Update Product
        </button>
      </form>
</section>
@endsection