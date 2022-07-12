@extends('layouts.app')
@section('title')
    Gap Standar Kompetensi Jabatan
@endsection

@section('breadcrumb')
    @parent
    <li>Gap Standar Kompetensi Jabatan</li>
    <li>Mapping</li>
@endsection

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Mapping</h3>

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
                    <a href="{{ route('gap-standar.index') }}" class="btn btn-warning mb-2"> <i
                            class="fa fa-chevron-circle-left" aria-hidden="true"></i></i> Kembali</a>
                </li>
            </ul>
        </div>
    </div>

    {{-- teknis --}}
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Pelatihan Teknis</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div id="teknis">
                <form class="form-inline form-group">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <input type="hidden" id="nip" name="nip" value="{{ $nip->nip }}">
                    <input type="hidden" id="nama" name="nama" value="{{ $nip->nama }}">
                    <input type="hidden" id="kode_jabatan" name="kode_jabatan" value="{{ $nip->kode_jabatan }}">
                    <input type="hidden" id="kode_opd" name="kode_opd" value="{{ $nip->kode_opd }}">
                    <select type="text" class="form-control" id="standar" name="standar" style="width:300px;" autofocus
                        required>
                        <option value="" selected disabled>Standar Pelatihan Teknis</option>
                        @forelse ($standarTeknis as $list)
                            <option value="{{ $list->id }}">{{ $list->nama_pelatihan }}</option>
                        @empty
                        @endforelse
                    </select>

                    <select type="text" class="form-control" id="riwayat" name="riwayat" style="width:300px;" autofocus
                        required>
                        <option value="" selected disabled>Pelatihan Teknis yang telah diikuti</option>
                        @forelse ($riwayat as $list)
                            <option value="{{ $list['id'] }}|{{ $list['nama_diklat'] }}">{{ $list['nama_diklat'] }}
                            </option>
                        @empty
                        @endforelse
                    </select>
                    <a onclick="petakanTeknis()" class="btn btn-primary mb-2"><i class="fa fa-plus-circle"
                            aria-hidden="true"></i> Petakan</a>
                </form>
            </div>
            <table class="table table-hover" id="table-teknis">
                </tfoot>
                <thead>
                    <tr>
                        <th width="30">No</th>
                        <th>Standar Pelatihan</th>
                        <th>Pelatihan Yang Telah Diikuti</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    {{-- manajerial --}}
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Pelatihan Manajerial</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div id="manajerial">
                <form class="form-inline form-group">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <input type="hidden" id="nip" name="nip" value="{{ $nip->nip }}">
                    <input type="hidden" id="nama" name="nama" value="{{ $nip->nama }}">
                    <input type="hidden" id="kode_jabatan" name="kode_jabatan" value="{{ $nip->kode_jabatan }}">
                    <input type="hidden" id="kode_opd" name="kode_opd" value="{{ $nip->kode_opd }}">
                    <select type="text" class="form-control" id="standar" name="standar" style="width:300px;" autofocus
                        required>
                        <option value="" selected disabled>Standar Pelatihan Manajerial</option>
                        @forelse ($standarManajerial as $list)
                            <option value="{{ $list->id }}">{{ $list->nama_pelatihan }}</option>
                        @empty
                        @endforelse
                    </select>

                    <select type="text" class="form-control" id="riwayat" name="riwayat" style="width:300px;" autofocus
                        required>
                        <option value="" selected disabled>Pelatihan Manajerial yang telah diikuti</option>
                        @forelse ($riwayat as $list)
                            <option value="{{ $list['id'] }}|{{ $list['nama_diklat'] }}">{{ $list['nama_diklat'] }}
                            </option>
                        @empty
                        @endforelse
                    </select>
                    <a onclick="petakanManajerial()" class="btn btn-primary mb-2"><i class="fa fa-plus-circle"
                            aria-hidden="true"></i> Petakan</a>
                </form>
            </div>
            <table class="table table-hover" id="table-manajerial">
                </tfoot>
                <thead>
                    <tr>
                        <th width="30">No</th>
                        <th>Standar Pelatihan</th>
                        <th>Pelatihan Yang Telah Diikuti</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    {{-- kultural --}}
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Pelatihan Sosial Kultural</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div id="kultural">
                <form class="form-inline form-group">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <input type="hidden" id="nip" name="nip" value="{{ $nip->nip }}">
                    <input type="hidden" id="nama" name="nama" value="{{ $nip->nama }}">
                    <input type="hidden" id="kode_jabatan" name="kode_jabatan" value="{{ $nip->kode_jabatan }}">
                    <input type="hidden" id="kode_opd" name="kode_opd" value="{{ $nip->kode_opd }}">
                    <select type="text" class="form-control" id="standar" name="standar" style="width:300px;" autofocus
                        required>
                        <option value="" selected disabled>Standar Pelatihan Kultural</option>
                        @forelse ($standarKultural as $list)
                            <option value="{{ $list->id }}">{{ $list->nama_pelatihan }}</option>
                        @empty
                        @endforelse
                    </select>

                    <select type="text" class="form-control" id="riwayat" name="riwayat" style="width:300px;" autofocus
                        required>
                        <option value="" selected disabled>Pelatihan Kultural yang telah diikuti</option>
                        @forelse ($riwayat as $list)
                            <option value="{{ $list['id'] }}|{{ $list['nama_diklat'] }}">{{ $list['nama_diklat'] }}
                            </option>
                        @empty
                        @endforelse
                    </select>
                    <a onclick="petakanKultural()" class="btn btn-primary mb-2"><i class="fa fa-plus-circle"
                            aria-hidden="true"></i> Petakan</a>
                </form>
            </div>
            <table class="table table-hover" id="table-kultural">
                </tfoot>
                <thead>
                    <tr>
                        <th width="30">No</th>
                        <th>Standar Pelatihan</th>
                        <th>Pelatihan Yang Telah Diikuti</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    {{-- fungsional --}}
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Pelatihan Fungsional</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div id="fungsional">
                <form class="form-inline form-group">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <input type="hidden" id="nip" name="nip" value="{{ $nip->nip }}">
                    <input type="hidden" id="nama" name="nama" value="{{ $nip->nama }}">
                    <input type="hidden" id="kode_jabatan" name="kode_jabatan" value="{{ $nip->kode_jabatan }}">
                    <input type="hidden" id="kode_opd" name="kode_opd" value="{{ $nip->kode_opd }}">
                    <select type="text" class="form-control" id="standar" name="standar" style="width:300px;" autofocus
                        required>
                        <option value="" selected disabled>Standar Pelatihan Fungsional</option>
                        @forelse ($standarFungsional as $list)
                            <option value="{{ $list->id }}">{{ $list->nama_pelatihan }}</option>
                        @empty
                        @endforelse
                    </select>

                    <select type="text" class="form-control" id="riwayat" name="riwayat" style="width:300px;" autofocus
                        required>
                        <option value="" selected disabled>Pelatihan Fungsional yang telah diikuti</option>
                        @forelse ($riwayat as $list)
                            <option value="{{ $list['id'] }}|{{ $list['nama_diklat'] }}">{{ $list['nama_diklat'] }}
                            </option>
                        @empty
                        @endforelse
                    </select>
                    <a onclick="petakanFungsional()" class="btn btn-primary mb-2"><i class="fa fa-plus-circle"
                            aria-hidden="true"></i> Petakan</a>
                </form>
            </div>
            <table class="table table-hover" id="table-fungsional">
                </tfoot>
                <thead>
                    <tr>
                        <th width="30">No</th>
                        <th>Standar Pelatihan</th>
                        <th>Pelatihan Yang Telah Diikuti</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    {{-- lainnya --}}
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Pengembangan Kompetensi Lainnya</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div id="lain">
                <form class="form-inline form-group">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <input type="hidden" id="nip" name="nip" value="{{ $nip->nip }}">
                    <input type="hidden" id="nama" name="nama" value="{{ $nip->nama }}">
                    <input type="hidden" id="kode_jabatan" name="kode_jabatan" value="{{ $nip->kode_jabatan }}">
                    <input type="hidden" id="kode_opd" name="kode_opd" value="{{ $nip->kode_opd }}">
                    <select type="text" class="form-control" id="standar" name="standar" style="width:300px;" autofocus
                        required>
                        <option value="" selected disabled>Standar Kompetensi Lainnya</option>
                        @forelse ($standarLain as $list)
                            <option value="{{ $list->id }}">{{ $list->nama_pelatihan }}</option>
                        @empty
                        @endforelse
                    </select>

                    <select type="text" class="form-control" id="riwayat" name="riwayat" style="width:300px;" autofocus
                        required>
                        <option value="" selected disabled>Pelatihan telah diikuti</option>
                        @forelse ($riwayat as $list)
                            <option value="{{ $list['id'] }}|{{ $list['nama_diklat'] }}">{{ $list['nama_diklat'] }}
                            </option>
                        @empty
                        @endforelse
                    </select>
                    <a onclick="petakanLain()" class="btn btn-primary mb-2"><i class="fa fa-plus-circle"
                            aria-hidden="true"></i> Petakan</a>
                </form>
            </div>
            <table class="table table-hover" id="table-lain">
                </tfoot>
                <thead>
                    <tr>
                        <th width="30">No</th>
                        <th>Standar Pelatihan</th>
                        <th>Pelatihan Yang Telah Diikuti</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        // var tabelManajerial, tabelKultural, tabelTeknis, tabelFungsional;
        var nip = $('#nip').val();
        var kode_jabatan = $('#kode_jabatan').val();
        var kode_opd = $('#kode_opd').val();

        $(document).ready(function() {
            // manajerial
            $('#table-manajerial').DataTable({
                processing: true,
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'Todos']
                ],
                ajax: {
                    url: "/gap-standar/maping/manajerial/" + nip + "/" + kode_jabatan + "/" + kode_opd,
                    type: "GET"
                }
            });

            // kultural
            $('#table-kultural').DataTable({
                processing: true,
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'Todos']
                ],
                ajax: {
                    url: "/gap-standar/maping/kultural/" + nip + "/" + kode_jabatan + "/" + kode_opd,
                    type: "GET"
                }
            });

            // teknis
            $('#table-teknis').DataTable({
                processing: true,
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'Todos']
                ],
                ajax: {
                    url: "/gap-standar/maping/teknis/" + nip + "/" + kode_jabatan + "/" + kode_opd,
                    type: "GET"
                }
            });

            // fungsional
            $('#table-fungsional').DataTable({
                processing: true,
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'Todos']
                ],
                ajax: {
                    url: "/gap-standar/maping/fungsional/" + nip + "/" + kode_jabatan + "/" + kode_opd,
                    type: "GET"
                }
            });

            // lain
            $('#table-lain').DataTable({
                processing: true,
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'Todos']
                ],
                ajax: {
                    url: "/gap-standar/maping/lain/" + nip + "/" + kode_jabatan + "/" + kode_opd,
                    type: "GET"
                }
            });

        });

        //menyimpan data manajerial
        function petakanManajerial() {
            $.ajax({
                url: "/gap-standar/maping/manajerial",
                type: "POST",
                data: $('#manajerial form').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[ name= csrf-token]').attr('content')
                },
                success: function(data) {
                    toastr.success('Berhasil Membuat Data !');
                    $('#table-manajerial').DataTable().ajax.reload();
                },
                error: function() {
                    toastr.warning("Tidak dapat menyimpan data !");
                }
            });
            return false;
        }

        //menyimpan data kultural
        function petakanKultural() {
            $.ajax({
                url: "/gap-standar/maping/kultural",
                type: "POST",
                data: $('#kultural form').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[ name= csrf-token]').attr('content')
                },
                success: function(data) {
                    toastr.success('Berhasil Membuat Data !');
                    $('#table-kultural').DataTable().ajax.reload();
                },
                error: function() {
                    toastr.warning("Tidak dapat menyimpan data !");
                }
            });
            return false;
        }

        //menyimpan data teknis
        function petakanTeknis() {
            $.ajax({
                url: "/gap-standar/maping/teknis",
                type: "POST",
                data: $('#teknis form').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[ name= csrf-token]').attr('content')
                },
                success: function(data) {
                    toastr.success('Berhasil Membuat Data !');
                    $('#table-teknis').DataTable().ajax.reload();
                },
                error: function() {
                    toastr.warning("Tidak dapat menyimpan data !");
                }
            });
            return false;
        }

        //menyimpan data fungsional
        function petakanFungsional() {
            $.ajax({
                url: "/gap-standar/maping/fungsional",
                type: "POST",
                data: $('#fungsional form').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[ name= csrf-token]').attr('content')
                },
                success: function(data) {
                    toastr.success('Berhasil Membuat Data !');
                    $('#table-fungsional').DataTable().ajax.reload();
                },
                error: function() {
                    toastr.warning("Tidak dapat menyimpan data !");
                }
            });
            return false;
        }

        //menyimpan data lainnya
        function petakanLain() {
            $.ajax({
                url: "/gap-standar/maping/lain",
                type: "POST",
                data: $('#lain form').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[ name= csrf-token]').attr('content')
                },
                success: function(data) {
                    toastr.success('Berhasil Membuat Data !');
                    $('#table-lain').DataTable().ajax.reload();
                },
                error: function() {
                    toastr.warning("Tidak dapat menyimpan data !");
                }
            });
            return false;
        }

        //menghapus data manajerial
        function deleteDataManajerial(id) {
            if (confirm("Apakah yakin data akan dihapus ?")) {
                $.ajax({
                    url: "/gap-standar/maping/" + id,
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
                        $('#table-manajerial').DataTable().ajax.reload();
                    },
                    error: function() {
                        toastr.warning("Tidak dapat menghapus data !");
                    }
                });
            }
        }

        //menghapus data kultural
        function deleteDataKultural(id) {
            if (confirm("Apakah yakin data akan dihapus ?")) {
                $.ajax({
                    url: "/gap-standar/maping/" + id,
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
                        $('#table-kultural').DataTable().ajax.reload();
                    },
                    error: function() {
                        toastr.warning("Tidak dapat menghapus data !");
                    }
                });
            }
        }

        //menghapus data teknis
        function deleteDataTeknis(id) {
            if (confirm("Apakah yakin data akan dihapus ?")) {
                $.ajax({
                    url: "/gap-standar/maping/" + id,
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
                        $('#table-teknis').DataTable().ajax.reload();
                    },
                    error: function() {
                        toastr.warning("Tidak dapat menghapus data !");
                    }
                });
            }
        }

        //menghapus data fungsional
        function deleteDataFungsional(id) {
            if (confirm("Apakah yakin data akan dihapus ?")) {
                $.ajax({
                    url: "/gap-standar/maping/" + id,
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
                        $('#table-fungsional').DataTable().ajax.reload();
                    },
                    error: function() {
                        toastr.warning("Tidak dapat menghapus data !");
                    }
                });
            }
        }

        //menghapus data lainnya
        function deleteDataLain(id) {
            if (confirm("Apakah yakin data akan dihapus ?")) {
                $.ajax({
                    url: "/gap-standar/maping/" + id,
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
                        $('#table-lain').DataTable().ajax.reload();
                    },
                    error: function() {
                        toastr.warning("Tidak dapat menghapus data !");
                    }
                });
            }
        }
    </script>
@endsection
