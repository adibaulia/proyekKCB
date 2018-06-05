@extends('master')
@section('content')

    <br><br><br>
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">

            <h1 class="title has-text-centered">
                Hasil dari mahasiswa {{$input->nama}}
            </h1>
            <br><br>
            <h1 class="notification is-danger title has-text-centered">
                {{$keterangan}}
            </h1>

            <table class="table is-fullwidth">
                <thead>
                <tr>
                    <th>Attribut</th>
                    <th>Nilai</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <th>Asal Daerah</th>
                    <td>{{$input->daerah}}</td>
                </tr>

                <tr>
                    <th>Asal Sekolah</th>
                    <td>{{$input->sekolah}}</td>
                </tr>

                <tr>
                    <th>Jalur Masuk</th>
                    <td>{{$input->jalur}}</td>
                </tr>

                <tr>
                    <th>IPK</th>
                    <td>{{$input->ipk}}</td>
                </tr>

                <tr>
                    <th>IP Semester 1</th>
                    <td>{{$input->ip1}}</td>
                </tr>

                <tr>
                    <th>IP Semester 2</th>
                    <td>{{$input->ip2}}</td>
                </tr>

                <tr>
                    <th>IP Semester 3</th>
                    <td>{{$input->ip3}}</td>
                </tr>

                <tr>
                    <th>IP Semester 4</th>
                    <td>{{$input->ip4}}</td>
                </tr>

                <tr>
                    <th>IP Semester 5</th>
                    <td>{{$input->ip5}}</td>
                </tr>

                <tr>
                    <th>Pesantren</th>
                    <td>{{$input->pesantren}}</td>
                </tr>

                </tbody>
            </table>



        </div>
    </div>



  @endsection