@extends('home')

@section('konten')
<div class="container-fluid">
    <div class="container">
            <h1 class="">halaman produk</h1>
            <x-produk.modalproduk>tambah produk</x-produk.modalproduk>
            <div class="row">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped   align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>id barang</th>
                                <th>nama barang</th>
                                <th>harga barang</th>
                                <th>stok barang</th>
                                <th>tanggal</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($produks as $produk)
                            <tr class="">
                                <td scope="row">{{ $produk->id }}</td>
                                <td>{{ $produk->namaProduk }}</td>
                                <td>{{ $produk->harga }}</td>
                                <td>{{ $produk->stok }}</td>
                                <td>{{ $produk->created_at }}</td>
                                <td><button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></td>
                            </tr>
                                @endforeach

                    </table>
                </div>


            </div>
        </div>
    </div>

    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
