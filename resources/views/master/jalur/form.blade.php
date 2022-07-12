<div class="modal" id="modal-form" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="form-horizontal" method="POST" autocomplete="off" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                    {{--  id jalur pelatihan  --}}
                    <input type="hidden" id="id" name="id">

                    <input type="hidden" id="id_bentuk" name="id_bentuk">

                    {{-- kode bentuk pelatihan --}}
                    <div class="form-group">
                        <label for="kode_bentuk" class="col-md-3 control-label">Kode Bentuk Pelatihan</label>
                        <div class="col-md-6">
                            <select type="text" class="form-control" id="kode_bentuk" name="kode_bentuk" onchange="onchanges(event)" autofocus required>
                                <option value=""></option>
                                @foreach ( $bentuk as $list)
                                    <option value="{{$list->kode}}">{{$list->kode}}</option>
                                @endforeach
                            <select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    {{-- bentuk pelatihan --}}
                    <div class="form-group">
                        <label for="bentuk_pelatihan" class="col-md-3 control-label">Bentuk Pelatihan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="bentuk_pelatihan" name="bentuk_pelatihan" readonly autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    {{-- kode --}}
                    <div class="form-group">
                        <label for="kode" class="col-md-3 control-label">Kode Jalur</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="kode" name="kode" placeholder="NKL01" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    {{-- jalur pelatihan --}}
                    <div class="form-group">
                        <label for="jalur_pelatihan" class="col-md-3 control-label">Jalur Pelatihan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="jalur_pelatihan" name="jalur_pelatihan" placeholder="Bimbingan Teknis" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    {{-- keterangan --}}
                    <div class="form-group">
                        <label for="keterangan" class="col-md-3 control-label">Keterangan</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="keterangan" name="keterangan" style="max-width: 420px"
                            placeholder="Pelatihan Non Klasikasl Melalui Bimbingan Teknis" autofocus required></textarea>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary btn-save" type="submit">
                        <i class="fa fa-floppy-o"></i> Simpan
                    </button>

                    <button class="btn btn-warning" type="button" data-dismiss="modal">
                        <i class="fa fa-arrow-circle-left"></i> Batal
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
