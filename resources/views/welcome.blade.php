<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pilih Penyakit Rabun</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 my-5">
                <div class="card">
                    <div class="card-header">
                        Pilih Diagnosa Awal
                    </div>
                    <div class="card-body">
                        {{-- @if (session('status') === 'Mungkin')
                            <div class="alert alert-warning">
                                <b>Anda mungkin masih belum terkena rabun jauh.</b>
                                <br>
                                Namun ada kemungkinan kecil bahwa Anda terkena rabun jauh, karena itu, sebaiknya Anda tetap menjaga pola hidup Anda agar tidak terkena rabun jauh.
                            </div>
                        @elseif (session('status') === 'Kena')
                            <div class="alert alert-danger">
                                <b>Kemungkinan besar Anda sudah terkena rabun jauh.</b>
                                <br>
                                Sebaiknya, Anda segera pergi ke dokter untuk memeriksakan kondisi mata Anda agar mendapatkan penanganan lebih lanjut.
                            </div>
                        @elseif (session('status') === 'Tidak')
                            <div class="alert alert-success">
                                <b>Kemungkinan besar Anda tidak terkena rabun jauh.</b>
                                <br>
                                Namun, tetap saja sebaiknya Anda menjaga pola hidup Anda serta periksakan mata Anda secara rutin.
                            </div>
                        @endif --}}

                        <form action="{{ route('check.penyakit') }}" method="post" id="pilih-penyakit">
                            @csrf
                            <div class="form-group" id="penyakit">
                                <label for="penyakit">Kira-kira penyakit rabun manakah yang Anda alami?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="penyakit" id="penyakit1" value="rabun_jauh" required>
                                    <label class="form-check-label" for="penyakit1">Rabun Jauh</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="penyakit" id="penyakit2" value="rabun_dekat">
                                    <label class="form-check-label" for="penyakit2">Rabun Dekat</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="penyakit" id="penyakit3" value="rabun_senja">
                                    <label class="form-check-label" for="penyakit3">Rabun Senja</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" form="pilih-penyakit">Pilih</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
