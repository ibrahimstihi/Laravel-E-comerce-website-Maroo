@extends('admin.index')
@section('content')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">logo</th>
        <th scope="col">brand name</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($brands as $brand)
        <tr>
            <th scope="row">{{ $brand->id }}</th>
            <td><img src="{{ asset($brand->logo) }}" width="50" height="50" class="img-fluid rounded"></td>
            <td>{{ $brand->title }}</td>
            <td class="action d-flex align-items-center">  
                <form action="{{ route('delete.brand',$brand) }}" method="POST">
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