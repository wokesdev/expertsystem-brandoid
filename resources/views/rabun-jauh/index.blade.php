<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Rabun Jauh</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 my-5">
                <div class="card">
                    <div class="card-header">
                        Cek Rabun Jauh
                    </div>
                    <div class="card-body">
                        @if (session('status') === 'Mungkin')
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
                        @endif

                        <form action="{{ route('check.rabun-jauh') }}" method="post" id="cek-rabun-jauh">
                            @csrf
                            <div class="form-group">
                                <label for="kepala">Apakah Anda tiba-tiba merasa kepala Anda menjadi lebih sakit ketika mata bekerja berlebihan?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kepala" id="kepala1" value="1" required>
                                    <label class="form-check-label" for="kepala1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kepala" id="kepala2" value="0">
                                    <label class="form-check-label" for="kepala2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lelah">Apakah Anda tiba-tiba merasa mata Anda menjadi lebih lelah ketika mata bekerja berlebihan?</label>
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
                                <label for="kedip">Apakah Anda tiba-tiba merasa menjadi lebih sering mengedipkan mata?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kedip" id="kedip1" value="1" required>
                                    <label class="form-check-label" for="kedip1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kedip" id="kedip2" value="0">
                                    <label class="form-check-label" for="kedip2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="micing">Apakah Anda tiba-tiba merasa menjadi lebih sering memicingkan mata saat melihat objek jauh?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="micing" id="micing1" value="1" required>
                                    <label class="form-check-label" for="micing1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="micing" id="micing2" value="0">
                                    <label class="form-check-label" for="micing2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gosok">Apakah Anda tiba-tiba merasa menjadi lebih sering menggosok-gosok mata?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gosok" id="gosok1" value="1" required>
                                    <label class="form-check-label" for="gosok1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gosok" id="gosok2" value="0">
                                    <label class="form-check-label" for="gosok2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="kabur">Apakah Anda tiba-tiba merasa pandangan Anda menjadi kabur ketika melihat objek jauh?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kabur" id="kabur1" value="1" required>
                                    <label class="form-check-label" for="kabur1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kabur" id="kabur2" value="0">
                                    <label class="form-check-label" for="kabur2">Tidak</label>
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
                                <label for="matahari">Apakah Anda jarang terkena sinar matahari?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="matahari" id="matahari1" value="1" required>
                                    <label class="form-check-label" for="matahari1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="matahari" id="matahari2" value="0">
                                    <label class="form-check-label" for="matahari2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group" id="pertanyaan3">
                                <label for="vitamind">Apakah Anda kekurangan vitamin D?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vitamind" id="vitamind1" value="1" required>
                                    <label class="form-check-label" for="vitamind1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vitamind" id="vitamind2" value="0">
                                    <label class="form-check-label" for="vitamind2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group" id="pertanyaan2">
                                <label for="membaca">Apakah Anda sering membaca / menonton terlalu dekat?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="membaca" id="membaca1" value="1" required>
                                    <label class="form-check-label" for="membaca1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="membaca" id="membaca2" value="0">
                                    <label class="form-check-label" for="membaca2">Tidak</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" form="cek-rabun-jauh">Cek Sekarang</button>
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
