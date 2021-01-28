@extends('layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Item  Edit</h2>
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
  
    <form action="{{ route('barang.update',$barang->kd_barang) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Item:</strong>
                <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" placeholder="Nama Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Buy Price:</strong>
                <input type="text" name="harga_beli" value="{{ $barang->harga_beli }}" class="form-control" placeholder="Harga Beli">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div>
                <strong>Brand ID</strong>
                <select name="kd_merek" class="form-control">
                    @foreach($merek as $m)
                    <option value="{{$m->kd_merek}}" name="kd_merek">{{$m->merek}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Distributor ID:</strong>
                <select name="kd_distributor" class="form-control">
                    @foreach($distributor as $d)
                    <option value="{{$d->kd_distributor}}" name="kd_distibutor">{{$d->nama_distributor}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Of Entry:</strong>
                <input type="date" name="tanggal_masuk" value="{{ $barang->tanggal_masuk }}" class="form-control" placeholder="Tanggal Masuk">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="harga_barang" value="{{ $barang->harga_barang }}" class="form-control" placeholder="Harga Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock:</strong>
                <input type="text" name="stok_barang" value="{{ $barang->stok_barang }}" class="form-control" placeholder="Stok Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Item Info:</strong>
                <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Keterangan">{{ $barang->keterangan }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
   
    </form>
@endsection