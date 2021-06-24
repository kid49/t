
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Footer -->
@extends('backend.konten')

@section('kontenku')



<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kontak User</h1>
    
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-4 mb-4">
<table class="table table-striped table-bordered table-responsive-lg">
    <thead>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan User</th>
    </thead>
    <tbody>
        @foreach ($kontak as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->pesan}}</td>
            
        </tr>
            
        @endforeach
    </tbody>
</table>

{{$kontak->links()}}
</div>
</div>



</div>
</div>


@endsection