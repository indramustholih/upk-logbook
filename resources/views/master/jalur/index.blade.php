@extends('layouts.app')
@section('title')
    Jalur Pelatihan
@endsection

@section('breadcrumb')
    @parent
    <li>Jalur Pelatihan</li>
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
                                <th>Bentuk Pelatihan</th>
                                <th>Jalur Pelatihan</th>
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
    @include('master.jalur.form')
@endsection

@section('script')
    <script type="text/javascript">
        var table, save_method;

        $(function() {
            //menampilkan data dengan plugin DataTable
            table = $('.table').DataTable({
                processing: true,
                ajax: {
                    url: "{{ route('jalur.data') }}",
                    type: "GET"
                }
            });

            //menyimpan data form tambah / edit beserta validasinya
            $('#modal-form form').validator().on('submit', function(e) {
                if (!e.isDefaultPrevented()) {
                    var id = $('#id').val();
                    var message;
                    if (save_method == "add") {
                        url = "{{ route('jalur.store') }}";
                        message = 'Data berhasil ditambah !';
                    } else {
                        url = "jalur/" + id;
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
        });

        //onchange bentuk
        function onchanges(e) {
            kode_bentuk = e.target.value
            $.ajax({
                url: "jalur/bentuk/" + kode_bentuk,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                    $('#bentuk_pelatihan').val(data.bentuk_pelatihan);
                    $('#id_bentuk').val(data.id);
                },
                error: function() {
                    toastr.warning("Tidak dapat menampilkan data !");
                }
            });
        }

        //menapilkan form tambah
        function addForm() {
            save_method = "add";
            $('input[name = _method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Tambah Jalur Pelatihan');
        }

        //menampilkan form edit dan menampilkan data pada form tersebut
        function editForm(id) {
            save_method = "edit";
            $('input[name=_method]').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "jalur/" + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Jalur Pelatihan');
                    $('#id').val(data.id);
                    $('#id_bentuk').val(data.id_bentuk);
                    $('#bentuk_pelatihan').val(data.bentuk_pelatihan);
                    $('#kode_bentuk').val(data.kode_bentuk);
                    $('#kode').val(data.kode);
                    $('#jalur_pelatihan').val(data.jalur_pelatihan);
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
                    url: "jalur/" + id,
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
