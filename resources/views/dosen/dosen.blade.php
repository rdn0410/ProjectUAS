@extends('adminLayout.index')
@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
				<div class="panel-heading">
        <div class="row">
        
          <center> TABEL DOSEN </center><br><br>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
        <th scope="col">nip</th>
        <th scope="col">nama</th>
        <th scope="col">matkul</th>
        <th scope="col">alamat</th>
          <th>action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($dosen as $item)
            
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$item->nip}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->matkul->nama}}</td>
        <td>{{$item->alamat}}</td>
        <td>  <a href="/dosen/edit/{{$item->slug}}" class="btn btn-warning btn-sm">Edit</a>
         
          <form action="/dosen/delete/{{$item->slug}}" method="POST">
            @method('delete')
            @csrf
          <button class="btn">   <i class="lnr lnr-cross"></i> </button>
       
        </form>
        </td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
      </div>
      <div class='row'>
        <a href="/createdosen" class="btn btn-success btn-sm"> create</a>
      </div>
      <div class="row">
        {{$dosen->links('adminLayout.pagination')}}
      </div>
      </div>
      </div>
      </div>
    </div>
   </div>
  </div>
</div>

@stop