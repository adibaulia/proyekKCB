@extends('master')
@section('content')

    <br><br><br>
    <div class="hero-body">
        <div class="container">
            <h1 class="title has-text-centered">
                Algoritma C4.5 Decision Tree Untuk Prediksi Kelulusan Mahasiswa
            </h1>
            <h2 class="subtitle has-text-centered">
                Input File .csv dengan format
            </h2>

            <div class="columns is-mobile">
              <div class="notification column is-half is-offset-one-quarter">
                <p>"outlook", "windy", "humidity", "play" <br>
                    sunny, false, high, no <br>
                    sunny, true, high, no <br>
                    sunny, false, high, no <br>
                    sunny, false, medium, yes <br>
                    sunny, true, medium, yes <br>
                    overcast, false, medium, yes <br>
                    overcast, true, medium, yes <br>
                  </p>
              </div>
            </div>
            <form class="has-text-centered" enctype="multipart/form-data" action="/post" method="post">
              @csrf
              <input type="file" class="inputfile inputfile-2" id="file" name="file">
              <label for="file"><span id="filename">Pilih File dengan ekstensi .csv</span></label>
              <button class="button is-primary">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span> Upload</button>
            </form>
        </div>
    </div>

  @endsection
