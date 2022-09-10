@extends('template2.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Edit Data User
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/user', $user->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-grup">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grup">
                                        <label for="" class="control-label">Username</label>
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for="" class="control-label">Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for="" class="control-label">Password</label>
                                    <input type="text" class="form-control" name="password">
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
