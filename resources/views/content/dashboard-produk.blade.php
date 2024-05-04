@extends ('Layout.layout')
@section('content')
@include('Component.navbar')
<div class="container">
    <h1>Data Produk</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Produk</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Kategori Produk</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>P001</td>
                <td>Baju Baru</td>
                <td>K001</td>
                <td><Button class="btn btn-primary"> Edit</Button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>P002</td>
                <td>Cilor</td>
                <td>K002</td>
                <td><Button class="btn btn-primary"> Edit</Button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>P001</td>
                <td>Xenia</td>
                <td>k003</td>
                <td><Button class="btn btn-primary"> Edit</Button></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection