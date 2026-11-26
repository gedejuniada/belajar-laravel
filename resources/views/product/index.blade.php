@extends('layout')

@section('title')
Product List
@endsection

@section('breadcrumb')
@parent <a href="{!! url('/product') !!}">Product</a>
@endsection
@section('content')
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Stok</th>
    </tr>
     @forelse ($products as $i => $p)
    <tr>
        <td>{{ $i+1 }}</td>
        <td>{{ $p['nama'] }}</td>
        <td>{{ $p['stok'] }}</td>
    </tr>
    @empty
    <tr>
        <td colspan="3">
            Data Kosong
        </td>
    </tr>
    @endforelse
</table>
@endsection
