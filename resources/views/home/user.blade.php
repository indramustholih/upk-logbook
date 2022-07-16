@extends('layouts.app')

@section('title')
    Dasboard
@endsection

@section('breadcrumb')
    @parent
    <li>
        <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i>
            Dashboard
        </a>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    Pegawai
                </div>
                
                <div class="box-body table-responsive p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>Tahun</th>
                                <th>Nama Kegiatan</th>
                                <th>Realisasi</th>
                                <th>Target</th>
                                <th>Satuan</th>
                                <th width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                {{-- user --}}
                <div class="inner">
                    <h3>
                        {{ $user }}
                    </h3>
                    <p>User</p>
                </div>

                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
            </div>
        </div>
    </div> -->
@endsection

@section('script')
    <script type="text/javascript">

    </script>
@endsection
