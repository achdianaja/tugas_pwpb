@extends('layouts/navbar')

@section('navbar')
   
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <p class="">TAMBAH DATA</p>
                </div>
                <div class="card-body">
                    <a href="/index" class="btn btn-outline-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/siswa/store">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}   

                        <div class="form-group">
                            <label class="">Nama</label>
                            <input type="text" name="nama" class="form-control">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label class="">kelas</label>
                            <input name="kelas" class="form-control">

                             @if($errors->has('kelas'))
                                <div class="text-danger">
                                    {{ $errors->first('kelas')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label class="">umur</label>
                            <input name="umur" class="form-control">

                             @if($errors->has('umur'))
                                <div class="text-danger">
                                    {{ $errors->first('umur')}}
                                </div>
                            @endif

                        </div>

                        <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
 
@endsection