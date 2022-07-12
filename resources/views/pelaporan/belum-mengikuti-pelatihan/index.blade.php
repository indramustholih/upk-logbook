@extends('layouts.app')
@section('title')
    Pelaporan Belum Mengikuti Pelatihan
@endsection

@section('breadcrumb')
    @parent
    <li>Pelaporan Belum Mengikuti Pelatihan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-hover table-pelaporan">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Organisasi Perangkat Daerah</th>
                                <th>Nama Pelatihan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('pelaporan.belum-mengikuti-pelatihan.form')
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var extensions = {
                "sFilter": "dataTables_filter custom_pelaporan_filter_class",
                "sLength": "dataTables_length custom_pelaporan_length_class"
            }
            // Used when bJQueryUI is false
            $.extend($.fn.dataTableExt.oStdClasses, extensions);
            // Used when bJQueryUI is true
            $.extend($.fn.dataTableExt.oJUIClasses, extensions);
            // datatables
            table = $('.table-pelaporan').DataTable({
                processing: true,
                dom: 'Bfrtip',
                columnDefs: [{
                        targets: 1,
                        className: 'noVis'
                    },
                    {
                        targets: 4,
                        visible: false
                    }
                ],
                buttons: [{
                    extend: 'colvis',
                    columns: ':not(.noVis)',
                }],
            });

            // select dropdown opd
            $.ajax({
                url: "{{ route('gap-standar.opd') }}",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    // opd
                    label = $("<label>").text('Perangakat Daerah').attr({
                        'id': 'label-pelaporan-opd'
                    }).appendTo('.custom_pelaporan_filter_class');

                    select_opd = $('<select>').attr({
                        'id': 'add-pelaporan-opd',
                        'aria-controls': 'DataTables_Table_0'
                    }).addClass('form-control input-sm opd').appendTo('.custom_pelaporan_filter_class');

                    $.each(data, function(i, item) {
                        $('<option/>').attr({
                            'data-number': item.number_opd
                        }).text(item.nama_opd).appendTo(select_opd);
                    });

                    // pelatihan
                    label = $("<label>").text('Jalur Pelatihan').attr({
                        'id': 'label-pelaporan-jalur'
                    }).appendTo('.custom_pelaporan_filter_class');

                    select_pelatihan = $('<select>').attr({
                        'id': 'add-pelaporan-jalur',
                        'aria-controls': 'DataTables_Table_0'
                    }).addClass('form-control input-sm opd').appendTo('.custom_pelaporan_filter_class');

                    $('<option/>').attr({ 'data-number': 'fungsional'}).text("Pelatihan Fungsional").appendTo(select_pelatihan);
                    $('<option/>').attr({ 'data-number': 'kultural'}).text("Pelatihan Sosial Kultural").appendTo(select_pelatihan);
                    $('<option/>').attr({ 'data-number': 'manajerial'}).text("Pelatihan Manajerial").appendTo(select_pelatihan);
                    $('<option/>').attr({ 'data-number': 'teknis'}).text("Pelatihan Teknis").appendTo(select_pelatihan);
                    $('<option/>').attr({ 'data-number': 'lain'}).text("Pengembangan Kompetensi Lainnya").appendTo(select_pelatihan);

                    $("#add-pelaporan-opd").val($("#add-pelaporan-opd option:first").val());
                    $("#add-pelaporan-jalur").val($("#add-pelaporan-jalur option:first").val());
                    table.ajax.url('/laporan-pelatihan/' + $('#add-pelaporan-opd option:selected').attr('data-number') + '/' + $('#add-pelaporan-jalur option:selected').attr('data-number')).load();
                    $('#add-pelaporan-opd').change(function() {
                        table.ajax.url('/laporan-pelatihan/' + $('#add-pelaporan-opd option:selected').attr('data-number') + '/' + $('#add-pelaporan-jalur option:selected').attr('data-number')).load();
                    });

                    $('#add-pelaporan-jalur').change(function() {
                        table.ajax.url('/laporan-pelatihan/' + $('#add-pelaporan-opd option:selected').attr('data-number') + '/' + $('#add-pelaporan-jalur option:selected').attr('data-number')).load();
                    });

                }
            });

            $("a#disabled").on("click", function() {
                $(this).prop("disabled", true);
            });
        });

        function viewForm(nip, kode_jabatan, kode_skpd, pelatihan) {
            $.ajax({
                url: "/laporan-pelatihan/view/" + nip + "/" + kode_jabatan + "/" + kode_skpd + "/" + pelatihan,
                type: "GET",
                dataType: "JSON",

                success: function(data) {
                    $('#modal-form').modal('show');
                    $('.modal-title').text('View Data Mapping Standar');
                    $('#nama').text(data.nipView.nama);
                    $('#nip').text(data.nipView.nip);
                    $('#kode_jabatan').text(data.nipView.kode_jabatan);
                    $('#nama_jabatan').text(data.nipView.nama_jabatan);
                    $('#kode_opd').text(data.nipView.kode_opd);
                    $('#nama_opd').text(data.nipView.nama_opd);

                    // teknis
                    var standar = '';
                    $.each(data.standar, function(key, value) {
                        standar += '<tr>';
                        standar += '<td>' + value.nama_standar + '</td>';
                        standar += '<td>' + value.nama_riwayat_diklat + '</td>';
                        standar += '<td>' + value.status + '</td>';
                        standar += '</tr>';
                    });
                    $('#table-standar-view tbody').append(standar);
                },
                error: function() {
                    toastr.warning("Tidak dapat menampilkan data !");
                }
            });
        }
    </script>
@endsection
