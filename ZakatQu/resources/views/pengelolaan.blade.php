@extends('layouts.app')

@section('content')
<div class="container mt-4 d-flex justify-content-center">
    <div class="col-md-6">
        <form
            method="POST"
            action="{{ route('data.tambah', ['username'=>request('username')]) }}"
            onsubmit="return confirm('Yakin ingin menambah data tersebut ?')"
        >
            @csrf
            <div class="mb-3">
                <label for="inputinNamamizakki" class="form-label">Nama</label>
                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    id="inputinNamamizakki"
                    required
                />
            </div>

            <div class="mb-3">
                <label for="inputinGendermuzakki" class="form-label"
                    >Gender</label
                >
                <select
                    name="gender"
                    class="form-select"
                    id="inputinGendermuzakki"
                    required
                >
                    <option value="">Pilih Gender</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="inputinJeniszakat" class="form-label"
                    >Jenis Zakat</label
                >
                <select
                    name="jenis"
                    class="form-select"
                    id="inputinJeniszakat"
                    required
                >
                    <option value="">Pilih Jenis Zakat</option>
                    <option value="Zakat Mal">Zakat Mal</option>
                    <option value="Zakat Fitrah">Zakat Fitrah</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="inputinBentukzakat" class="form-label"
                    >Bentuk Pembayaran</label
                >
                <select
                    name="bentuk"
                    class="form-select"
                    id="inputinBentukzakat"
                    required
                >
                    <option value="">Pilih Bentuk Pembayaran</option>
                    <option value="Beras">Beras (kilogram)</option>
                    <option value="Uang">Uang (rupiah)</option>
                    <option value="Emas">Emas (gram)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="inputinJumlah" class="form-label">Jumlah</label>
                <input
                    type="number"
                    name="jumlah"
                    class="form-control"
                    id="inputinJumlah"
                    required
                />
            </div>

            <div class="d-grid">
                <button type="submit" class="button-submit btn fw-bold">
                    Tambah Data
                </button>
            </div>
        </form>
    </div>
</div>
<div class="container mt-4">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tanggal</th>
                <th>Jenis</th>
                <th>Bentuk</th>
                <th>Beras (Kg)</th>
                <th>Uang (Rp)</th>
                <th>Emas (gr)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $zakat)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $zakat['nama'] }}</td>
                <td>{{ $zakat['gender'] }}</td>
                <td>{{ $zakat['tanggal'] }}</td>
                <td>{{ $zakat['jenis'] }}</td>
                <td>{{ $zakat['bentuk'] }}</td>
                <td>{{ $zakat['jumlah']['beras'] }}</td>
                <td>
                    {{ number_format($zakat['jumlah']['uang'], 0, ',', '.') }}
                </td>
                <td>{{ $zakat['jumlah']['emas'] }}</td>
                <td>
                    <form
                        action="{{ route('data.hapus', ['username'=>request('username')]) }}"
                        method="POST"
                        style="display: inline"
                        onsubmit="return confirm('Yakin ingin menghapus {{ $zakat['nama'] }}?')"
                    >
                        @csrf
                        <input
                            type="hidden"
                            name="nama"
                            value="{{ $zakat['nama'] }}"
                        />
                        <button
                            type="submit"
                            class="button-hapus btn btn-danger btn-sm"
                        >
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    .button-submit {
        color: white !important;
    }

    .button-submit {
        background: linear-gradient(90deg, #00a850, #a2ba44);
        transition: background 0.5s ease;
    }

    .button-submit:hover {
        transform: scale(1.03);
        text-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
    }
</style>

@endsection
