@extends('layouts.app')
@section('title')
    Gap Assesment Kompetensi
@endsection

@section('breadcrumb')
    @parent
    <li>Gap Assesment Kompetensi</li>
    <li>Saran</li>
@endsection

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Pegawai</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <ul class="products-list product-list-in-box ">
                <li class="item">
                    <div class="product-img">
                        <a href="javascript:void(0)" class="product-title">Nama </a>
                        <span class="product-description">
                            @isset($nip)
                                {{ $nip->nama }}
                            @endisset

                            @empty($nip)
                                <p></p>
                            @endempty
                        </span>
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="javascript:void(0)" class="product-title">NIP </a>
                        <span class="product-description">
                            @isset($nip)
                                {{ $nip->nip }}
                            @endisset

                            @empty($nip)
                                <p></p>
                            @endempty
                        </span>
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="javascript:void(0)" class="product-title">Jabatan </a>
                        <span class="product-description">
                            @isset($nip)
                                {{ $nip->kode_jabatan }} - {{ $nip->nama_jabatan }}
                            @endisset

                            @empty($nip)
                                <p></p>
                            @endempty
                        </span>
                    </div>
                </li>

                <li class="item">
                    <div class="product-img">
                        <a href="javascript:void(0)" class="product-title">Perangkat Daerah </a>
                        <span class="product-description">
                            @isset($nip)
                                {{ $nip->kode_opd }} - {{ $nip->nama_opd }}
                            @endisset

                            @empty($nip)
                                <p></p>
                            @endempty
                        </span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Saran</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div id="saran-form">
                <form class="form-horizontal">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <input type="hidden" id="id_gap_assesments" name="id_gap_assesments" value="{{ $nip->id }}">

                    {{-- <input type="hidden" id="nip" name="nip" value="{{ $nip->nip }}">
                    <input type="hidden" id="nama" name="nama" value="{{ $nip->nama }}">
                    <input type="hidden" id="kode_jabatan" name="kode_jabatan" value="{{ $nip->kode_jabatan }}">
                    <input type="hidden" id="nama_jabatan" name="nama_jabatan" value="{{ $nip->nama_jabatan }}">
                    <input type="hidden" id="kode_opd" name="kode_opd" value="{{ $nip->kode_opd }}">
                    <input type="hidden" id="nama_opd" name="nama_opd" value="{{ $nip->nama_opd }}"> --}}
                    
                    <div class="form-group row">
                        <label for="inputSaran" class="col-sm-2 control-label">Saran Pengembangan</label>
                        <div class="col-sm-5">
                            <select type="text" class="form-control" id="id_saran" name="id_saran" autofocus required>
                                <option value=""></option>
                                @forelse ($dataSaran as $list)
                                    <option value="{{ $list['id'] }}">{{ $list['nama_saran_pengembangan'] }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <a onclick="addSaran()" class="btn btn-primary mb-2">Tambah</a>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-hover" id="table-saran">
                </tfoot>
                <thead>
                    <tr>
                        <th width="30">No</th>
                        <th>Kode</th>
                        <th>Saran Pengembangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">


        //tambah data saran
        function addSaran(){
            $.ajax({
                url: "/gap-assesment/store-saran",
                type: "POST",
                data: $('#saran-form form').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[ name= csrf-token]').attr('content')
                },
                success: function(data) {
                    toastr.success('Berhasil Membuat Data !');
                    $('#table-saran').DataTable().ajax.reload();
                },
                error: function() {
                    toastr.warning("Tidak dapat menyimpan data !");
                }
            });
            return false;
        }

        function deleteDataSaran(id){
            if (confirm("Apakah yakin data akan dihapus ?")) {
                $.ajax({
                    url: "/gap-assesment/delete-saran/" + id,
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[ name= csrf-token]').attr('content')
                    },
                    data: {
                        '_method': 'DELETE',
                        '_token': $('meta[ name = csrf-token]').attr('content')
                    },
                    success: function(data) {
                        toastr.success('Data berhasil dihapus !');
                        $('#table-saran').DataTable().ajax.reload();
                    },
                    error: function() {
                        toastr.warning("Tidak dapat menghapus data !");
                    }
                });
            }
        }
    </script>
@endsection
