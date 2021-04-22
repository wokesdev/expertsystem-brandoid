<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Rabun Dekat</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 my-5">
                <div class="card">
                    <div class="card-header">
                        Cek Rabun Dekat
                    </div>
                    <div class="card-body">
                        @if (session('status') === 'Mungkin')
                            <div class="alert alert-warning">
                                <b>Anda mungkin masih belum terkena rabun dekat.</b>
                                <br>
                                Namun ada kemungkinan kecil bahwa Anda terkena rabun dekat, karena itu, sebaiknya Anda tetap menjaga pola hidup Anda agar tidak terkena rabun dekat.
                            </div>
                        @elseif (session('status') === 'Kena')
                            <div class="alert alert-danger">
                                <b>Kemungkinan besar Anda sudah terkena rabun dekat.</b>
                                <br>
                                Sebaiknya, Anda segera pergi ke dokter untuk memeriksakan kondisi mata Anda agar mendapatkan penanganan lebih lanjut.
                            </div>
                        @elseif (session('status') === 'Tidak')
                            <div class="alert alert-success">
                                <b>Kemungkinan besar Anda tidak terkena rabun dekat.</b>
                                <br>
                                Namun, tetap saja sebaiknya Anda menjaga pola hidup Anda serta periksakan mata Anda secara rutin.
                            </div>
                        @endif

                        <form action="{{ route('check.rabun-dekat') }}" method="post" id="cek-rabun-dekat">
                            @csrf
                            <div class="form-group">
                                <label for="sulit">Apakah Anda sering kesulitan untuk melihat objek dekat?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sulit" id="sulit1" value="1" required>
                                    <label class="form-check-label" for="sulit1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sulit" id="sulit2" value="0">
                                    <label class="form-check-label" for="sulit2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sipit">Apakah Anda sering menyipitkan mata untuk melihat sesuatu agar lebih jelas?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sipit" id="sipit1" value="1" required>
                                    <label class="form-check-label" for="sipit1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sipit" id="sipit2" value="0">
                                    <label class="form-check-label" for="sipit2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tegang">Apakah mata Anda sering terasa tegang, sakit, atau bahkan terbakar?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tegang" id="tegang1" value="1" required>
                                    <label class="form-check-label" for="tegang1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tegang" id="tegang2" value="0">
                                    <label class="form-check-label" for="tegang2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lelah">Apakah mata Anda sering terasa lelah atau bahkan kepala Anda terasa sakit ketika melihat objek dekat terlalu lama?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lelah" id="lelah1" value="1" required>
                                    <label class="form-check-label" for="lelah1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lelah" id="lelah2" value="0">
                                    <label class="form-check-label" for="lelah2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="keturunan">Apakah ayah atau ibu Anda menderita rabun jauh?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="keturunan" id="keturunan1" value="1" required>
                                    <label class="form-check-label" for="keturunan1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="keturunan" id="keturunan2" value="0">
                                    <label class="form-check-label" for="keturunan2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="usia">Apakah Anda berusia di atas 40 tahun?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="usia" id="usia1" value="1" required>
                                    <label class="form-check-label" for="usia1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="usia" id="usia2" value="0">
                                    <label class="form-check-label" for="usia2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="penyakit">Apakah Anda menderita diabetes, kanker di sekitar mata, gangguan pada pembuluh darah di retina, atau sindrom mata kecil (micropthalmia)?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="penyakit" id="penyakit1" value="1" required>
                                    <label class="form-check-label" for="penyakit1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="penyakit" id="penyakit2" value="0">
                                    <label class="form-check-label" for="penyakit2">Tidak</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" form="cek-rabun-dekat">Cek Sekarang</button>
                        <a class="btn btn-secondary" href="{{ config('app.url') }}">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
