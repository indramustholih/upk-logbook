@extends('layouts.app')
@section('title')
    Gap Assesment Potensi
@endsection

@section('breadcrumb')
    @parent
    <li>Gap Assesment Potensi</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body" id="gap">
                    {{-- <div class="row"> --}}
                    {{-- form upload --}}
                    <div class="col-sm-12">
                        <form class="form-horizontal" method="POST" autocomplete="off"
                            action="{{ route('gap-assesment-potensi.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }} {{ method_field('POST') }}

                            <div class="form-group row">
                                {{-- Import --}}
                                <label for="import" class="col-sm-2 control-label">Import Data</label>
                                <div class="col-sm-4 files color">
                                    <input type="file" id="import" name="import"
                                        accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                </div>

                                <div class="col-sm-2">
                                    <button class="btn btn-primary btn-save" type="submit" id="upload" value="upload">
                                        <i class="fa fa-upload"></i> Upload
                                    </button>
                                    <button class="btn btn-warning" type="reset">
                                        <i class="fa fa-remove"></i> Batal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-body table-responsive p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Perangkat Daerah</th>
                                <th>Kemampuan Berpikir Kritis</th>
                                <th>Kemampuan Berpikir Konseptual</th>
                                <th>Kemampuan Berpikir Analistis</th>
                                <th>Sistematika</th>
                                <th>Ketelitian</th>
                                <th>Pengambilan Keputusan</th>
                                <th>Motivasi</th>
                                <th>Kepatuhan Pada Aturan</th>
                                <th>Komitmen</th>
                                <th>Daya Tahan Kerja</th>
                                <th>Asertiv</th>
                                <th>Adaptasi</th>
                                <th>Kemampuan Mengarahkan Orang Lain</th>
                                <th>Relasi Sosial</th>
                                <th>Kemampuan Kerjasama</th>
                                <th>Deskripsi Potensi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        let file;
        var table;

        $(document).ready(function() {
            // datatables
            table = $('.table').DataTable({
                processing: true,
                ajax: {
                    url: "{{ route('gap-assesment-potensi.data') }}",
                    type: "GET"
                },
                dom: 'Bfrtip',
                columnDefs: [{
                        targets: 1,
                        className: 'noVis'
                    },
                    {
                        targets: 5,
                        visible: false
                    },
                    {
                        targets: 6,
                        visible: false
                    },
                    {
                        targets: 7,
                        visible: false
                    },
                    {
                        targets: 8,
                        visible: false
                    },
                    {
                        targets: 9,
                        visible: false
                    },
                    {
                        targets: 10,
                        visible: false
                    },
                    {
                        targets: 11,
                        visible: false
                    },
                    {
                        targets: 12,
                        visible: false
                    },
                    {
                        targets: 13,
                        visible: false
                    },
                    {
                        targets: 14,
                        visible: false
                    },
                    {
                        targets: 15,
                        visible: false
                    },
                    {
                        targets: 16,
                        visible: false
                    },
                    {
                        targets: 17,
                        visible: false
                    },
                    {
                        targets: 18,
                        visible: false
                    },
                    {
                        targets: 19,
                        visible: false
                    },
                ],
                buttons: [{
                    extend: 'colvis',
                    columns: ':not(.noVis)',
                }],
            });
        })

        $('#import').bind("change", function() {
            file = this.files[0];
            document.getElementById("upload").disabled = true;
            viewfile();
        });

        function viewfile() {
            let fileType = file.type;
            if (file.type) {
                let validExtensions = [".csv", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
                    "application/vnd.ms-excel"
                ];
                if (validExtensions.includes(fileType)) {
                    document.getElementById("upload").disabled = false;
                } else {
                    alert("Warning, is invalid, allowed extensions are: .csv, .xls, .xlsx");
                }
            }
        }

        //menghapus data
        function deleteData(id) {
            if (confirm("Apakah yakin data akan dihapus ?")) {
                $.ajax({
                    url: "gap-assesment-potensi/" + id,
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
