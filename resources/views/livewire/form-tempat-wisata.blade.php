@push('head-script')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key={{config('maps.key')}}">
</script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', initialize);

function initialize() {
    var autocomplete = new google.maps.places.Autocomplete(document.getElementById('input-address'));

    google.maps.event.addListener(autocomplete, 'place_changed', function () {

        var place = autocomplete.getPlace();

        console.log(place.formatted_address);
        document.getElementById('input-latitude').value = place.geometry.location.lat();
        document.getElementById('input-longitude').value = place.geometry.location.lng();
        console.log('Latitude', place.geometry.location.lat());
        console.log('Longitude', place.geometry.location.lng());

    });
}
</script>
@endpush
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
                    <form action="{{route('admin.tempat-wisata.update',$tempatWisata->id)}}" method="post">
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
                                        value="{{\Carbon\Carbon::createFromFormat('H:i:s',$tempatWisata->jam_buka)->format('H:i')}}">
                                    <span class="input-group-append"><span class="input-group-text"><i
                                                class="fa fa-clock-o"></i></span></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                <label>Jam Tutup</label>
                                <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                    data-autoclose="true">
                                    <input type="text" class="form-control" name="jam_tutup"
                                        value="{{\Carbon\Carbon::createFromFormat('H:i:s',$tempatWisata->jam_tutup)->format('H:i')}}">
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
                            <label class="col-sm-3 col-form-label">Alamat Maps</label>
                            <div class="col-sm-9">
                                <input class="form-control" value="{{$wisata->location->address ?? ""}}" type="text"
                                    id="input-address" name="address" placeholder="Address" required>
                                <input type="hidden" id="input-latitude" value="{{$wisata->location->latitude ?? ""}}"
                                    name="latitude" required>
                                <input type="hidden" id="input-longitude" value="{{$wisata->location->longitude ?? ""}}"
                                    name="longitude" required>
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
                        <label class="col-sm-3 col-form-label">Foto Produk</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" name="produk_image" class="custom-file-input" id="fotoProduk"
                                    wire:model="produk_image" required>
                                <label class="custom-file-label" for="fotoProduk">Pilih Foto Produk</label>
                            </div>
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
                                <th class="width80" style="width:10%">No</th>
                                <th style="width:45%">Nama</th>
                                <th style="width:45%">Foto</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wisata->produks as $i => $produk)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$produk->name}}</td>
                                <td>@if ($produk->image_url)
                                    <img src="{{Storage::url($produk->image_url)}}" class="img-fluid w-50" alt="">
                                    @endif</td>
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



    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Info Fasilitas</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addFacility">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                    <div class="row align-items-end">
                        <div class="form-group col-md-8">
                            <label class="col-form-label">Nama Fasilitas</label>
                            <input type="text" name="facility_name" class="form-control w-100"
                                wire:model="facility_name" required>
                        </div>
                        <div class="form-group col">

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

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Harga Parkir Kendaraan</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addParkingPrice">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                    <div class="row align-items-end">
                        <div class="form-group col">
                            <label class="form-label">Jenis Kendaraan</label>
                            <input type="text" name="parking_jenis" class="form-control" wire:model="parking_jenis"
                                required>

                        </div>
                        <div class="form-group col">
                            <label class="form-label">Harga</label>
                            <input type="text" name="parking_price" class="form-control" wire:model="parking_price"
                                required>

                        </div>
                        <div class="form-group col">
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
                            @forelse ($wisata->parkingPrices as $i => $parkingPrice)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$parkingPrice->jenis}}</td>
                                <td>{{$parkingPrice->price}}</td>
                                <td><button onclick="confirm('Apakah anda yakin?') || event.stopImmediatePropagation()"
                                        wire:click="deleteParkingPrice({{$parkingPrice->id}})"
                                        class="btn btn-small btn-outline-danger">Hapus</button></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" align="center">Belum Ada Biaya Parkir</td>
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
                <h4 class="card-title">Hal yang harus dipersiapkan</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addAdditionalNeed">
                    @error('name') <span class="error">{{ $message }}</span> @enderror

                    <div class="form-group ">
                        <label class="form-label">Nama</label>
                        <input type="text" name="additionalNeed_name" class="form-control"
                            wire:model="additionalNeed_name" required>

                    </div>
                    <div class="form-group ">
                        <label class="form-label">Keterangan</label>
                        <textarea name="additionalNeed_description" class="form-control" id="additionalNeed_description"
                            wire:model="additionalNeed_description" rows="5" required></textarea>

                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>

                </form>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="width80">No</th>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wisata->additionalNeeds as $i => $item)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td><button onclick="confirm('Apakah anda yakin?') || event.stopImmediatePropagation()"
                                        wire:click="deleteAdditionalNeed({{$item->id}})"
                                        class="btn btn-small btn-outline-danger">Hapus</button></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" align="center">Belum Ada Biaya Parkir</td>
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
                                        <div class="custom-file">
                                            <input type="file" name="produk_image" class="custom-file-input"
                                                id="fotoGallery" wire:model="photo" required>
                                            <label class="custom-file-label" for="fotoGallery">Pilih Foto Produk</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-small btn-primary">Simpan Foto</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row" wire:sortable="updateMediaOrder">
                    @foreach ($wisata->media as $item)
                    @if ($item->type == 'image')
                    <div class="col-lg-3 col-md-6 mb-4" wire:sortable.item="{{$item->id}}" wire:key="{{$item->id}}">
                        <img src="{{Storage::url($item->media_url)}}" style="width:100%;">
                        <button onclick="confirm('Apakah anda yakin?') || event.stopImmediatePropagation()"
                            wire:click="deleteMedia({{$item->id}})" class="btn btn-small btn-link">Hapus</button>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Video URL</h4>
            </div>
            <div class="card-body">
                <div class="alert alert-success  align-items-center" style="display: none;" x-data="{show: false}"
                    x-show="show"
                    x-init="@this.on('savedVideo', ()=>{show = true; setTimeout(()=>{show=false;}, 2000)})">
                    <div>
                        Data Tersimpan
                    </div>
                </div>
                <form wire:submit.prevent="saveVideoEmbed">
                    <div class="form-group ">
                        <label class="form-label">URL Youtube</label>
                        <input type="text" name="additionalNeed_name" class="form-control" wire:model="videoURL"
                            required>

                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
