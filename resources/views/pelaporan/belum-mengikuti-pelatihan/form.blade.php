<div class="modal" id="modal-form" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h3 class="modal-title"></h3>
            </div>

            <div class="modal-body">
                {{-- mapping --}}
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <i class="more-less glyphicon glyphicon-plus"></i>
                                Mapping
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul class="products-list">
                                <li class="item">
                                    <div class="product-img">
                                        <a href="javascript:void(0)" class="product-title">Nama </a>
                                        <span class="product-description">
                                            <span id="nama"></span>
                                        </span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <a href="javascript:void(0)" class="product-title">NIP </a>
                                        <span class="product-description">
                                            <span id="nip"></span>
                                        </span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <a href="javascript:void(0)" class="product-title">Jabatan </a>
                                        <span class="product-description">
                                            <span id="kode_jabatan"></span> - <span id="nama_jabatan"></span>
                                        </span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <a href="javascript:void(0)" class="product-title">Perangkat Daerah </a>
                                        <span class="product-description">
                                            <span id="kode_opd"></span> - <span id="nama_opd"></span>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- standar --}}
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="more-less glyphicon glyphicon-plus"></i>
                                Standar Pelatihan
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <table class="table table-hover" id="table-standar-view">
                                </tfoot>
                                <thead>
                                    <tr>
                                        <th>Standar Pelatihan</th>
                                        <th>Pelatihan Yang Telah Diikuti</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
