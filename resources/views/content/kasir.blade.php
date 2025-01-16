@extends('home')

@section('konten')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-12 my-3">
                <div class="card w-100 p-2 border-primary my-3">
                    <div data-mdb-input-init class="form-outline mb-1">
                      nonota <input type="text" id="form2Example1" name="username" class="form-control" />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-1">
                      tanggal <input type="text" id="form2Example1" name="username" class="form-control" />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-1">
                      kasir<input type="text" id="form2Example1" name="username" class="form-control" />
                    </div>
                </div>

                <div class="card w-100 p-2 border-primary my-3">
                    <div data-mdb-input-init class="form-outline mb-1">
                      nonota <input type="text" id="form2Example1" name="username" class="form-control" />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-1">
                      tanggal <input type="text" id="form2Example1" name="username" class="form-control" />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-1">
                      kasir<input type="text" id="form2Example1" name="username" class="form-control" />
                    </div>
                </div>
                
            </div>
            <div class="col-md-8 col-12 my-3">
                <button class="btn btn-primary mb-2 rounded-5">add pembelian</button>
                <div class="table-responsive">
                    <table class="table table-striped   align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>kode</th>
                                <th>nama</th>
                                <th>harga</th>
                                <th>jumlah</th>
                                <th>subtotal</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr class="">
                                <td scope="row">Item</td>
                                <td>Item</td>
                                <td>Item</td>
                                <td>Item</td>
                                <td>Item</td>
                                <td><button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></td>
                            </tr>
                    </table>
                </div>

                <div class=" bg-primary text-light card p-2 text-end">
                    <h4>total : 100000</h4>
                </div>

                <div class="my-2 w-100 d-md-flex">
                    <div class="wrapper-1 w-100 w-md-50">
                        <i class="bi bi-keyboard"></i> catatan tansaksi
                        <textarea name="" id="" cols="20" rows="5" class="w-100 "></textarea>
                        <button class=" btn btn-success rounded-5">save</button>
                    </div>

                    <div class="wrapper-2 w-100 w-md-50">
                        <div class="w-100 d-flex my-3 mx-2">
                            bayar : <input class="form-control w-25 mx-2" type="text" name="" id="">
                            kembalian : <input class="form-control w-25 mx-2" type="text" name="" id="">
                        </div>
                        <div class="w-100 d-flex">
                            <button class="w-50 btn btn-warning text-light mx-2 rounded-5">cetak</button>
                            <button class="w-50 btn btn-primary text-light mx-2 rounded-5">simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
