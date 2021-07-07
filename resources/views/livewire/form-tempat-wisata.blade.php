<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Info Umum</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form wire:submit.prevent="updateWisata">
                        @csrf
                        @method('put')
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" wire:model="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="history" class="form-control" rows="4" wire:model="history"
                                    id="comment"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                <label>Jam Buka</label>
                                <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                    data-autoclose="true">
                                    <input type="text" name="jam_buka" class="form-control" wire:model="jam_buka"> <span
                                        class="input-group-append"><span class="input-group-text"><i
                                                class="fa fa-clock-o"></i></span></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                <label>Jam Tutup</label>
                                <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                    data-autoclose="true">
                                    <input type="text" name="jam_tutup" class="form-control" wire:model="jam_tutup">
                                    <span class="input-group-append"><span class="input-group-text"><i
                                                class="fa fa-clock-o"></i></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kontak pengelola</label>
                            <div class="col-sm-9">
                                <input type="text" name="contact" class="form-control" wire:model="contact" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary ml-auto d-block">Simpan</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Info Tiket</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addTiket">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                    <div class="row align-items-end">
                        <div class="form-group col-md-5">
                            <label class="form-label">Jenis Tiket</label>
                            <input type="text" name="ticket_name" class="form-control" wire:model="ticket_name"
                                required>

                        </div>
                        <div class="form-group col-md-5">
                            <label class="form-label">Harga</label>
                            <input type="text" name="price" class="form-control" wire:model="price" required>

                        </div>
                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th class="width80">No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wisata->tickets as $i => $tiket)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$tiket->name}}</td>
                                <td>{{$tiket->price}}</td>
                                <td><a wire:click="deleteTiket({{$tiket->id}})">Hapus</a></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" align="center">Belum Ada Tiket</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Status</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="updateStatus">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <input type="text" name="status" class="form-control" wire:model="status" required>
                    </div>
                    <div class="form-group ">
                        <label class="form-label">Terkahir diperbarui</label>
                        <input type="text" name="updated_at" class="form-control" wire:model="updated_at" disabled>
                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Info Produk(Oleh - Oleh)</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addProduk">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Produk</label>
                        <div class="col-sm-9">
                            <input type="text" name="produk_name" class="form-control" wire:model="produk_name"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <input type="text" name="produk_description" class="form-control"
                                wire:model="produk_description" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary ml-auto d-block">Simpan</button>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th class="width80">No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wisata->produks as $i => $produk)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$produk->name}}</td>
                                <td>{{$produk->description}}</td>
                                <td>Hapus</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" align="center">Belum Ada Produk</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Info Fasilitas</h4>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Galeri</h4>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
</div>
