
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Footer -->
@extends('backend.konten')

@section('kontenku')



<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Skill</h1>
<a href="{{route('skill.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>

</div>

<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-4 mb-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Skill</h6>
        </div>

        <div class="card-body">
            <form action="{{route('skill.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Skill</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="nama" placeholder="Nama Skill">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Menguasai</label>
                    <div class="col-sm-10">
                    <select multiple class="form-control" multiple="multiple" name="menguasai[]" id="exampleFormControlSelect2">
                        @foreach ($menguasai as $item)
                        
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Masukkan Gambar</label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
                    </div>
                </div>
                <div class="form-group row float-right my-2 ">
                    <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Tambah Skill</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    })

</script>



@endsection