<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Data Pegawai</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <h1 class="text-center mb-5">Data Pegawai</h1>
        <div class="container">
            <a href="/tambahpegawai" type="button" class="btn btn-success mb-2">Tambah +</a>
            <div class="row">
                @if($message = Session::get('success'))
            <div class="alert alert-success" role="alert"> {{$message}} </div>
            @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Image</th>
                            <th scope="col">Created At</th>
                            <!-- <th scope="col">Created At</th> -->
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @php
                    $no = 1;
                    @endphp
                    <tbody>
                        @foreach ( $data as $row )
                        <tr>
                            <th scope="$row">{{$no++}}
                            <td>{{$row->nama}}</td>
                            <td>{{$row->jeniskelamin}}</td>
                            <td>{{$row->notelpon}}</td>
                            <td>
                                <img src="{{ asset('imgpegawai/'. $row->img)}}" alt="" style="width: 40px;">
                            </td>
                            <td>{{$row->created_at -> format('D M Y')}}</td>
                            <!-- <td>{{$row->created_at -> diffForHumans()}}</td> -->
                            <td>
                                
                                <a href="/tampildata/{{$row->id}}" class="btn btn-info">Edit</a>
                                <a href="/hapusdata/{{$row->id}}" class="btn btn-danger">Hapus</a>
                            </td>
                            </th>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
