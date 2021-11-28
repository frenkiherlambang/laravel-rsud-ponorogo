<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RSUD Ponorogo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-3">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
            <a href="/jadwaldokter">Kembali ke Jadwal Dokter</a>
        </div>
        @endif
        <h2> Tambah Jadwal Dokter</h2>
        <form action="/tambah-jadwal" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="mb-3">
            <label class="form-label">Nama Dokter</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Dokter">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Spesialisasi</label>
            <input type="text" name="spesialisasi" class="form-control" placeholder="Spesialisasi">
        </div>
        <div class="mb-3">
            <label class="form-label">Jam Mulai Praktek</label>
            <input type="time" name="mulai_jam_praktek" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Jam Akhir Praktek</label>
            <input type="time" name="akhir_jam_praktek" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan Jadwal</button>
        </form>

    </div>

</body>

</html>
