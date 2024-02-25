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
        <h1 class="text-center mb-3">Edit Data Pegawai</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form
                                action="/updatedata/{{$data->id}}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label"
                                        >Nama lengkap</label
                                    >
                                    <input
                                        type="text"
                                        name="nama"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{$data->nama}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="exampleInputPassword1"
                                        class="form-label"
                                        >Jenis Kelamin</label
                                    >
                                    <select
                                        class="form-select"
                                        name="jeniskelamin"
                                        aria-label="Default select example"
                                    >
                                        <option selected>
                                            {{"$data->jeniskelamin" }}
                                        </option>
                                        <option value="cowo">
                                            Cowo
                                        </option>
                                        <option value="cewe">Cewe</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="exampleInputPassword1"
                                        class="form-label"
                                        >No Telepon</label
                                    >
                                    <input
                                        type="number"
                                        name="notelpon"
                                        class="form-control"
                                        id="exampleInputPassword1"
                                        value="{{$data->notelpon}}"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="img"
                                        class="form-label"
                                        >Image</label
                                    >
                                    <input
                                        type="file"
                                        name="img"
                                        class="form-control"
                                        id="img"
                                        value="{{$data->img}}"
                                    />
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
