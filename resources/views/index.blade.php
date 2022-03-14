@extends('layouts/head')

@section('head')
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light h2">Welcome</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-withe p-3" href="siswa/tambah">Tambah</a>
                    <a class="list-group-item list-group-item-action list-group-item-withe p-3" href="/">Kembali</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-outline-primary" id="sidebarToggle">Slide</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid wrapper">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th >nama</th>
                                <th >alamat</th>
                                <th >umur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->kelas }}</td>
                                <td>{{ $p->umur }}</td>    
                                <td><a href="/siswa/delet/{{ $p->id }}" class="btn btn-danger">Delete</a></td>
                                <td><a href="/siswa/edit/{{ $p->id }}" class="btn btn-warning">Edit</a></td>    
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </body>
    @endsection



