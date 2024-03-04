<style>
    .navbar-brand {
        border-right: 1px solid #ccc; /* Atur lebar dan warna border sesuai kebutuhan */
        padding-right: 10px; /* Atur jarak antara teks dan border */
        padding-left: 10px; /* Atur jarak antara teks dan border */
        border-top: 1px solid #ccc; /* Atur border di bagian atas */
        border-bottom: 1px solid #ccc; /* Atur border di bagian bawah */
        border-left: 1px solid #ccc; /* Atur border di bagian bawah */
    }

    /* Styling untuk tautan terakhir */
    .navbar-brand:last-child {
        border-right: none; /* Hilangkan border pada tautan terakhir */
    }
</style>

<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            {{-- <a class="navbar-brand" href="/operator/as">Cheklist As Simply</a> --}}
            <a class="navbar-brand" href="{{ Auth::user()->role == 'admin' ? '/admin' : '/operator' }}">Home</a>
            <a class="navbar-brand" href="{{ Auth::user()->role == 'admin' ? '/admin/as' : '/operator/as' }}">Awal Shift</a>
            <a class="navbar-brand" href="{{ Auth::user()->role == 'admin' ? '/admin/cip' : '/operator/cip' }}">Cheklist CIP</a>
            <a class="navbar-brand" href="{{ Auth::user()->role == 'admin' ? '/admin/ciw' : '/operator/ciw' }}">Cheklist Weekly</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                </ul>
                <a href='/logout'>
                    <button class="btn btn-outline-danger" type="submit">Logout</button>
                </a>
            </div>
        </div>
    </nav>
</div>
