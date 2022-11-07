@extends('admin.index')
@section('content')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
<h2>Products <span>({{ $products->count() }})</span></h2>
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Product name</th>
        <th scope="col">Old Price</th>
        <th scope="col">Product Price</th>
        <th scope="col">Product Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>
            <?php
              foreach ($product->product_images as $image)
              $imagePath = $image
              
            ?>
              <img src="{{ asset($imagePath->image) }}" alt="" width="50">
            </td>
            <td>{{ $product->title }}</td>
            <td><del>{{ $product->old_price }}<del></td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category->title }}</td>
            <td class="d-flex align-items-center">
                <form action="{{ route('delete.product',$product) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">
                        </i><i class='fas fa-trash text-danger'></i>
                    </button>
                </form>
                <a href="{{ route('update.product',$product) }}">
                    <i class='fas fa-edit text-primary'></i>
                </a>
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