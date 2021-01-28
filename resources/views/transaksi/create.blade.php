@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Transaction</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('transaksi.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('transaksi.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Item ID:</strong>
                <select name="kd_barang" class="form-control">
                    @foreach($barang as $b)
                    <option value="{{$b->kd_barang}}" name="kd_barang">{{$b->nama_barang}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
                <strong>User ID:</strong>
                <!-- <select name="kd_user" class="form-control">
                    @foreach($user as $u)
                    <option value="{{$u->id}}" name="kd_user">{{$u->name}}</option>
                    @endforeach
                </select> -->
                <input type="text" value="{{auth()->user()->id}}" name="kd_user" class="form-control" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total item:</strong>
                <input type="text" name="jumlah_barang" class="form-control" placeholder="Total item">
            </div>
        </div>
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total price:</strong>
                <input type="text" name="total_harga" class="form-control" placeholder="Total price">
            </div>
        </div> -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="tanggal_beli" class="form-control" placeholder="Date">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection