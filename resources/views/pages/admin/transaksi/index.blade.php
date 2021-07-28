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
                                        <td>{{$item->price_total}}</td>

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
