<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/custom-biro.css')}}">
    <title>Hana Safar</title>
</head>

<body>
    <form action="/register" method="post">
        @csrf

            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="radio" class="btn-check" id="btncheck1" autocomplete="off" name="role" value="biro">
                <label class="btn btn-outline-primary" for="btncheck1">Biro Umroh</label>

                <input type="radio" class="btn-check" id="btncheck2" autocomplete="off" name="role" value="jamaah">
                <label class="btn btn-outline-primary" for="btncheck2">Jamaah</label>
            </div>

            <label for="namaBiro">Nama Biro</label>
            <input type="text" name="namaBiro" id="namaBiro" required>

            <label for="namaPT">Nama PT</label>
            <input type="text" name="namaPT" id="namaPT" required>

            <label for="pemilik">Pemilik / Penanggung jawab</label>
            <input type="text" name="pemilik" id="pemilik" required>

            <label for="ijin">Ijin biro umroh</label>
            <input type="text" name="ijin" id="ijin" required>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" required>

            <label for="phone">Nomor Telepon</label>
            <input type="tel" name="phone" id="phone" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Submit</button>
        </form>
</body>

</html>
