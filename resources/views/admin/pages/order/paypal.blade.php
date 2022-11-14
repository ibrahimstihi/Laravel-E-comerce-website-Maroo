@extends('admin.index')
@section('content')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Client phone</th>
        <th scope="col">Client Adrese</th>
        <th scope="col">Product name</th>
        <th scope="col">Product name</th>
        <th scope="col">Quantite</th>
        <th scope="col">Total</th>
        <th scope="col">Delivred</th>
        <th scope="col">Action</th> 
      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        @if($order->paid)
        <tr>
            <th scope="row">{{ $order->id }}</th>
            <td>{{ $order->user->name }}</td>
            <td>{{ $order->user->phone }}</td>
            <td>{{ $order->user->ville }}</td>
            <td>{{ $order->product_name}}</td>
            <td>{{ $order->qty }}</td>
            <td>{{ $order->total }}</td>
            <td >
                @if($order->delivered)
                   <i class='fas fa-check text-success'></i>
                @else
                  <i class='fas fa-times text-danger'></i>
                @endif
            </td>
            <td class="d-flex align-items-center">
                @if(!$order->delivered)
                <form action="{{ route('update.order',$order->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit">
                        <i class='fas fa-truck text-success'></i>
                    </button>
                </form>
                @endif
                <form action="{{ route('delete.order',$order->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">
                        </i><i class='fas fa-trash text-danger'></i>
                    </button>
                </form>
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
<hr>
{{-- <div class="justify-content-center d-flex">
    {!! $products->links() !!}
</div> --}}
@endsection