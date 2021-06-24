
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Footer -->
@extends('backend.konten')

@section('kontenku')



<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Skill</h1>
        <a href="{{route('skill.create')}}" class="btn btn-primary btn-icon-split btn-sm">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Skill</span>
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
        <th>Menguasai</th>
        <th>Gambar</th>
        <th width="10%">Aksi</th>
    </thead>
    <tbody>
        @foreach ($skill as $item =>$hasil)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$hasil->nama}}</td>
            <td>
                @foreach ($hasil->menguasai as $item)
                    <ul>
                        <li>
                            {{$item->nama}}
                        </li>
                    </ul>
                @endforeach
            </td>
            <td>
            <img src="{{asset($hasil->gambar)}}" alt="{{$hasil->nama}}" width="200px">
            </td>
            <td>
                <form action="{{route('skill.destroy', $hasil->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{route('skill.edit', $hasil->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</button>
                
                </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
{{$skill->links()}}
</div>
</div>



</div>
</div>

@include('sweetalert::alert')


@endsection