@extends('home')

@section('konten')
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-md-row">
            <div class="col-md-3 col-12 my-3">
                <x-kasir.kasirpelanggan ></x-kasir.kasirpelanggan>
            </div>
            <div class="col-md-8 col-12 my-3">
                <x-kasir.pembelian :produks="$produks"></x-kasir.pembelian>

              <x-kasir.transaksi></x-kasir.transaksi>
            </div>
        </div>
    </div>
@endsection
