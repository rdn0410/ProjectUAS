{{-- @extends('adminLayout.index')
@section('content')

<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <div class="panel">
        <div class="panel-heading">
            <h3> <center> INI HALAMAN CREATE DOSEN </center><br><br> </h3>
            <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create data Dosen</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/createdosen/store">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">NIP</label>
          <input type="text" class="form-control" id="nip" name="nip">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">address</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="form-group">
          <label>Pilih Mata Kuliah</label>
          <select class="custom-select" id="id_matkul" name="id_matkul">
            <option value="0"> </option>
            @foreach ($mk as $item)
            <option value="{{$item->id}}">{{$item->nama}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <!-- /.card-body -->
      
      <div class="card-footer">
          <button type="submit" class="btn btn-primary"> Submit</button>
      </div>
    </form>
    </div>
        </div>
        </div>
        </div>
        </div>
      </div>
    </div>
</div>

@stop --}}


@extends('adminLayout.index')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
									<h5 class="panel-title"><b><center>INI HALAMAN CREATE DOSEN</center></b></h5>
                </div>
                <div class="card-header">
                  <h3 class="card-title">Create data Dosen</h3>
                </div>
								<div class="panel-body">
                <form action="/createdosen/store" method="POST">
                @csrf
                 {{-- nip --}}
                 <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip">
                </div>
                  {{-- nama --}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                  {{-- alamat --}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                  </div>
                  {{-- pilih matkul --}}
                  <div class="form-group">
                    <label>Pilih Mata Kuliah</label>
                    <select class="custom-select" id="id_matkul" name="id_matkul">
                      <option value="0"> </option>
                      @foreach ($mk as $item)
                      <option value="{{$item->id}}">{{$item->nama}}</option>
                      @endforeach
                    </select>
                  </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
								</div>
							</div>
        </div>
        </div>
        </div>
        </div>
        </div>
@stop
