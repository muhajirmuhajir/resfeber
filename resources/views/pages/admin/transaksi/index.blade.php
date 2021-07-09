@extends('layouts.admin')

@section('content')
<div class="content-body">
    <div class="container-fluid">

        <div class="row ">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Transaksi</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#</th>
                                        <th>KODE</th>
                                        <th>TANGGAL TRANSAKSI</th>
                                        <th>TUJUAN</th>
                                        <th>STATUS</th>
                                        <th>PRICE</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($transaction as $key=> $item)
                                    <tr>
                                        <td><strong>{{$transaction->firstItem()+ $key}}</strong></td>
                                        <td>{{$item->payment_id}}</td>
                                        <td>{{$item->transaction_date}}</td>
                                        <td>{{$item->tempatWisata->name}}</td>
                                        <td><span class="badge light badge-success">{{$item->transaction_status}}</span>
                                        </td>
                                        <td>$21.56</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp"
                                                    data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7">
                                            <p class="text-center">Belum Ada Transaksi</p>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{$transaction->links()}}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
