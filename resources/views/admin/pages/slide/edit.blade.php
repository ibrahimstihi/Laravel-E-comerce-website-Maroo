@extends('admin.index')
@section('content')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Slide Title</th>
        <th scope="col">Description</th>
        <th scope="col">Offer/slide</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($slides as $slide)
        <tr>
            <th scope="row">{{ $slide->id }}</th>
            <td><img src="{{ asset($slide->image) }}" width="50" height="50" class="img-fluid rounded"></td>
            <td>{{ $slide->title }}</td>
            <td>{{  Str::limit($slide->description,30)}}</td>
            <td>
                @if($slide->is_offer)
                  <span class="text-primary">is offer</span>
                @else
                <span>is slide</span>
                @endif
            </td>
            <td class="action d-flex align-items-center">  
                <a href="{{ route('update.slide',$slide) }}">
                    <i class='fas fa-edit text-primary'></i>
                </a>
                <form action="{{ route('delete.slide',$slide) }}" method="post">
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