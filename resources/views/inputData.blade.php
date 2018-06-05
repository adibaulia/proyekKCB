@extends('master')
@section('content')


    <br><br><br>
    <div class="columns">
  <div class="column is-half is-offset-one-quarter">

      <div class="field">
          <h1 class="title has-text-centered">Isi Data Training</h1>
      </div>

      <form enctype="multipart/form-data" action="/inputTest" method="post">
          @csrf
      <div class="field">
            <label class="label">Nama Siswa</label>
            <div class="control">
              <input class="input" name="nama" type="text" placeholder="Text input">
            </div>
          </div>



      <div class="field has-addons">
          <div class="control is-expanded">
              <label class="label">Jalur Masuk</label>
              <div class="select is-fullwidth">
                  <select name="jalur">
                      <option disabled selected value="">Pilih Jalur Masuk</option>
                      <option value="snmptn ujian tulis">SNMPTN ujian tulis</option>
                      <option value="snmptn undangan">SNMPTN undangan</option>
                      <option value="mandiri ujian tulis">Mandiri Ujian Tulis</option>
                      <option value="mandiri prestasi">Mandiri prestasi</option>
                      <option value="spmb-ptaIn">spmb-ptaIn</option>
                  </select>
              </div>
          </div>
      </div>

      <div class="field has-addons">
          <div class="control is-expanded">
              <label class="label">Asal Daerah</label>
              <div class="select is-fullwidth">
                  <select name="daerah">
                      <option disabled selected value="">Pilih Asal Daerah</option>
                      <option value="jawa timur">Jawa Timur</option>
                      <option value="jawa barat">Jawa Barat</option>
                      <option value="madura">Madura</option>
                      <option value="sumatra">Sumatra</option>
                      <option value="kalimantan">Kalimantan</option>
                  </select>
              </div>
          </div>
      </div>

      <div class="field has-addons">
          <div class="control is-expanded">
              <label class="label">Asal Sekolah</label>
              <div class="select is-fullwidth">
                  <select name="sekolah">
                      <option disabled selected value="">Pilih Asal Daerah</option>
                      <option value="man">MAN</option>
                      <option value="mas">MAS</option>
                      <option value="sma">SMA</option>
                      <option value="sman">SMAN</option>
                      <option value="smas">SMAS</option>
                      <option value="smkn">SMKN</option>
                      <option value="smks">SMKS</option>
                  </select>
              </div>
          </div>
      </div>

      <div class="field has-addons">
          <div class="control is-expanded">
              <label class="label">Pesantren</label>
              <div class="select is-fullwidth">
                  <select name="pesantren">
                      <option value="iya">Iya</option>
                      <option value="tidak">Tidak</option>
                  </select>
              </div>
          </div>
      </div>

      <div class="field is-expanded is-grouped is-grouped-multiline">
          <div class="control">
              <label class="label">IPK</label>
              <div class="select">
                  <select name="ipk">
                      <option value="a">A</option>
                      <option value="b">B</option>
                      <option value="c">C</option>
                      <option value="d">D</option>
                  </select>
              </div>
          </div>

          <div class="control">
              <label class="label">IP Sem 1</label>
              <div class="select">
                  <select name="ip1">
                      <option value="a">A</option>
                      <option value="b">B</option>
                      <option value="c">C</option>
                      <option value="d">D</option>
                  </select>
              </div>
          </div>

          <div class="control">
              <label class="label">IP Sem 2</label>
              <div class="select">
                  <select name="ip2">
                      <option value="a">A</option>
                      <option value="b">B</option>
                      <option value="c">C</option>
                      <option value="d">D</option>
                  </select>
              </div>
          </div>

          <div class="control">
              <label class="label">IP Sem 3</label>
              <div class="select">
                  <select name="ip3">
                      <option value="a">A</option>
                      <option value="b">B</option>
                      <option value="c">C</option>
                      <option value="d">D</option>
                  </select>
              </div>
          </div>

          <div class="control">
              <label class="label">IP Sem 4</label>
              <div class="select">
                  <select name="ip4">
                      <option value="a">A</option>
                      <option value="b">B</option>
                      <option value="c">C</option>
                      <option value="d">D</option>
                  </select>
              </div>
          </div>

          <div class="control">
              <label class="label">IP Sem 5</label>
              <div class="select">
                  <select name="ip5">
                      <option value="a">A</option>
                      <option value="b">B</option>
                      <option value="c">C</option>
                      <option value="d">D</option>
                  </select>
              </div>
          </div>

      </div>





          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link">Submit</button>
            </div>
          </div>
        </div>
        </div>
    </form>

    <br><br><br>
@endsection


@section('js')

    <script type="text/javascript">

        $(document).ready(function(){


            $("button").click(function(){
                console.log('oke');
            });



        });
    </script>

@endsection