<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/create">Tambah Pasien</a>
        </li>
    </ul>
    
    <div class="container">
        <div style="margin: 10px">
            <h1 class="text-center">Pasien</h1>
            @if (session()->has('berhasil'))
            <div class="alert alert-warning m-3">
                {{ session()->get('berhasil') }}    
            </div>
            @endif
            <a href="/create" class="btn btn-primary">Tambah</a>
        </div>
        <div>
            <table class="table table-dark table-striped-columns">
                <tr>
                    <th>Nama Pasien</th>
                    <th>Nomor Telepon</th>
                    <th>AKSI</th>
                </tr>
                @foreach ($pasiens as $pasien)
                <tr>
                    <td>{{ $pasien->name }}</td>
                    <td>{{ $pasien->phone_number }}</td>
                    <td>
                        <a href="/edit/{{ $pasien->id }}" class="btn btn-secondary">edit</a>
                        <form action="/hapus/{{ $pasien->id }}" class="d-inline" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-warning">hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <div>
                {{ $pasiens->links() }}
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>