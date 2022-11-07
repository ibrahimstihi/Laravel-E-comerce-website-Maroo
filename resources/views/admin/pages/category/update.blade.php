@extends('admin.index')
@section('content')
<section>
  @if($errors->any())
  {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
    <form method="post" action="{{ route('post.update.category',$category) }}" style="box-shadow: 2px 2px 5px #8080807d;
            padding: 20px;"   enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Category Title" value="{{ $category->title }}" name="title">
        </div>
        
        <div class="form-row">
              <label for="inputCity">Image</label>
              <input type="file" class="form-control" id="inputCity" name="icon">
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
            Update Category
        </button>
      </form>
</section>
@endsection