@extends('layouts.app')
@section('title')
    Master Kegiatan
@endsection

@section('breadcrumb')
    @parent
    <li>Master Kegiatan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <!-- <div class="row input-daterange">
                        <div class="col-md-4">
                            <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />
                        </div>
                        <div class="col-md-4">
                            <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                            <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                        </div>
                    </div> -->
                    <br/>
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
    @include('kegiatan.master-kegiatan.form')
@endsection

@section('script')
    <script type="text/javascript">
        var table, save_method;
        
        $('.select2').select2();

        $("#id_kegiatan_jabatan").change(function () {
            var nama_kegiatan = $("#kegiatan-"+this.value).data('namakegiatan');
            var angka_kredit = $("#kegiatan-"+this.value).data('angkakredit');
            var output = $("#kegiatan-"+this.value).data('output');
            var satuan = $("#kegiatan-"+this.value).data('satuan');
            var mutu = $("#kegiatan-"+this.value).data('mutu');
            var waktu = $("#kegiatan-"+this.value).data('waktu');
            var biaya = $("#kegiatan-"+this.value).data('biaya');

            $("#nama_kegiatan").val(nama_kegiatan);
            $("#angka_kredit").val(angka_kredit);
            $("#output").val(output);
            $("#satuan").val(satuan);
            $("#mutu").val(mutu);
            $("#waktu").val(waktu);
            $("#biaya").val(biaya);
        });

        $(function() {
            //menampilkan data dengan plugin DataTable
            table = $('.table').DataTable({
                processing: true,
                ajax: {
                    url: "{{ route('master-kegiatan.data') }}",
                    type: "GET"
                },
                "lengthMenu": [[100, "All", 50, 25], [100, "All", 50, 25]]
            });

            //menyimpan data form tambah / edit beserta validasinya
            $('#modal-form form').validator().on('submit', function(e) {
                if (!e.isDefaultPrevented()) {
                    var id = $('#id').val();
                    var message;
                    if (save_method == "add") {
                        url = "{{ route('master-kegiatan.store') }}";
                        message = 'Data berhasil ditambah !';
                    } else {
                        url = "master-kegiatan/" + id;
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

            $('#refresh').click(function(){
                $('#from_date').val('');
                $('#to_date').val('');
                // if (!e.isDefaultPrevented()) {
                    table.ajax.reload();
                    // e.preventDefault();
                    // return false;
                // }
            });
        });
        

        //menapilkan form tambah
        function addForm() {
            save_method = "add";
            $('input[name = _method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Tambah Master Kegiatan');
        }

        // //menampilkan form edit dan menampilkan data pada form tersebut
        // function editForm(id) {
        //     save_method = "edit";
        //     $('input[name=_method]').val('PATCH');
        //     $('#modal-form form')[0].reset();
        //     $.ajax({
        //         url: "saran/" + id + "/edit",
        //         type: "GET",
        //         dataType: "JSON",
        //         success: function(data) {
        //             $('#modal-form').modal('show');
        //             $('.modal-title').text('Edit Jabatan');
        //             $('#id').val(data.id);
        //             $('#kode').val(data.kode);
        //             $('#nama_saran_pengembangan').val(data.nama_saran_pengembangan);
        //             $('#keterangan').val(data.keterangan);
        //         },
        //         error: function() {
        //             toastr.warning("Tidak dapat menampilkan data !");
        //         }
        //     });
        // }

        // //menghapus data
        // function deleteData(id) {
        //     if (confirm("Apakah yakin data akan dihapus ?")) {
        //         $.ajax({
        //             url: "saran/" + id,
        //             type: "POST",
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[ name= csrf-token]').attr('content')
        //             },
        //             data: {
        //                 '_method': 'DELETE',
        //                 '_token': $('meta[ name = csrf-token]').attr('content')
        //             },
        //             success: function(data) {
        //                 table.ajax.reload();
        //                 toastr.success('Data berhasil dihapus !');
        //             },
        //             error: function() {
        //                 toastr.warning("Tidak dapat menghapus data !");
        //             }
        //         });
        //     }
        // }
    </script>
@endsection
