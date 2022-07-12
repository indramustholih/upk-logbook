@extends('layouts.app')
@section('title')
    Nama Pelatihan
@endsection

@section('breadcrumb')
    @parent
    <li>Nama Pelatihan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a onclick="addForm()" class="btn btn-success">
                        <i class="fa fa-plus-circle"></i>
                        Tambah
                    </a>
                </div>

                <div class="box-body table-responsive p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>Jenis Pengembangan Kompetensi</th>
                                <th>Bentuk Pelatihan</th>
                                <th>Jalur Pelatihan</th>
                                <th>Nama Pelatihan</th>
                                <th>Keterangan</th>
                                <th width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    @include('master.nama.form')
@endsection

@section('script')
    <script type="text/javascript">
        var table, save_method;

        $(function() {
            //menampilkan data dengan plugin DataTable
            table = $('.table').DataTable({
                processing: true,
                ajax: {
                    url: "{{ route('nama.data') }}",
                    type: "GET"
                }
            });

            //menyimpan data form tambah / edit beserta validasinya
            $('#modal-form form').validator().on('submit', function(e) {
                if (!e.isDefaultPrevented()) {
                    var id = $('#id').val();
                    var message;
                    if (save_method == "add") {
                        url = "{{ route('nama.store') }}";
                        message = 'Data berhasil ditambah !';
                    } else {
                        url = "nama/" + id;
                        message = 'Data berhasil diubah !';
                    }
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: $('#modal-form form').serialize(),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[ name= csrf-token]').attr('content')
                        },
                        success: function(data) {
                            $(this).children('input[type=submit]').attr('disabled', 'disabled');
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            toastr.success(message);
                        },
                        error: function() {
                            toastr.warning("Tidak dapat menyimpan data !");
                        }
                    });
                    e.preventDefault();
                    return false;
                }
            });
            // onchange
            $("#jabatan").chained("#perangkat_daerah");
            $("#jalur").chained("#bentuk");
        });

        //menapilkan form tambah
        function addForm() {
            save_method = "add";
            $('input[name = _method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Tambah Nama Pelatihan');
            $("#jalur").prop("disabled", true);
        }

        //menampilkan form edit dan menampilkan data pada form tersebut
        function editForm(id) {
            save_method = "edit";
            $('input[name=_method]').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "nama/" + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Nama Pelatihan');
                    $('#id').val(data.id);
                    $('#jenis').val(data.id_jenis).change();
                    $('#bentuk').val(data.id_bentuk).change();
                    $('#jalur').val(data.id_jalur).change();
                    $('#kode').val(data.kode).change();
                    $('#nama_pelatihan').val(data.nama_pelatihan);
                    $('#keterangan').val(data.keterangan);
                },
                error: function() {
                    toastr.warning("Tidak dapat menampilkan data !");
                }
            });
        }

        //menghapus data
        function deleteData(id) {
            if (confirm("Apakah yakin data akan dihapus ?")) {
                $.ajax({
                    url: "nama/" + id,
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[ name= csrf-token]').attr('content')
                    },
                    data: {
                        '_method': 'DELETE',
                        '_token': $('meta[ name = csrf-token]').attr('content')
                    },
                    success: function(data) {
                        table.ajax.reload();
                        toastr.success('Data berhasil dihapus !');
                    },
                    error: function() {
                        toastr.warning("Tidak dapat menghapus data !");
                    }
                });
            }
        }
    </script>
@endsection
