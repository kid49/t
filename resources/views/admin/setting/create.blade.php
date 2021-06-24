
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Footer -->
@extends('backend.konten')

@section('kontenku')



<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Setting</h1>
<a href="{{route('setting.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>

</div>

<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-4 mb-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Setting</h6>
        </div>

        <div class="card-body">
            <form action="{{route('setting.store')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Website</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="nama" placeholder="Nama Website">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="inputPassword3" placeholder="Alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomor_hp" id="inputPassword3" placeholder="Nomor Telepon">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                    <textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsi"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Url Instagram</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="url_ig" id="inputPassword3" placeholder="Url Instagram">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Url Facebook</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="url_fb" id="inputPassword3" placeholder="Url Facebook">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Url Gitlab</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="url_gitlab" id="inputPassword3" placeholder="Url Gitlab">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Url Github</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="url_github" id="inputPassword3" placeholder="Url Github">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Url Tiktok</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="url_tiktok" id="inputPassword3" placeholder="Url Tiktok">
                    </div>
                </div>
                <div class="form-group row float-right my-2 ">
                    <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Tambah Setting</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
</div>
</div>
</div>


@endsection