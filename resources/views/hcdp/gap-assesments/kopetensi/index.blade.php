@extends('layouts.app')
@section('title')
    Gap Assesment Kompetensi
@endsection

@section('breadcrumb')
    @parent
    <li>Gap Assesment Kompetensi</li>
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
                            action="{{ route('gap-assesment.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }} {{ method_field('POST') }}

                            <div class="form-group row">
                                {{-- Import --}}
                                <label for="import" class="col-sm-2 control-label">Import Data</label>
                                <div class="col-sm-4 files color">
                                    <input type="file" id="import" name="import"
                                        accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                </div>

                                <div class="col-sm-2">
                                    <button class="btn btn-primary btn-save" type="submit" id="upload" value="upload"
                                        disabled>
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
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Perangkat Daerah</th>
                                <th>Integritas</th>
                                <th>Kerjasama</th>
                                <th>Komunikasi</th>
                                <th>Orintasi Pada Hasil</th>
                                <th>Pelayanan Publik</th>
                                <th>Pengembangan Diri dan Orang Lain</th>
                                <th>Mengelola Perubahan</th>
                                <th>Pengambilan Keputusan</th>
                                <th>Perekat Bangsa</th>
                                <th>Total</th>
                                <th>Kategori</th>
                                <th>JPM (%)</th>
                                <th>JPM Proyeksi (%)</th>
                                <th>Saran Pengembangan 1</th>
                                <th>Saran Pengembangan 2</th>
                                <th>Saran Pengembangan 3</th>
                                <th>Saran Pengembangan 4</th>
                                <th>Saran Pengembangan 5</th>
                                <th>Saran Pengembangan 6</th>
                                <th>Saran Pengembangan 7</th>
                                <th>Saran Pengembangan 8</th>
                                <th>Saran Pengembangan 9</th>
                                <th>Saran Pengembangan 10</th>
                                <th>Kekuatan 1</th>
                                <th>Kekuatan 2</th>
                                <th>Kekuatan 3</th>
                                <th>Kekuatan 4</th>
                                <th>Kekuatan 5</th>
                                <th>Kekuatan 6</th>
                                <th>Kekuatan 7</th>
                                <th>Kekuatan 8</th>
                                <th>Kekuatan 9</th>
                                <th>Kekuatan 10</th>
                                <th>Saran Penempatan 1</th>
                                <th>Saran Penempatan 2</th>
                                <th>Saran Penempatan 3</th>
                                <th class="text-center">Action</th>
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
                    url: "{{ route('gap-assesment.data') }}",
                    type: "GET"
                },
                dom: 'Bfrtip',
                columnDefs: [{
                        targets: 1,
                        className: 'noVis'
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
                    {
                        targets: 20,
                        visible: false
                    },
                    {
                        targets: 21,
                        visible: false
                    },
                    {
                        targets: 22,
                        visible: false
                    },
                    {
                        targets: 23,
                        visible: false
                    },
                    {
                        targets: 24,
                        visible: false
                    },
                    {
                        targets: 25,
                        visible: false
                    },
                    {
                        targets: 26,
                        visible: false
                    },
                    {
                        targets: 27,
                        visible: false
                    },
                    {
                        targets: 28,
                        visible: false
                    },
                    {
                        targets: 29,
                        visible: false
                    },
                    {
                        targets: 30,
                        visible: false
                    },
                    {
                        targets: 31,
                        visible: false
                    },
                    {
                        targets: 32,
                        visible: false
                    },
                    {
                        targets: 33,
                        visible: false
                    },
                    {
                        targets: 34,
                        visible: false
                    },
                    {
                        targets: 35,
                        visible: false
                    },
                    {
                        targets: 36,
                        visible: false
                    },
                    {
                        targets: 37,
                        visible: false
                    },
                    {
                        targets: 38,
                        visible: false
                    },
                    {
                        targets: 39,
                        visible: false
                    },
                    {
                        targets: 40,
                        visible: false
                    }
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
                    url: "gap-assesment/" + id,
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
