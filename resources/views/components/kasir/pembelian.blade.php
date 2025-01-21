
<x-kasir.modalpembelian :produks="$produks">tambah pembelian</x-kasir.modalpembelian>
<div class="table-responsive">
    <table id="myTable" class="table table-striped   align-middle">
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
<script>
    let table = new DataTable('#myTable');
</script>
