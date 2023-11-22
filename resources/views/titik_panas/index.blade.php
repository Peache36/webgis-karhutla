@extends('layout.master')

@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <a href="{{ route('create.titikpanas') }}">
          <button type="button" class="btn btn-success mb-3">
            Tambah
          </button> 
        </a>
        <div class="row">
            <div class="col">
              @include('layout.message')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                            <table id="table" class="table">
                                <thead>
                                  <tr>
                                      <th style="width: 10px">No</th>
                                      <th class="text-center" >Lokasi Kejadian</th>
                                      <th class="text-center" >Tanggal</th>
                                      <th class="text-center" >Kerusakan</th>
                                      <th class="text-center" >Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($data_titik as $dt )
                                    <tr>
                                      <td>{{ $loop->iteration }}</td>
                                      <td>{{ $dt->lokasi }}</td>
                                      <td>{{ $dt->tanggal }}</td>
                                      <td>{{ $dt->kerusakan }}</td>
                                      <td class="text-center" >
                                        <a href="{{ route('edit.titikpanas',['id'=>$dt->id]) }}">
                                          <button type="button" class="btn btn-sm mr-2 btn-outline-warning mb-2">
                                            <i class="fas fa-edit" ></i> Edit
                                          </button> 
                                        </a>
                                        <form action="{{ route('delete.titikpanas',['id'=>$dt->id]) }}" class=' inline-block'method="POST" onsubmit=" return confirm('Are you sure want to delete this item?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm mr-2 btn-outline-danger d-lg-inline" onclick="confirmDelete('#delete-jabatan')"><i class=" fa fa-trash" ></i> Delete</button>
                                        </form>
                                      </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection



@section('js')

<script>
    $('#table').dataTable( {
  "autoWidth": false,
  "scrollX": true,
  "search": {
    "smart": false
  }
} );

</script>
@endsection