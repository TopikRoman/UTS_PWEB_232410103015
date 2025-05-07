@extends('layouts.login_app')

@section('content')
<div
    class="container d-flex justify-content-center align-items-center"
    style="height: 100vh"
>
    <div class="col-md-8 col-lg-6">
        <div class="card shadow p-4">
            <div class="row align-items-center">
                <div
                    class="col-md-6 d-flex justify-content-center mb-4 mb-md-0"
                >
                    <img
                        src="img\Gambar-Login.png"
                        alt="GambarLogin"
                        class="img-fluid"
                        style="max-width: 80%; height: auto"
                    />
                </div>

                <div class="col-md-6">
                    <h3 class="text-center mb-4">Login ZakatQu</h3>
                    <form method="POST" action="{{ route('login.Submit')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="inputinUsername" class="form-label"
                                >Username</label
                            >
                            <input
                                type="text"
                                name="username"
                                class="form-control"
                                id="inputinUsername"
                                required
                            />
                        </div>

                        <div class="mb-3">
                            <label for="inputinPassword" class="form-label"
                                >Password</label
                            >
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                id="inputinPassword"
                                required
                            />
                        </div>

                        <div class="d-grid">
                            <button
                                type="submit"
                                class="button-submit btn button text-white fw-bold"
                            >
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
