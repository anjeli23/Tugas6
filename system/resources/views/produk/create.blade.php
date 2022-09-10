@extends('template2.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Produk
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/produk') }}" method="post">
                            @csrf
                            <div class="form-grup">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="" class="control-label">Harga</label>
                                        <input type="text" class="form-control" name="harga">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="" class="control-label">Berat</label>
                                        <input type="text" class="form-control" name="berat">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="" class="control-label">Stok</label>
                                        <input type="text" class="form-control" name="stok">
                                    </div>
                                </div>

                                <button class="btn btn-dark float-right mt-3"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
