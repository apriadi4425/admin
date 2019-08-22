@extends('layout/root')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                       Tes
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
                               tes
                            </div>
                            <div class="card-body">
                                <div class="card-body table-responsive p-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="myEditor" id="myEditor" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
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

@section('script')
    <script type="text/javascript">
        $(function() {
            $('#myEditor').froalaEditor({
                toolbarInline: false,
                iframe: true,
                iconsTemplate: 'font_awesome_5',
                imageUploadURL: 'http://pa-kotabaru.go.id/artikel/upload_foto/',

                imageUploadParams: {
                    id: 'myEditor'
                }
            })
        });
    </script>
@endsection
