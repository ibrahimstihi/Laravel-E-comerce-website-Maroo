@extends('admin.index')
@section('content')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Category name</th>
        <th scope="col">Product Number</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td><img src="{{ asset($category->icon) }}" width="50" height="50" class="img-fluid rounded"></td>
            <td>{{ $category->title }}</td>
            <td>{{ $category->products->count() }}</td>
            <td class="action d-flex align-items-center">  
                <a href="{{ route('update.category',$category) }}">
                    <i class='fas fa-edit text-primary'></i>
                </a>
                <form action="{{ route('delete.category',$category) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">
                        <i class='fas fa-trash text-danger'></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
{{-- <div class="justify-content-center d-flex">
    {!! $products->links() !!}
</div> --}}
@endsection