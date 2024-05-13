@extends('layouts.admin.app')
@section('content')
    <section class="container-fluid py-5 px-1 px-lg-5">
        <div class="flex-centerbetween mb-4">
            <h2 class="text-dark fw-bold mb-0">Tambah Kategori Menu</h2>
        </div>
        <div class="card border-0">
            <div class="card-body col-md-6">
                <form action="{{ route('kategori-menu.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="kategoriMenu">Kategori Menu</label>
                        <input type="text" name="kategoriMenu"
                            class="form-control @error('kategoriMenu') is-invalid @enderror" id="kategoriMenu"
                            value="{{ old('kategoriMenu') }}" autofocus>
                            @error('kategoriMenu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-primary" type="submit">
                            <i class="bx bx-save"></i> Simpan Baru
                        </button>
                        <a href="{{route('kategori-menu.index')}}" class="btn btn-sm btn-light">
                            <i class="bx bx-arrow-back"></i> Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
