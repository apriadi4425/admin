@extends('layout/root')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">List Artikel {{ str_replace('Bagian','',$kategori) }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">List Artikel</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col-md-12 -->
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0">Berita {{ $kategori }} : Jumlah = {{ $beritas->total() }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th width="20px">No</th>
                                            <th width="60%">Judul</th>
                                            <th>Tanggal</th>
                                            <th>Penulis</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $number = ($beritas->currentPage()-1)* $beritas->perPage() + 1;
                                            $no = 0;

                                        @endphp
                                        @foreach ($beritas as $berita)
                                            <tr>
                                                <td>
                                                    {{ $number++ }}
                                                </td>
                                                <td>{{ $berita->judul }} <br></td>
                                                <td>{{ tanggal($berita->tanggal) }} <br></td>
                                                <td>{{ $berita->post_by }} <br></td>
                                                <td>-</td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                              <br/>
                                {{ $beritas->links() }}
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection
