@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row px-xl-5 justify-content-center">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
            <div class="bg-light p-30 mb-5">
                <form action="{{route('register')}}" method="post">
                    @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>First Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="John" name="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="text"  name="email"placeholder="example@email.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Mobile Number</label>
                        <input class="form-control @error('phone') is-invalid @enderror" type="text" placeholder="+123 456 789" name="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Adresse</label>
                        <input class="form-control @error('ville') is-invalid @enderror" type="text" placeholder="fes bensouda n 12 .." name="ville">
                        @error('ville')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="col-md-12 form-group">
                        <label>Photo personel (optionel)</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Confirm Password</label>
                        <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="confirm Password">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" class="btn btn-primary py-2 px-4">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection