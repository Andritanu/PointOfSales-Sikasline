@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add inventory</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('barang.index') }}"> Back</a>
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
   
<form action="{{ route('barang.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Item:</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Item">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Brand ID:</strong>
                <select name="kd_merek" class="form-control">
                    @foreach($merek as $m)
                    <option value="{{$m->kd_merek}}" name="kd_merek">{{$m->merek}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group ">
                <strong>Distributor ID:</strong>
                <select name="kd_distributor" class="form-control">
                    @foreach($distributor as $d)
                    <option value="{{$d->kd_distributor}}" name="kd_distributor">{{$d->nama_distributor}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of entry:</strong>
                <input type="date" name="tanggal_masuk" class="form-control" placeholder="Date of entry">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="harga_barang" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock:</strong>
                <input type="text" name="stok_barang" class="form-control" placeholder="Stock">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Item info:</strong>
                <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Item info"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection