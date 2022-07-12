@extends('layouts.app')
@section('title')
    Gap Standar Kompetensi Jabatan
@endsection

@section('breadcrumb')
    @parent
    <li>Gap Standar Kompetensi Jabatan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-hover table-standar">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th width="20%">Organisasi Perangkat Daerah</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('hcdp.gap-standar.form')
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            // datatables
            table = $('.table-standar').DataTable({
                processing: true
            });

            // select dropdown opd
            $.ajax({
                url: "{{ route('gap-standar.opd') }}",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    label = $("<label>").text('Perangakat Daerah').attr({
                        'id': 'label-gap'
                    }).appendTo('.dataTables_length');

                    select = $('<select>').attr({
                        'id': 'add-dropdown',
                        'aria-controls': 'DataTables_Table_0'
                    }).addClass('form-control input-sm opd').appendTo('.dataTables_length');

                    $.each(data, function(i, item) {
                        $('<option/>').attr({
                            'data-number': item.number_opd
                        }).text(item.nama_opd).appendTo(select);
                    });

                    $("#add-dropdown").val($("#add-dropdown option:first").val());
                    table.ajax.url('/gap-standar/' + $('#add-dropdown option:selected').attr(
                        'data-number')).load();
                    $('#add-dropdown').change(function() {
                        table.ajax.url('/gap-standar/' + $('#add-dropdown option:selected')
                            .attr('data-number')).load();
                    });
                }
            });

            $("a#disabled").on("click", function() {
                $(this).prop("disabled", true);
            });
        });

        function viewForm(nip, kode_jabatan, kode_skpd) {
            $.ajax({
                url: "/gap-standar/view/" + nip + "/" + kode_jabatan + "/" + kode_skpd,
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
                    var teknis = '';
                    $.each(data.standarTeknis, function(key, value) {
                        teknis += '<tr>';
                        teknis += '<td>' + value.nama_standar + '</td>';
                        teknis += '<td>' + value.nama_riwayat_diklat + '</td>';
                        teknis += '<td>' + value.status + '</td>';
                        teknis += '</tr>';
                    });
                    $('#table-teknis-view tbody').append(teknis);

                    // manajerial
                    var manajerial = '';
                    $.each(data.standarManajerial, function(key, value) {
                        manajerial += '<tr>';
                        manajerial += '<td>' + value.nama_standar + '</td>';
                        manajerial += '<td>' + value.nama_riwayat_diklat + '</td>';
                        manajerial += '<td>' + value.status + '</td>';
                        manajerial += '</tr>';
                    });
                    $('#table-manajerial-view tbody').append(manajerial);

                    // kultural
                    var kultural = '';
                    $.each(data.standarKultural, function(key, value) {
                        kultural += '<tr>';
                        kultural += '<td>' + value.nama_standar + '</td>';
                        kultural += '<td>' + value.nama_riwayat_diklat + '</td>';
                        kultural += '<td>' + value.status + '</td>';
                        kultural += '</tr>';
                    });
                    $('#table-kultural-view tbody').append(kultural);

                    // fungsional
                    var fungsional = '';
                    $.each(data.standarFungsional, function(key, value) {
                        fungsional += '<tr>';
                        fungsional += '<td>' + value.nama_standar + '</td>';
                        fungsional += '<td>' + value.nama_riwayat_diklat + '</td>';
                        fungsional += '<td>' + value.status + '</td>';
                        fungsional += '</tr>';
                    });
                    $('#table-fungsional-view tbody').append(fungsional);

                    // lain
                    var lain = '';
                    $.each(data.standarLain, function(key, value) {
                        lain += '<tr>';
                        lain += '<td>' + value.nama_standar + '</td>';
                        lain += '<td>' + value.nama_riwayat_diklat + '</td>';
                        lain += '<td>' + value.status + '</td>';
                        lain += '</tr>';
                    });
                    $('#table-lain-view tbody').append(lain);

                },
                error: function() {
                    toastr.warning("Tidak dapat menampilkan data !");
                }
            });
        }
    </script>
@endsection
