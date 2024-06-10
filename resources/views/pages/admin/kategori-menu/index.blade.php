@extends('layouts.admin.app')
@section('content')
    <section class="container-fluid py-5 px-1 px-lg-5">
        <div class="flex-centerbetween mb-4">
            <h2 class="text-dark fw-bold mb-0">Kategori Menu</h2>
            <a href="{{ route('kategori-menu.create') }}" class="btn btn-sm btn-primary">
                <i class="bx bx-plus"></i> Tambah Kategori Menu
            </a>
        </div>
        @if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
        @endif
        <div class="card border-0">
            <div class="card-body">
                <div class="table-responsive col-md-6">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Kategori Menu</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategorimenus as $item)
                                <tr class="align-middle">
                                    <td>{{ $item->kategoriMenu }}</td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-1">
                                            <a href="{{route('kategori-menu.edit',$item->id)}}" class="btn btn-warning btn-sm py-1 px-3 rounded-1 text-white">
                                                <i class="bx bx-edit"></i> Edit
                                            </a>
                                            <form action="{{route('kategori-menu.destroy',$item->id)}}" method="POST">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-light btn-sm py-1 px-3 rounded-1">
                                                    <i class="bx bx-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
