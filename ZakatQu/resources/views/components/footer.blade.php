<footer class="custom-footer text-white text-center py-4 mt-5">
    <div class="container">
        <p class="mb-1">© {{ date('Y') }} ZakatQu - Berbagi dengan Ikhlas</p>

        <div class="mb-2">
            <a
                href="https://facebook.com"
                class="text-white mx-2"
                target="_blank"
                ><i class="fab fa-facebook fa-lg"></i
            ></a>
            <a
                href="https://twitter.com"
                class="text-white mx-2"
                target="_blank"
                ><i class="fab fa-twitter fa-lg"></i
            ></a>
            <a
                href="https://instagram.com"
                class="text-white mx-2"
                target="_blank"
                ><i class="fab fa-instagram fa-lg"></i
            ></a>
            <a href="mailto:zakatqu@example.com" class="text-white mx-2"
                ><i class="fas fa-envelope fa-lg"></i
            ></a>
        </div>
    </div>
</footer>

<style>
    .custom-footer {
        background: linear-gradient(90deg, #00a850, #a2ba44);
        transition: background 0.5s ease;
    }

    .custom-footer a:hover {
        color: #00444d !important;
        transform: scale(1.1);
        transition: all 0.3s ease;
    }
</style>
