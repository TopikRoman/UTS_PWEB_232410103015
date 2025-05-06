@extends ('layouts.app')

@section('content')
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
                <td>{{ number_format($zakat['jumlah']['uang'], 0, ',', '.') }}</td>
                <td>{{ $zakat['jumlah']['emas'] }}</td>
                <td>
                    <form action="{{ route('data.hapus') }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus {{ $zakat['nama'] }}?')">
                        @csrf
                        <input type="hidden" name="nama" value="{{ $zakat['nama'] }}">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
