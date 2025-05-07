<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{

    // Data Users
    private $users = [
        'taufiq' => [
            'password' => '12345',
            'gender' => 'laki-laki',
        ],
        'admin' => [
            'password' => 'admin123',
            'gender' => 'laki-laki',
        ],
        'adminakhwat' => [
            'password' => 'admin456 ',
            'gender' => 'perempuan',
        ],
    ];

    // Data zakat

    public $dataZakat = [
        [
            'nama' => 'Ahmad Fauzi',
            'gender' => 'Laki-laki',
            'tanggal' => '2025-03-25',
            'jenis' => 'Zakat Fitrah',
            'jumlah' => ['beras' => 2.5, 'uang' => 0, 'emas' => 0],
            'bentuk' => 'Beras'
        ],
        [
            'nama' => 'Siti Aisyah',
            'gender' => 'Perempuan',
            'tanggal' => '2025-03-27',
            'jenis' => 'Zakat Mal',
            'jumlah' => ['beras' => 0, 'uang' => 2000000, 'emas' => 10],
            'bentuk' => 'Uang dan Emas'
        ],
        [
            'nama' => 'Fajar Hidayat',
            'gender' => 'Laki-laki',
            'tanggal' => '2025-04-01',
            'jenis' => 'Zakat Fitrah',
            'jumlah' => ['beras' => 2.5, 'uang' => 0, 'emas' => 0],
            'bentuk' => 'Beras'
        ],
        [
            'nama' => 'Nur Aini',
            'gender' => 'Perempuan',
            'tanggal' => '2025-04-03',
            'jenis' => 'Zakat Mal',
            'jumlah' => ['beras' => 0, 'uang' => 500000, 'emas' => 0],
            'bentuk' => 'Uang'
        ],
        [
            'nama' => 'Rizky Ananda',
            'gender' => 'Laki-laki',
            'tanggal' => '2025-03-30',
            'jenis' => 'Zakat Fitrah',
            'jumlah' => ['beras' => 0, 'uang' => 35000, 'emas' => 0],
            'bentuk' => 'Uang'
        ],
        [
            'nama' => 'Dewi Sartika',
            'gender' => 'Perempuan',
            'tanggal' => '2025-04-02',
            'jenis' => 'Zakat Mal',
            'jumlah' => ['beras' => 0, 'uang' => 3000000, 'emas' => 5],
            'bentuk' => 'Uang dan Emas'
        ],
        [
            'nama' => 'Hasan Basri',
            'gender' => 'Laki-laki',
            'tanggal' => '2025-04-04',
            'jenis' => 'Zakat Fitrah',
            'jumlah' => ['beras' => 2.5, 'uang' => 0, 'emas' => 0],
            'bentuk' => 'Beras'
        ],
        [
            'nama' => 'Lina Marlina',
            'gender' => 'Perempuan',
            'tanggal' => '2025-03-29',
            'jenis' => 'Zakat Mal',
            'jumlah' => ['beras' => 0, 'uang' => 1000000, 'emas' => 0],
            'bentuk' => 'Uang'
        ],
        [
            'nama' => 'Bayu Saputra',
            'gender' => 'Laki-laki',
            'tanggal' => '2025-03-28',
            'jenis' => 'Zakat Mal',
            'jumlah' => ['beras' => 0, 'uang' => 1500000, 'emas' => 3],
            'bentuk' => 'Uang dan Emas'
        ],
        [
            'nama' => 'Rahmawati',
            'gender' => 'Perempuan',
            'tanggal' => '2025-04-05',
            'jenis' => 'Zakat Fitrah',
            'jumlah' => ['beras' => 0, 'uang' => 40000, 'emas' => 0],
            'bentuk' => 'Uang'
        ],
        [
            'nama' => 'Ilham Maulana',
            'gender' => 'Laki-laki',
            'tanggal' => '2025-04-06',
            'jenis' => 'Zakat Fitrah',
            'jumlah' => ['beras' => 2.5, 'uang' => 0, 'emas' => 0],
            'bentuk' => 'Beras'
        ],
        [
            'nama' => 'Nadia Rahma',
            'gender' => 'Perempuan',
            'tanggal' => '2025-04-07',
            'jenis' => 'Zakat Mal',
            'jumlah' => ['beras' => 0, 'uang' => 450000, 'emas' => 0],
            'bentuk' => 'Uang'
        ],
        [
            'nama' => 'Hendri Kurniawan',
            'gender' => 'Laki-laki',
            'tanggal' => '2025-04-08',
            'jenis' => 'Zakat Mal',
            'jumlah' => ['beras' => 0, 'uang' => 0, 'emas' => 15],
            'bentuk' => 'Emas'
        ],
        [
            'nama' => 'Maya Sari',
            'gender' => 'Perempuan',
            'tanggal' => '2025-04-09',
            'jenis' => 'Zakat Fitrah',
            'jumlah' => ['beras' => 0, 'uang' => 35000, 'emas' => 0],
            'bentuk' => 'Uang'
        ],
        [
            'nama' => 'Teguh Santoso',
            'gender' => 'Laki-laki',
            'tanggal' => '2025-04-10',
            'jenis' => 'Zakat Fitrah',
            'jumlah' => ['beras' => 2.5, 'uang' => 0, 'emas' => 0],
            'bentuk' => 'Beras'
        ],
    ];

    // Tentang perdashboardan

    public function tampilkanDashboard(Request $data)
    {
        $namaUser = $data->query('username', $data->session()->get('username', 'pengunjung'));

        $jumlahZakat = session('dataZakat', []);

        $totalBeras = 0;
        $totalUang = 0;
        $totalEmas = 0;

        foreach ($jumlahZakat as $zakat) {
            $totalBeras += $zakat['jumlah']['beras'];
            $totalUang  += $zakat['jumlah']['uang'];
            $totalEmas  += $zakat['jumlah']['emas'];
        }

        return view('dashboard', compact('namaUser', 'totalBeras', 'totalUang', 'totalEmas'));
    }


    // Tentang perakunan

    public function tampilkanLogin()
    {
        return view('login');
    }

    public function tampilkanProfile(Request $dataProfileuser)
    {
        $username = $dataProfileuser->query('username', $dataProfileuser->session()->get('username', 'pengunjung'));
        $gender = 'tidak diketahui';

        if ($username && isset($this->users[$username])) {
            $gender = $this->users[$username]['gender'];
        }

        return view('profile', compact('username', 'gender'));
    }

    public function loginSubmit(Request $dataLogin)
    {
        $username = $dataLogin->input('username');
        $password = $dataLogin->input('password');

        if (
            isset($this->users[$username]) &&
            $this->users[$username]['password'] === $password
            ) {
                $dataLogin->session()->put('username', $username);
                return redirect()->route('dashboard.tampil', compact('username'));
            } else {
                return back()->withErrors(['login' => 'Username atau password salah.']);
            }
    }

    public function logoutSubmit(Request $dataLogin)
    {
        $dataLogin->session()->forget('username');
        return redirect()->route('dashboard.tampil');
    }

    // Tentang perdataan (CRD)

    public function tampilkanData(Request $penerimaanZakat)
    {
        if (!session()->has('dataZakat')) {
            session(['dataZakat' => $this->dataZakat]);
        }

        $data = session('dataZakat', []);

        $parameterQuery = $penerimaanZakat->query();

        return view('pengelolaan', ['data' => $data, 'parameterQuery' => $parameterQuery]);
    }


    public function hapusData(Request $dataAkandihapus)
    {
        $nama = $dataAkandihapus->input('nama');
        $dataZakat = session('dataZakat', []);

        $index = array_search($nama, array_column($dataZakat, 'nama'));

        if ($index !== false) {
            unset($dataZakat[$index]);
            $dataZakat = array_values($dataZakat);
            session(['dataZakat' => $dataZakat]);
        }

        $queryParameter = $dataAkandihapus->query();
        return redirect()->route('data.tampil', $queryParameter)->with('success', 'Data berhasil dihapus');
    }


    public function tambahData(Request $dataBaru)
    {
        $nama = $dataBaru->input('nama');
        $gender = $dataBaru->input('gender');
        $jenis = $dataBaru->input('jenis');
        $bentuk = $dataBaru->input('bentuk');
        $jumlah = $dataBaru->input('jumlah');
        $tanggal = Carbon::now()->format('Y-m-d');

        $dataZakat = session('dataZakat', []);

        $jumlahZakat = ['beras' => 0, 'uang' => 0, 'emas' => 0];
        if ($bentuk === 'Beras') {
            $jumlahZakat['beras'] = (int) $jumlah;
        } elseif ($bentuk === 'Uang') {
            $jumlahZakat['uang'] = (int) $jumlah;
        } elseif ($bentuk === 'Emas') {
            $jumlahZakat['emas'] = (int) $jumlah;
        }

        $dataZakat[] = [
            'nama' => $nama,
            'gender' => $gender,
            'jenis' => $jenis,
            'bentuk' => $bentuk,
            'tanggal' => $tanggal,
            'jumlah' => $jumlahZakat
        ];

        session(['dataZakat' => $dataZakat]);

        $Qparameter = $dataBaru->query();
        return redirect()->route('data.tampil', $Qparameter)->with('success', 'Data berhasil ditambahkan');
    }

    }
