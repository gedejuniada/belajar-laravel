<div>
    {{-- kalo pake post error --}}
    <form action="{!! url('pelanggan/update') !!}" method="GET">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ $nama }}">
        </div>
        <button type="submit">Update Profile</button>
    </form>
</div>
@yield('extra')