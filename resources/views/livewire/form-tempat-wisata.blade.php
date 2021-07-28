<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Info Umum</h4>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                <div class="alert alert-success d-flex align-items-center" x-data="{show: true}" x-show="show"
                    x-init="()=>{setTimeOut(()=>{show=false;}, 2000)}">
                    <div>
                        {{Session::get('success')}}
                    </div>
                </div>
                @endif
                <div class="basic-form">
                    <form action="{{route('admin.tempat-wisata.update',['tempat_wisatum' => $tempatWisata->id])}}"
                        method="post">
                        @csrf
                        @method('put')
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{$tempatWisata->name}}" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="history" class="form-control" rows="4"
                                    id="comment">{{$tempatWisata->history}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                <label>Jam Buka</label>
                                <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                    data-autoclose="true">
                                    <input type="text" class="form-control" name="jam_buka"
                                        value="{{$tempatWisata->jam_buka}}"> <span class="input-group-append"><span
                                            class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                <label>Jam Tutup</label>
                                <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                    data-autoclose="true">
                                    <input type="text" class="form-control" name="jam_tutup"
                                        value="{{$tempatWisata->jam_tutup}}">
                                    <span class="input-group-append"><span class="input-group-text"><i
                                                class="fa fa-clock-o"></i></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kontak pengelola</label>
                            <div class="col-sm-9">
                                <input type="text" name="contact" class="form-control"
                                    value="{{$tempatWisata->contact}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                <label>Provinsi</label>
                                <select wire:model="selectedProvince" class="form-control">
                                    <option value="" selected>Pilih Provinsi</option>
                                    @foreach ($provinces as $province)
                                    <option value="{{$province->id}}">{{$province->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                <label>Kota</label>
                                <select name="city_id" wire:model="selectedCity" class="form-control">
                                    <option value="" selected>Pilih Kota</option>
                                    @foreach ($cities as $citiy)
                                    <option value="{{$citiy->id}}">{{$citiy->name}}</option>
                                    @endforeach
                                </select>
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
                    <table class="table">
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
                                <td><button onclick="confirm('Apakah anda yakin?') || event.stopImmediatePropagation()"
                                        wire:click="deleteTiket({{$tiket->id}})"
                                        class="btn btn-small btn-outline-danger">Hapus</button></td>
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
                <form wire:submit.prevent="saveStatus">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status" wire:model="status" required>
                            <option value="PUBLISH">PUBLISH</option>
                            <option value="DRAFT">DRAFT</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="form-label">Terkahir diperbarui</label>
                        <input type="text" name="updated_at" class="form-control" wire:model="updated_at" disabled>
                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    </div>
                </form>
                <div class="alert alert-success  align-items-center" style="display: none;" x-data="{show: false}"
                    x-show="show"
                    x-init="@this.on('savedStatus', ()=>{show = true; setTimeout(()=>{show=false;}, 2000)})">
                    <div>
                        Data Tersimpan
                    </div>
                </div>
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
                    <table class="table">
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
                                <td><button onclick="confirm('Apakah anda yakin?') || event.stopImmediatePropagation()"
                                        wire:click="deleteProduk({{$produk->id}})"
                                        class="btn btn-small btn-outline-danger">Hapus</button></td>
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
                <form wire:submit.prevent="addFacility">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                    <div class="row align-items-end">
                        <div class="form-group col-md-10">
                            <label class="col-form-label">Nama Fasilitas</label>
                            <input type="text" name="facility_name" class="form-control" wire:model="facility_name"
                                required>
                        </div>
                        <div class="form-group row col-md-2">
                            <div class="col">
                                <button type="submit" class="btn btn-primary ml-auto d-block">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="width80">No</th>
                                <th>Nama</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wisata->facilities as $i => $facility)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$facility->name}}</td>
                                <td><button onclick="confirm('Apakah anda yakin?') || event.stopImmediatePropagation()"
                                        wire:click="deleteFacility({{$facility->id}})"
                                        class="btn btn-small btn-outline-danger">Hapus</button></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" align="center">Belum Ada Fasilitas</td>
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
                <h4 class="card-title">Gallery</h4>
            </div>
            <div class="card-body pb-1">
                <div class="row mb-4">
                    <form wire:submit.prevent="savePhoto">
                        <div class="row flex-row-reverse justify-content-between px-2">
                            <div class="col-md-6">
                                Foto Preview:
                                @if ($photo)
                                <img src="{{$photo->temporaryUrl()}}" class="img-thumbnail" alt="" srcset="">
                                @else
                                <img src="{{url('backpage/images/big/img1.jpg')}}" class="img-thumbnail" alt=""
                                    srcset="">
                                @endif
                                @error('photo') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Foto</label>
                                    <div class="col-sm-9">
                                        <input type="file" wire:model="photo" class="form-control" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-small btn-primary">Simpan Foto</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    @forelse ($wisata->media as $item)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <img src="{{Storage::url($item->media_url)}}" style="width:100%;">
                        <button onclick="confirm('Apakah anda yakin?') || event.stopImmediatePropagation()"
                            wire:click="deleteMedia({{$item->id}})" class="btn btn-small btn-link">Hapus</button>
                    </div>
                    @empty
                    <div class="col-md-12">
                        <p class="text-center">Belum ada Foto</p>
                    </div>
                    @endforelse

                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
</div>
