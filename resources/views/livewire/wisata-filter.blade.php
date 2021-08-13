<section id="wisata" class="dtr-section dtr-box-layout dtr-hero-section-top-padding row">

    <div class="col-lg-3 d-none d-lg-block">
        <div class="filter-container">
            <h5>Filter</h5>
            <p>Saring berdasarkan</p>
            <p>Provinsi</p>
            @foreach ($provinces as $province)
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="{{$province->id}}"
                    wire:model="selectedProvinces.{{$province->id}}" wire:key="{{$province->id}}"
                    value="{{$province->id}}">
                <label class="form-check-label" for="{{$province->id}}">
                    {{Str::ucfirst(Str::lower($province->name))}}
                </label>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-lg-9">
        <h2>Tempat Wisata</h2>
        <p>Daftar destinasi wisata </p>
        <div class="row">
            @foreach ($tempatWisata as $wisata)
            <div class="col-lg-4 mb-3">

                <div class="card-box">
                    <img @if($wisata->thumbnail)src="{{Storage::url($wisata->thumbnail->media_url)}}" @endif alt=""
                    srcset=""
                    class="d-block img-fluid">
                    <div class="card-content">
                        <div class="d-flex align-items-center">
                            <span class="location">{{$wisata->city->province->name}}</span>
                        </div>
                        <a href="{{route('detailwisata', ['slug' => $wisata->slug])}}" class="h4">{{$wisata->name}}</a>
                        <div class="d-flex justify-items-center">
                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M8.01794 0.366455C5.16454 0.366455 2.84302 2.5151 2.84302 5.15602C2.84302 5.94882 3.05718 6.73488 3.46431 7.4321L7.73495 14.5808C7.79181 14.6761 7.90014 14.7351 8.01794 14.7351C8.13574 14.7351 8.24408 14.6761 8.30094 14.5808L12.5732 7.42974C12.9787 6.73488 13.1929 5.94879 13.1929 5.15599C13.1929 2.5151 10.8713 0.366455 8.01794 0.366455ZM8.01794 7.55078C6.59124 7.55078 5.4305 6.47647 5.4305 5.15602C5.4305 3.83556 6.59124 2.76125 8.01794 2.76125C9.44464 2.76125 10.6054 3.83556 10.6054 5.15602C10.6054 6.47647 9.44464 7.55078 8.01794 7.55078Z"
                                        fill="#1E247E" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="15.5248" height="14.3687" fill="white"
                                            transform="translate(0.255615 0.366455)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <h6 class="h6 d-inline-block ml-1">
                                {{$wisata->city->name??"-"}}</h6>
                        </div>
                        <hr>
                        <div class="facility-container">
                            @foreach ($wisata->facilities as $item)
                            <span class="badge badge-pink">{{$item->name}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <div class="d-flex justify-items-center">
            <div class="mx-auto">
                {{$tempatWisata->links()}}
            </div>
        </div>
    </div>

</section>
