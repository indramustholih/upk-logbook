<!-- View -->
<div class="modal" id="modal-form-tampil" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title-tampil"></h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        
                        {{-- Saran Pengembangan --}}
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSaran">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseSaran" aria-expanded="false" aria-controls="collapseSaran">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            Saran Pengembangan
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSaran" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSaran">
                                    <div class="panel-body">
                                        <table class="table table-hover" id="table-view-saran">
                                            </tfoot>
                                            <thead>
                                                <tr>
                                                    <th width="5%">No</th>
                                                    <th width="25%">Kode</th>
                                                    <th>Saran Pengembangan</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        {{-- Pengembangan Kompetensi --}}
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingKompetensi">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseKompetensi" aria-expanded="false" aria-controls="collapseKompetensi">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            Pengembangan Kompetensi
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseKompetensi" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingKompetensi">
                                    <div class="panel-body">
                                        <table class="table table-hover" id="table-view-kompetensi">
                                            </tfoot>
                                            <thead>
                                                <tr>
                                                    <th width="5%">No</th>
                                                    <th width="25%">Kode</th>
                                                    <th>Pengembangan Kompetensi</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">
                        <i class="fa fa-close"></i> Close
                    </button>
                </div>
        </div>
    </div>
</div>
