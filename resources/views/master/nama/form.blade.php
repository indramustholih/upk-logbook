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
                    {{--  id nama pelatihan  --}}
                    <input type="hidden" id="id" name="id">

                    {{-- jenis pengembangan kompetensi --}}
                    <div class="form-group">
                        <label for="jenis" class="col-md-3 control-label">Jenis Pengembangan Kompetensi</label>
                        <div class="col-md-6">
                            <select type="text" class="form-control" id="jenis" name="jenis" autofocus required>
                                <option value=""></option>
                                @foreach ($jenis as $list)
                                    <option value="{{ $list->number_jenis }}">{{ $list->jenis_pelatihan }}</option>
                                @endforeach
                                <select>
                                    <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    {{-- bentuk pelatihan --}}
                    <div class="form-group">
                        <label for="bentuk" class="col-md-3 control-label">Bentuk Pelatihan</label>
                        <div class="col-md-6">
                            <select type="text" class="form-control" id="bentuk" name="bentuk" autofocus required>
                                <option value=""></option>
                                @foreach ($bentuk as $list)
                                    <option value="{{ $list->number_bentuk }}">{{ $list->bentuk_pelatihan }}</option>
                                @endforeach
                                <select>
                                    <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    {{-- jalur pelatihan --}}
                    <div class="form-group">
                        <label for="jalur" class="col-md-3 control-label">Jalur Pelatihan</label>
                        <div class="col-md-6">
                            <select type="text" class="form-control" id="jalur" name="jalur" autofocus required>
                                <option value=""></option>
                                @foreach ($jalur as $list)
                                    <option value="{{ $list->number_jalur }}" class="{{ $list->number_bentuk }}">{{ $list->jalur_pelatihan }}</option>
                                @endforeach
                            <select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    {{-- kode nama pelatihan --}}
                    <div class="form-group">
                        <label for="kode" class="col-md-3 control-label">Kode Nama</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="kode" name="kode" placeholder="T01" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    {{-- nama pelatihan --}}
                    <div class="form-group">
                        <label for="nama_pelatihan" class="col-md-3 control-label">Nama Pelatihan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nama_pelatihan" name="nama_pelatihan" placeholder="Bimbingan Teknis Penyusunan APBD" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    {{-- keterangan --}}
                    <div class="form-group">
                        <label for="keterangan" class="col-md-3 control-label">Keterangan</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="keterangan" name="keterangan" style="resize: vertical;"
                            placeholder="Bimbingan Teknis penyusunan APBD" autofocus required></textarea>
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
