@extends('layouts.admin.app')
@section('content')
    <section class="container-fluid py-5 px-1 px-lg-5">
        <div class="row g-4">
            <h2 class="text-dark fw-bold mb-4">Order List</h2>
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-4">
                        <i class='bx bxs-food-menu fs-1 text-primary'></i>
                        <h4 class="text-dark mb-0 mt-3">20 Menu</h4>
                        <p class="text-secondary mb-0">Jumlah Menu Yang Ada</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-4">
                        <i class='bx bx-money fs-1 text-primary'></i>
                        <h4 class="text-dark mb-0 mt-3">Rp. 3,002,000</h4>
                        <p class="text-secondary mb-0">Pendapatan Hari Ini</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-4">
                        <i class='bx bx-male-female fs-1 text-primary'></i>
                        <h4 class="text-dark mb-0 mt-3">30 Order</h4>
                        <p class="text-secondary mb-0">Order Hari Ini</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-4">
                        <i class='bx bxs-user-pin fs-1 text-primary'></i>
                        <h4 class="text-dark mb-0 mt-3">4 Kasir</h4>
                        <p class="text-secondary mb-0">Jumlah Kasir</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
