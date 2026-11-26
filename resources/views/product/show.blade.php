<div>
    <h3>Data Product</h3>
    <ul>
        <li>Nama : {{ $nama }}</li>
        <li>Harga : {{ $harga }}</li>
        @if ($jumlah == 0)
            <li>Jumlah : Stok Kosong</li>
        @else
            <li>Jumlah : {{ $jumlah }}</li>
        @endif

        {{-- Cara Lain --}}
        {{-- <li>Jumlah : {{ $jumlah == 0 ? "Stok Kosong" : $jumlah }}</li> --}}
    </ul>
</div>
