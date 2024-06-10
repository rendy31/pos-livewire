@extends('layouts.admin.app')
@section('content')
    <section class="container-fluid py-5 px-1 px-lg-5">
        <div class="flex-centerbetween mb-4">
            <h2 class="text-dark fw-bold mb-0">Tambah Menu</h2>
        </div>
        <div class="card border-0">
            <div class="card-body">
                <form action="{{ route('menu.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="menu">Nama Menu</label>
                        <input type="text" name="menu" class="form-control @error('menu') is-invalid @enderror"
                            id="menu" value="{{ old('menu') }}" autofocus>
                        @error('menu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category">Kategori</label>
                        <select id="category" name="kategori_menu_id" class="form-select">
                            @foreach ($kategorimenus as $item)
                                <option value={{$item->id}}>{{$item->kategoriMenu}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga">Harga Menu</label>
                        <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror"
                            id="harga" value="{{ old('harga') }}" autofocus>
                        @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gambarMenu">Gambar Menu</label>
                        <input type="file" name="gambarMenu" accept="image/*" id="gambarMenu" class="form-control">
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-primary" type="submit">
                            <i class="bx bx-save"></i> Simpan Baru
                        </button>
                        <a href="{{route('menu.index')}}" class="btn btn-sm  btn-light">
                            <i class="bx bx-arrow-back"></i> Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
