<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/create">Tambah Pasien</a>
        </li>
    </ul>
    
    <div class="container">
        <h1>Tambah Pasien</h1>
        <form action="/create" method="post">
            @csrf
            <div class="mb-3">
              <label for="phone_number" class="form-label">Nomor Telepon</label>
              <input type="number" class="form-control  @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number">
              @error('phone_number') <p class="invalid-feedback">{{ $message }}</p> @enderror
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Pasien</label>
              <input type="string" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
              @error('name') <p class="invalid-feedback">{{ $message }}</p> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>