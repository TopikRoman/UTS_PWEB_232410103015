<nav class="navbar navbar-expand-lg custom-navbar py-3">
    <div class="container">
        <a class="navbar-brand fs-3 fw-bold d-flex align-items-center" href="#">
            <img
                src="{{ asset('img/Logo-ZakatQu.png') }}"
                alt="Logo ZakatQu"
                width="50"
                height="50"
                class="me-2"
            />
            ZakatQu
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#nabarkanan"
            aria-controls="nabarkanan"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"
                ><i class="fa-solid fa-bars" style="color: #ffffff"></i
            ></span>
        </button>

        <div
            class="collapse navbar-collapse justify-content-lg-end mt-3 mt-lg-0"
            id="nabarkanan"
        >
            <ul
                class="navbar-nav gap-3 fs-5 fw-semibold text-center text-lg-start"
            >
                @if(session()->has('username'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.tampil' , ['username'=>request('username')])}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('data.tampil' , ['username'=>request('username')])  }}">Pengelolaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.tampil', ['username'=>request('username')]) }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout.Submit') }}"
                        >Logout</a
                    >
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<style>
    .custom-navbar {
        background: linear-gradient(90deg, #00a850, #a2ba44);
        transition: background 0.5s ease;
    }

    .custom-navbar .nav-link,
    .custom-navbar .navbar-brand {
        color: white !important;
        transition: all 0.3s ease;
    }

    .custom-navbar .navbar-toggler {
        border: 2px solid white;
    }

    .custom-navbar .navbar-toggler:hover {
        background-color: rgba(255, 255, 255, 0.15);
        transform: scale(1.1);
        transition: all 0.3s ease;
    }

    .custom-navbar .nav-link:hover {
        color: #00444d !important;
        transform: scale(1.08);
        text-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
    }

    .custom-navbar .navbar-brand:hover {
        transform: scale(1.03);
        text-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
    }
</style>
