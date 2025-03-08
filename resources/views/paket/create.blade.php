<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/custom-paket.css')}}">
    <title>Hana Safar</title>
</head>

<body>

    <div class="container">

        <form action="/paket/create" method="post">
            @csrf
            {{auth()->user()->nama}}


        <!-- Label dan input untuk Tanggal Keberangkatan -->
        <label class="date-label" for="berangkat">Tanggal Keberangkatan</label>
        <input class="date-input-pkt" type="date" name="berangkat" id="berangkat">

        <!-- Label dan input untuk Tanggal Kepulangan -->
        <label class="date-label" for="pulang">Tanggal Kepulangan</label>
        <input class="date-input-pkt" type="date" name="pulang" id="pulang">

        <label class="date-label" for="expired_date">Tanggal Kadaluarsa</label>
        <input class="date-input-pkt" type="date" name="expired_date" id="expired_date">


        <!-- Label dan input untuk Bandara Keberangkatan -->
        <label class="label-pkt" for="bandara">Bandara keberangkatan</label>
        <input class="inpkt" type="text" name="bandara" id="bandara" required >

        <!-- Label dan input untuk Airlines -->
        <label class="label-pkt" for="airline">Airlines</label>
        <input class="inpkt" type="text" name="airline" id="airline" required>

        <!-- Tombol radio untuk pilihan Direct/Transit -->
        <div class="btn-group-pkt" role="group" aria-label="Basic checkbox toggle button group">
            <input type="radio" class="btn-check-pkt"  id="btncheckpkt1" autocomplete="off" name="flight" value="direct">
            <label class="btn btn-outline-primary-pkt" for="btncheckpkt1">Direct</label>

            <input type="radio" class="btn-check-pkt"  id="btncheckpkt2" autocomplete="off" name="flight" value="transit">
            <label class="btn btn-outline-primary-pkt" for="btncheckpkt2">Transit</label>
        </div>

        <!-- Label dan input untuk Kota -->
        <label class="label-pkt" for="kota">Kota</label>
        <input class="inpkt" type="text" name="kota" id="kota" required>

        <!-- Label dan input untuk Harga -->
        <label class="label-pkt" for="harga">Harga</label>
        <input class="inpkt" type="number" name="harga" id="" class="harga-pkt" required >

        <!-- Checkbox untuk Tiket Pesawat -->
        <label for="tiket" class="contain-pkt">Tiket Pesawat
            <input type="checkbox" name="tiket" id="tiket" >
            <span class="checkmark-pkt"></span>
        </label>

        <!-- Checkbox untuk Visa-Siskohat -->
        <label for="visa" class="contain-pkt">Visa-Siskohat
            <input type="checkbox" name="visa" id="visa" >
            <span class="checkmark-pkt"></span>
        </label>

        <!-- Checkbox untuk Akomodasi di Saudi -->
        <label for="akomodasi" class="contain-pkt">Akomodasi di Saudi
            <input type="checkbox" name="akomodasi" id="akomodasi">
            <span class="checkmark-pkt"></span>
        </label>

        <!-- Checkbox untuk Makan di Saudi -->
        <label for="makan" class="contain-pkt">Makan di Saudi
            <input type="checkbox" name="makan" id="makan">
            <span class="checkmark-pkt"></span>
        </label>

        <!-- Checkbox untuk Umroh 3x -->
        <label for="umroh" class="contain-pkt">Umroh 3x
            <input type="checkbox" name="umroh" id="umroh">
            <span class="checkmark-pkt"></span>
        </label>

        <label  class="contain-pkt">Paket tour
            <input type="checkbox" id="showInput">
            <span class="checkmark-pkt"></span>
        </label>
            <input class="inpkt" type="text"  id="inputContainer" style="display:none;" name="tour">

        <!-- Checkbox untuk Airport Handling -->
        <label for="airport" class="contain-pkt">Airport Handling
            <input type="checkbox" name="airport" id="airport">
            <span class="checkmark-pkt"></span>
        </label>

        <!-- Checkbox untuk Bus selama di Saudi -->
        <label for="bus" class="contain-pkt">Bus selama di Saudi
            <input type="checkbox" name="bus" id="bus">
            <span class="checkmark-pkt"></span>
        </label>

        <!-- Checkbox untuk Zam-zam 5 Liter -->
        <label for="zam" class="contain-pkt">Zam-zam 5 Liter
            <input type="checkbox" name="zam" id="zam">
            <span class="checkmark-pkt"></span>
        </label>

        <!-- Checkbox untuk Passport -->
        <label for="passport" class="contain-pkt">Passport
            <input type="checkbox" name="passport" id="passport">
            <span class="checkmark-pkt"></span>
        </label>

        <!-- Tombol Submit -->
        <button class="subpkt" type="submit">Submit</button>

    </form>
</div>
</body>
<script>
     // Mendapatkan elemen checkbox dan input teks
     var checkbox = document.getElementById("showInput");
     var inputContainer = document.getElementById("inputContainer");

        // Menambahkan event listener untuk checkbox
        checkbox.addEventListener("click", function () {
            // Jika checkbox dicentang, tampilkan input teks; jika tidak, sembunyikan input teks
            if (checkbox.checked) {
                inputContainer.style.display = "block";
            } else {
                inputContainer.style.display = "none";
            }
        });
</script>

</html>
