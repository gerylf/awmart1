@extends('Layout.layout')
@section('content')
@include('Component.navbar')
<div class="container">
    <h1>Data Produk</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Kategori</th>
                <th scope="col">Deskripsi Kategori </th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>K001</td>
                <td>Pakian manusia</td>
                <td><Button class="btn btn-primary"> Edit</Button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>K002</td>
                <td>Makanan Manusia </td>
                <td><Button class="btn btn-primary"> Edit</Button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>K003</td>
                <td>kendaraan umat manusia</td>
                <td><Button class="btn btn-primary"> Edit</Button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection