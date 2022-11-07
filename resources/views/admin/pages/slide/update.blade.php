@extends('admin.index')
@section('content')
<section>
  @if($errors->any())
  {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
    <form method="post" action="{{ route('post.update.slide',$slide) }}" style="box-shadow: 2px 2px 5px #8080807d;
            padding: 20px;"   enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="slide Title" value="{{ $slide->title }}">
        </div>

        <div class="form-row">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="slide description" value="{{ $slide->description }}">
        </div>
        <div class="form-row">
            <label for="title">Link</label>
            <input type="text" name="link" class="form-control" id="link" placeholder="slide Link" value="{{ $slide->link }}">
        </div>
        <div class="form-row">
              <label for="image">Image</label>
              <input type="file" class="form-control" id="image" name="image">
              <img src="{{ asset($slide->image) }}" width="200">
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
            Update slide
        </button>
      </form>
</section>
@endsection