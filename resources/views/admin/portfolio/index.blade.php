
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Footer -->
@extends('backend.konten')

@section('kontenku')



<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
        <a href="{{route('portfolio.create')}}" class="btn btn-primary btn-icon-split btn-sm">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Portfolio</span>
        </a>
    
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-4 mb-4">
<table class="table table-striped table-bordered table-responsive-lg">
    <thead class="bg-gradient-primary text-white">
        <th>#</th>
        <th>Nama</th>
        <th>Url</th>
        <th>Gambar</th>
        <th width="12%">Aksi</th>
    </thead>
    <tbody>
        @foreach ($port as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->link}}</td>
            <td>
                <img src="{{asset($item->gambar)}}" height="100">
            </td>
            <td>
                <form action="{{route('portfolio.destroy', $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{route('portfolio.edit', $item->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</button>
                
                </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
{{$port->links()}}
</div>
</div>



</div>
</div>


@endsection