<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Rabun Senja</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 my-5">
                <div class="card">
                    <div class="card-header">
                        Cek Rabun Senja
                    </div>
                    <div class="card-body">
                        @if (session('status') === 'Mungkin')
                            <div class="alert alert-warning">
                                <b>Anda mungkin masih belum terkena rabun senja.</b>
                                <br>
                                Namun ada kemungkinan kecil bahwa Anda terkena rabun senja, karena itu, sebaiknya Anda tetap menjaga pola hidup Anda agar tidak terkena rabun senja.
                            </div>
                        @elseif (session('status') === 'Kena')
                            <div class="alert alert-danger">
                                <b>Kemungkinan besar Anda sudah terkena rabun senja.</b>
                                <br>
                                Sebaiknya, Anda segera pergi ke dokter untuk memeriksakan kondisi mata Anda agar mendapatkan penanganan lebih lanjut.
                            </div>
                        @elseif (session('status') === 'Tidak')
                            <div class="alert alert-success">
                                <b>Kemungkinan besar Anda tidak terkena rabun senja.</b>
                                <br>
                                Namun, tetap saja sebaiknya Anda menjaga pola hidup Anda serta periksakan mata Anda secara rutin.
                            </div>
                        @endif

                        <form action="{{ route('check.rabun-senja') }}" method="post" id="cek-rabun-senja">
                            @csrf
                            <div class="form-group">
                                <label for="sulit">Apakah Anda sulit melihat lingkungan sekitar pada kondisi gelap?</label>
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
                                <label for="berpindah">Apakah Anda sulit melihat lingkungan sekitar apabila berpindah dari ruangan terang ke gelap?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="berpindah" id="berpindah1" value="1" required>
                                    <label class="form-check-label" for="berpindah1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="berpindah" id="berpindah2" value="0">
                                    <label class="form-check-label" for="berpindah2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="vitamina">Apakah Anda kekurangan vitamin A?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vitamina" id="vitamina1" value="1" required>
                                    <label class="form-check-label" for="vitamina1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="vitamina" id="vitamina2" value="0">
                                    <label class="form-check-label" for="vitamina2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="rabunjauh">Apakah Anda menderita rabun jauh?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rabunjauh" id="rabunjauh1" value="1" required>
                                    <label class="form-check-label" for="rabunjauh1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rabunjauh" id="rabunjauh2" value="0">
                                    <label class="form-check-label" for="rabunjauh2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="katarak">Apakah Anda menderita katarak?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="katarak" id="katarak1" value="1" required>
                                    <label class="form-check-label" for="katarak1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="katarak" id="katarak2" value="0">
                                    <label class="form-check-label" for="katarak2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="retinitis">Apakah Anda menderita retinitis pigmentosa?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="retinitis" id="retinitis1" value="1" required>
                                    <label class="form-check-label" for="retinitis1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="retinitis" id="retinitis2" value="0">
                                    <label class="form-check-label" for="retinitis2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="glaukoma">Apakah Anda menderita glaukoma?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="glaukoma" id="glaukoma1" value="1" required>
                                    <label class="form-check-label" for="glaukoma1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="glaukoma" id="glaukoma2" value="0">
                                    <label class="form-check-label" for="glaukoma2">Tidak</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="keratokonus">Apakah Anda menderita keratokonus?</label>
                                <div></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="keratokonus" id="keratokonus1" value="1" required>
                                    <label class="form-check-label" for="keratokonus1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="keratokonus" id="keratokonus2" value="0">
                                    <label class="form-check-label" for="keratokonus2">Tidak</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" form="cek-rabun-senja">Cek Sekarang</button>
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
