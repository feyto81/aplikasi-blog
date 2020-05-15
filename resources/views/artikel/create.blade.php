@extends('layouts.app')
  @push('customcss')
  <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endpush
  @section('title','Artikel')
  @section('page-title','Artikel')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Add New Artikel

      </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="{{ route('artikel.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
          <label>Judul Artikel</label>
          <input type="text" class="form-control" name="judul">
        </div>
        <div class="form-group">
          
          <label>Gambar</label>
          <input type="file" class="form-control" name="gambar">
        </div>
        <div class="form-group">
          <label>Kategori Artikel</label>
          <select name="categoris_id" class="form-control">
              @foreach ($category as $item)
                <option value={{$item->id}}>{{$item->nama_kategori}}</option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
          
          <label>Isi Artikel</label>
           <textarea name="body" id="editor1" class="textarea" placeholder="Place some text here"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
          </textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Tambah Artikel</button>
          <a href="{{route('artikel.index')}}" class="btn btn-danger">Kembali</a>
        </div>

      </form>
    </div>
  </div>
</div>
  <!-- /.box -->
  @endsection
  @push('datatables')
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      //CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>
  @endpush