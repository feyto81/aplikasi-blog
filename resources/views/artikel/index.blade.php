@extends('layouts.app')
@push('customcss')
<script src="{{ asset('backend/plugins/datatables/dataTables.bootstrap.css') }}"></script>
@endpush
  @section('title','Artikel')
  @section('page-title','Artikel')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Artikel</h3>
      <div class="pull-right">
          <a href="{{route('artikel.create')}}" class="btn btn-info">Tambah Data</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Gambar</th>
          <th>Nama Kategori</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
          @foreach($artikel as $row)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->judul}}</td>
                    @if($row->gambar==null)
                      <td>Gambar Tidak Ada</td>
                    @else
                    <td><img src="{{asset('uploads/'.$row->gambar)}}" width="50px" height="50px" ></td>
                    @endif
                    <td>{{$row->Kategori->nama_kategori}}</td>
                    <td>
                        <a href="{{route('artikel.edit',$row->id)}}" class="btn btn-info">Edit</a>

                        <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-danger">
                                <span class="fa fa-trash"></span>
                                <form action="{{route('artikel.destroy',$row->id)}}" method="POST">
                                     @csrf
                                     @method('DELETE')
                                </form>
                         </td>
                </tr>
                @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  @push('datatables')
  <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backend/plugins/datatables/datatables.bootstrap.min.js') }}"></script>
  @endpush
  @push('customdatatables')
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
  @endpush
  @endsection