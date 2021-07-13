<div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah
        Paket</button>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{route('admin.paket-wisata.store')}}" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Paket</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Tempat Wisata</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" placeholder="Nama Tempat Wisata" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tour Travel</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" placeholder="Tour Travel" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Paket</label>
                            <div class="col-sm-9">
                                <input type="text" name="phone_number" class="form-control" placeholder="Nama Paket" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" class="form-control" placeholder="Deskripsi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" class="form-control" placeholder="Harga" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </form>
        </div>
    </div>
</div>
