<div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah
        Paket</button>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{route('admin.paket-wisata.store')}}" method="post" enctype="multipart/form-data">
                @csrf
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
                                <select name="tempat_wisata_id" id="" class="form-control" required>
                                    <option value="" selected>Nama Tempat Wisata</option>
                                    @foreach (\App\Models\TempatWisata::all() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tour Travel</label>
                            <div class="col-sm-9">
                                <select name="tour_travel_id" id="" class="form-control" required>
                                    <option value="" selected>Nama Travel</option>
                                    @foreach (\App\Models\TourTravel::all() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Paket</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" placeholder="Nama Paket" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="number" name="price" class="form-control" placeholder="Harga" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">Thumbnail</label>
                            <div class="col-sm-9">
                                <input type="file" name="thumbnail" id="file" class="form-control"
                                    placeholder="Thumbnail" required>
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
