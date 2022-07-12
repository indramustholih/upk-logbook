@extends('layouts.app')
@section('title')
    Gap Kinerja - Tambah Saran Pengembangan
@endsection

@section('breadcrumb')
    @parent
    <li>Gap Kinerja</li>
    <li>Tambah Saran Pengembangan</li>
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

                <li class="item">
                    <div class="product-img">
                        <a href="javascript:void(0)" class="product-title">Tahun </a>
                        <span class="product-description">
                            @isset($tahun)
                                {{ $tahun }} 
                            @endisset

                            @empty($tahun)
                                <p></p>
                            @endempty
                        </span>
                    </div>
                </li>
                <li class="item">
                    <a href="{{ route('gap-kinerja.index') }}" class="btn btn-warning mb-2"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i></i> Kembali</a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Saran Pengembangan --}}
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Saran Pengembangan</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div id="saran">
                <form class="form-inline form-group">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <input type="hidden" id="nip" name="nip" value="{{ $nip->nip }}">
                    <input type="hidden" id="kode_jabatan" name="kode_jabatan" value="{{ $nip->kode_jabatan }}">
                    <input type="hidden" id="kode_opd" name="kode_opd" value="{{ $nip->kode_opd }}">
                    <input type="hidden" id="tahun" name="tahun" value="{{ $tahun }}">
                    <select type="text" class="form-control" id="id_saran" name="id_saran" style="width:300px;" autofocus
                        required>
                        <option value="" selected disabled>- Pilih -</option>
                        @forelse ($saranPengembangan as $list)
                            <option value="{{ $list->id }}">{{ $list->nama_saran_pengembangan }}</option>
                        @empty
                        @endforelse
                    </select>
                    <a onclick="addSaran()" class="btn btn-primary mb-2"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah</a>
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
        // var tabelSaran
        var nip = $('#nip').val();
        var kode_jabatan = $('#kode_jabatan').val();
        var kode_opd = $('#kode_opd').val();
        var tahun = $('#tahun').val();

        $(document).ready(function() {
            // saran
            $('#table-saran').DataTable({
                processing: true,
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'Todos']
                ],
                ajax: {
                    url: "/gap-kinerja/list-saran/" + nip + "/" + kode_opd + "/" + kode_jabatan + "/" + tahun,
                    type: "GET"
                }
            });
        });

        //menyimpan data saran
        function addSaran() {
            $.ajax({
                url: "/gap-kinerja/add-saran",
                type: "POST",
                data: $('#saran form').serialize(),
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

        //menghapus data saran
        function deleteDataSaran(id) {
            if (confirm("Apakah yakin data akan dihapus ?")) {
                $.ajax({
                    url: "/gap-kinerja/delete-saran/" + id,
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

