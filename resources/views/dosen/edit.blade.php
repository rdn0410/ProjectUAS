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
                <form action="/dosen/update/{{$dosen->slug}}" method="POST">
                  @method('patch')
                @csrf
                 {{-- nip --}}
                 <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" value="{{$dosen->nip}}">
                </div>
                  {{-- nama --}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$dosen->nama}}">
                  </div>
                  {{-- alamat --}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$dosen->alamat}}">
                  </div>
                  {{-- pilih matkul --}}
                  <div class="form-group">
                    <label>Pilih Mata Kuliah</label>
                    <select class="custom-select" id="id_matkul" name="id_matkul">
                      <option value="0" @if($dosen->matkul_id == '0') selected @endif> Pilih Matkul </option>
                      <option value="1" @if($dosen->matkul_id == '1') selected @endif> TBO</option>
                      <option value="2" @if($dosen->matkul_id == '2') selected @endif> PABP</option>
                      <option value="3" @if($dosen->matkul_id == '3') selected @endif> KI</option>
                      <option value="4" @if($dosen->matkul_id == '4') selected @endif> PWEB</option>
                      <option value="5" @if($dosen->matkul_id == '5') selected @endif> KCB</option>
                    
                    </select>
                  </div>
              <button type="submit" class="btn btn-warning btn-sm">Update</button>
        </form>
								</div>
							</div>
        </div>
        </div>
        </div>
        </div>
        </div>
@stop
