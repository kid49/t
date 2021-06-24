
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Footer -->
@extends('backend.konten')

@section('kontenku')



<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Setting</h1>
    @if (sizeof($set) == 0)
        <a href="{{route('setting.create')}}" class="btn btn-primary btn-icon-split btn-sm">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Setting</span>
        </a>
    @endif
    
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-4 mb-4">
<table class="table table-striped table-bordered table-responsive-lg">
    <thead>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Url Instagram</th>
        <th>Url Facebook</th>
        <th>Url Gitlab</th>
        <th>Url Github</th>
        <th>Url Tiktok</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        @foreach ($set as $item)
        <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->nomor_hp}}</td>
            <td>{{$item->url_ig}}</td>
            <td>{{$item->url_fb}}</td>
            <td>{{$item->url_gitlab}}</td>
            <td>{{$item->url_github}}</td>
            <td>{{$item->url_tiktok}}</td>
            <td>{{substr($item->deskripsi, 0 , 30)}}</td>
            <td>
                <a href="{{route('setting.edit', $item->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit</a>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
</div>
</div>



</div>
</div>


@endsection