<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    {{-- <h1>Hello, world!</h1> --}}
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Siswa
            </div>
            <div class="card-body">
                <form action="" method="get">
                    @csrf
                    <input type="hidden" name="search" value="search">
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <select name="jurusan" id="" class="form-control">
                            <option value="">Pilih Jurusan</option>
                            <option value="Tata Boga">Tata Boga</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">NISN</label>
                        <input type="number" name="nisn" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Ijazah</label>
                        <input type="number" name="nomor_ijazah" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        @isset($siswas)
        @if (empty($siswas))
            <h1>Data yang anda masukan tidak valid</h1>
        @else
        <div class="card">
            <div class="card-header">
                Data Siswa
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NISN</th>
                            <th>Nama Lengkap</th>
                            <th>Jurusan</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>Nomor Ijazah</th>
                            <th>Tahun Masuk</th>
                            <th>Tahun Lulus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($siswas as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->jurusan }}</td>
                                <td>{{ $item->nama_ayah }}</td>
                                <td>{{ $item->nama_ibu }}</td>
                                <td>{{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->nomor_ijazah }}</td>
                                <td>{{ $item->tahun_masuk }}</td>
                                <td>{{ $item->tahun_lulus }}</td>
                            </tr>
                        @empty
                            <tr>
                                <th>Data Tidak Ada</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endif
            
        @endisset
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>