@extends ('layouts.app')

@section('content')
<div class="container centered-container">
    <div class="card shadow p-4" style="width: 30rem">
        <div class="card-body">
            <h4 class="card-title text-center mb-4">
                <i class="fa-solid fa-id-card me-2"></i>Profil Pengguna
            </h4>

            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex align-items-center">
                    <i class="fa-solid fa-user me-3 text-primary"></i>
                    <span
                        ><strong>Username:</strong> {{ $_GET['username']
                        }}</span
                    >
                </li>
                <li class="list-group-item d-flex align-items-center">
                    <i class="fa-solid fa-venus-mars me-3 text-primary"></i>
                    <span><strong>Jenis Kelamin:</strong> {{ $gender }}</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                    <i class="fa-solid fa-mosque me-3 text-primary"></i>
                    <span><strong>Tempat Tugas:</strong> Masjid An-Nur</span>
                </li>
            </ul>

            <div class="mt-4 d-flex justify-content-center">
                <a
                    href="{{ route('dashboard.tampil', ['username'=>request('username')]) }}"
                    class="btn btn-success me-2"
                >
                    Kembali ke Dashboard
                </a>

                <form action="{{ route('logout.Submit') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .centered-container {
        min-height: calc(100vh - 200px);
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

@endsection
