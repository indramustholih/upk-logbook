@extends('layouts.app')
@section('title')
    Gap Standar Kinerja
@endsection

@section('breadcrumb')
    @parent
    <li>Gap Standar Kinerja</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-hover table-kinerja">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama</th>
                                <th>Perangkat Daerah</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Nilai Total</th>
                                <th>Keterangan</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('hcdp.gap-kinerja.view')
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var extensions = {
                "sFilter": "dataTables_filter custom_kinerja_filter_class",
                "sLength": "dataTables_length custom_kinerja_length_class"
            }
            // Used when bJQueryUI is false
            $.extend($.fn.dataTableExt.oStdClasses, extensions);
            // Used when bJQueryUI is true
            $.extend($.fn.dataTableExt.oJUIClasses, extensions);
            // datatables
            table = $('.table-kinerja').DataTable({
                processing: true,
                dom: 'Blfrtip',
                // searching: false,
                paging: false,
            });

            // filter
            $.fn.inputFilter = function(inputFilter) {
                return this.on("masukan keydown keyup mousedown mouseup pilih menu konteks drop", function() {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    } else {
                        this.value = "";
                    }
                });
            };

            // select dropdown opd
            $.ajax({
                url: "{{ route('gap-standar.opd') }}",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    // opd
                    label = $("<label>").text('Perangakat Daerah:').attr({
                        'id': 'label-opd'
                    }).appendTo('.custom_kinerja_filter_class');

                    select = $('<select>').attr({
                        'id': 'add-opd',
                        'aria-controls': 'DataTables_Table_0'
                    }).addClass('form-control input-sm opd').appendTo(
                        '.custom_kinerja_filter_class');
                        $('<option/>').attr({
                            'data-number': ""
                        }).text("").appendTo(select);
                    $.each(data, function(i, item) {
                        $('<option/>').attr({
                            'data-number': item.number_opd
                        }).text(item.nama_opd).appendTo(select);
                    });

                    // tahun
                    label = $("<label>").text('tahun:').attr({
                        'id': 'label-tahun'
                    }).appendTo('.custom_kinerja_filter_class');

                    tahun = $('<input>').attr({
                        'id': 'add-tahun',
                        'aria-controls': 'DataTables_Table_0'
                    }).addClass('form-control input-sm opd').appendTo(
                        '.custom_kinerja_filter_class');

                    // // nip
                    // label = $("<label>").text('nip:').attr({
                    //     'id': 'label-nip',
                    // }).appendTo('.custom_kinerja_filter_class');

                    // input = $('<input>').attr({
                    //     'id': 'add-nip',
                    //     'aria-controls': 'DataTables_Table_0',
                    //     'maxlength': 18
                    // }).addClass('form-control input-sm nip').appendTo(
                    //     '.custom_kinerja_filter_class');

                    button = $(
                        "<a onclick='testPenilaian()' class='btn btn-success btn-tampil' type='submit'> <i class='fa fa-search' aria-hidden='true'></i> Tampilkan </a>"
                    ).appendTo('.custom_kinerja_filter_class');

                    // $.each(data, function(i, item) {
                    //     $('<option/>').attr({
                    //         'data-number': item.number_opd
                    //     }).text(item.nama_opd).appendTo(select);
                    // });

                    // $("#add-dropdown").val($("#add-dropdown option:first").val());
                    // table.ajax.url('/gap-standar/' + $('#add-dropdown option:selected').attr(
                    //     'data-number')).load();
                    // $('#add-dropdown').change(function() {
                    //     table.ajax.url('/gap-standar/' + $('#add-dropdown option:selected')
                    //         .attr('data-number')).load();
                    // });

                    $("#add-tahun").inputFilter(function(value) {
                        return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 2100);
                    });
                    $("#add-nip").inputFilter(function(value) {
                        return /^\d*$/.test(value);
                    });
                }
            });
        });

        function testPenilaian() {
            tahun = $('#add-tahun').val();
            nip = $('#add-nip').val();
            kode_opd = $('#add-opd option:selected').attr('data-number');

            if (tahun == '') {
                alert('input tahun tidak boleh kosong');
            } else if (nip == '') {
                alert('nip null');
            } else if (tahun < 2020) {
                alert('tahun dibawah 2020 tidak bisa digunakan');
            } else {
                table.ajax.url("/gap-kinerja/" + tahun +  "/" + kode_opd).load();
                // console.log(kode_opd);
            }
        }

        function viewForm(nip, kode_opd, kode_jabatan, tahun) {

            $.ajax({
                url: "/gap-kinerja/view-saran-kompetensi/" + nip + "/" + kode_opd + "/" + kode_jabatan + "/" + tahun,
                type: "GET",
                dataType: "JSON",

                success: function(data) {
                    $('#modal-form').modal('show');
                    $('.modal-title').text('View Data Gap Kinerja');
                    $('#nama').text(data.nipView.nama);
                    $('#nip').text(data.nipView.nip);
                    $('#kode_jabatan').text(data.nipView.kode_jabatan);
                    $('#nama_jabatan').text(data.nipView.nama_jabatan);
                    $('#kode_opd').text(data.nipView.kode_opd);
                    $('#nama_opd').text(data.nipView.nama_opd);
                    $('#tahun').text(data.tahun);

                    // saran
                    var saran = '';
                    var no_saran = 1;
                    $.each(data.saran, function(key, value) {
                        saran += '<tr>';
                        saran += '<td>' + (no_saran) + '</td>';
                        saran += '<td>' + value.kode + '</td>';
                        saran += '<td>' + value.nama_saran_pengembangan + '</td>';
                        saran += '</tr>';
                        no_saran++;
                    });
                    $('#table-saran-view tbody').empty();
                    $('#table-saran-view tbody').append(saran);

                    // kompetensi
                    var kompetensi = '';
                    var no_kompetensi = 1;
                    $.each(data.kompetensi, function(key, value) {
                        kompetensi += '<tr>';
                        kompetensi += '<td>' + (no_kompetensi) + '</td>';
                        kompetensi += '<td>' + value.kode + '</td>';
                        kompetensi += '<td>' + value.nama_pelatihan + '</td>';
                        kompetensi += '</tr>';
                    });
                    $('#table-kompetensi-view tbody').empty();
                    $('#table-kompetensi-view tbody').append(kompetensi);

                },
                error: function() {
                    toastr.warning("Tidak dapat menampilkan data !");
                }
            });
        }
    </script>
@endsection
