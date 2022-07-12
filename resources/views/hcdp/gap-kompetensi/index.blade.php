@extends('layouts.app')
@section('title')
    Gap Kompetensi
@endsection

@section('breadcrumb')
    @parent
    <li>Gap Kompetensi</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <form class="form-horizontal" method="POST" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }} {{ method_field('POST') }}
                        
                        {{-- perangkat daerah --}}
                        <div class="form-group row">
                            <label for="perangkat_daerah" class="col-md-2 control-label">Perangkat Daerah</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control" id="perangkat_daerah" name="perangkat_daerah" onchange="onChangeOPD(event)" autofocus required>
                                    <option value=""></option>
                                    @foreach ( $opd as $list)
                                        <option value="{{$list->number_opd}}">{{$list->nama_opd}}</option>
                                    @endforeach
                                <select>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>

                        {{-- nama jabatan --}}
                        <div class="form-group row">
                            <label for="jabatan" class="col-md-2 control-label">Nama Jabatan</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control" id="jabatan" name="jabatan" autofocus required>
                                    <option value=""></option>
                                <select>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>

                        {{-- nama --}}
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-primary btn-save" type="submit" id="upload" value="upload">
                                    <i class="fa fa-eye"></i> Tampilkan
                                </button>
                                <button class="btn btn-warning" type="reset">
                                    <i class="fa fa-remove"></i> Reset
                                </button>
                            </div>
                        </div>
                    </form>
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
                                <th>Integritas</th>
                                <th>Kerjasama</th>
                                <th>Komunikasi</th>
                                <th>Orintasi Pada Hasil</th>
                                <th>Pelayanan Publik</th>
                                <th>Pengembangan Diri dan Orang Lain</th>
                                <th>Pengambilan Keputusan</th>
                                <th>Perekat Bangsa</th>
                                <th>Total</th>
                                <th>JPM (%)</th>
                                <th>JPM Proyeksi(%)</th>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="30">1</td>
                                <td>198705241998022013</td>
                                <td>Upin</td>
                                <td>Kabid pertanahan</td>
                                <td>DPKP3</td>
                                <td>2.4</td>
                                <td>3.03</td>
                                <td>3.29</td>
                                <td>3.2</td>
                                <td>3.25</td>
                                <td>3.05</td>
                                <td>3.2</td>
                                <td>2</td>
                                <td>26.66</td>
                                <td>98.75%</td>
                                <td>74.06%</td>
                                <td>Conflict Management</td>
                                <td>Situational Leadership</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="30">2</td>
                                <td>198705241998022013</td>
                                <td>Upin</td>
                                <td>Kabid pertanahan</td>
                                <td>DPKP3</td>
                                <td>2.4</td>
                                <td>3.03</td>
                                <td>3.29</td>
                                <td>3.2</td>
                                <td>3.25</td>
                                <td>3.05</td>
                                <td>3.2</td>
                                <td>2</td>
                                <td>26.66</td>
                                <td>98.75%</td>
                                <td>74.06%</td>
                                <td>Conflict Management</td>
                                <td>Situational Leadership</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="30">3</td>
                                <td>198705241998022013</td>
                                <td>Upin</td>
                                <td>Kabid pertanahan</td>
                                <td>DPKP3</td>
                                <td>2.4</td>
                                <td>3.03</td>
                                <td>3.29</td>
                                <td>3.2</td>
                                <td>3.25</td>
                                <td>3.05</td>
                                <td>3.2</td>
                                <td>2</td>
                                <td>26.66</td>
                                <td>98.75%</td>
                                <td>74.06%</td>
                                <td>Conflict Management</td>
                                <td>Situational Leadership</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.table').DataTable({
                dom: 'Bfrtip',
                columnDefs: [
                    { targets: 1, className: 'noVis'},
                    { targets: 8, visible: false },
                    { targets: 9, visible: false },
                    { targets: 10, visible: false },
                    { targets: 11, visible: false },
                    { targets: 12, visible: false},
                    { targets: 13, visible: false },
                    { targets: 14, visible: false },
                    { targets: 15, visible: false },
                    { targets: 16, visible: false },
                    { targets: 17, visible: false },
                    { targets: 18, visible: false },
                    { targets: 19, visible: false },
                    { targets: 20, visible: false },
                    { targets: 21, visible: false },
                    { targets: 22, visible: false },
                    { targets: 23, visible: false },
                    { targets: 24, visible: false },
                    { targets: 25, visible: false }
                ],
                buttons: [{
                    extend: 'colvis',
                    columns: ':not(.noVis)',
                }],
            });
        })

        function onChangeOPD(e){
            var kode_opd;
            kode_opd = e.target.value

            if(kode_opd){
                $.ajax({
                    url: "/gap-kompetensi/jabatan/"+ kode_opd,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data){
                            $('select[name="jabatan"]').empty();
                            $('select[name="jabatan"]').append('<option value=""></option>');
                            $.each(data, function(index, value) {
                                // alert(JSON.stringify(value.jalur_pelatihan));
                                $('select[name="jabatan"]').append('<option value=' + value
                                    .number_jabatan +
                                    '>' + value.nama_jabatan + '</option>');
                            });
                    },
                    error: function () {
                        alert("Tidak dapet menampilkan data");
                    }
                });
            }else{
                $('select[name="jabatan"]').empty();
            }
        }

    </script>
@endsection