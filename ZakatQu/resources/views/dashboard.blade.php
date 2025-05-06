@extends ('layouts.app')

@section('content')
<div class="containerDashboard">
    @if(session()->has('username'))
    <div class="containergreetings mt-3 mb-3 fs-4">
        <div class="text-center fw-bold">SELAMAT DATANG, {{ $_GET['username'] }}!</div>
    </div>
    @endif

    <p class="text-center fs-1 fw-bold">Statistik Penerimaan Zakat Bulan Puasa</p>

    <div class="containerkartu row justify-content-center">
        <div class="card col-md-3 m-3 text-center" style="width: 18rem;">
            <img src="img/Gambar-Beras.png" class="card-img-top" alt="Zakat Beras">
            <div class="card-body">
                <h5 class="card-title">Zakat Beras</h5>
                <p class="card-text fs-5 fw-bold">{{ $totalBeras }} Kg</p>
            </div>
        </div>
        <div class="card col-md-3 m-3 text-center" style="width: 18rem;">
            <img src="img/Gambar-Uang.png" class="card-img-top" alt="Zakat Uang">
            <div class="card-body">
                <h5 class="card-title">Zakat Uang</h5>
                <p class="card-text fs-5 fw-bold">Rp {{ number_format($totalUang, 0, ',', '.') }}</p>
            </div>
        </div>
        <div class="card col-md-3 m-3 text-center" style="width: 18rem;">
            <img src="img/Gambar-Emas.png" class="card-img-top" alt="Zakat Emas">
            <div class="card-body">
                <h5 class="card-title">Zakat Emas</h5>
                <p class="card-text fs-5 fw-bold">{{ $totalEmas }} Gram</p>
            </div>
        </div>
    </div>
</div>

<style>
.card-img-top {
    height: 150px;
    object-fit: cover;
}

.containerDashboard {
    min-height: calc(100vh - 200px);
}
</style>
@endsection
