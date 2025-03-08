<div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$item->Biro->nama}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Isi modal disini, sesuai dengan data yang ingin ditampilkan -->
                <p>Kode Paket : {{ $item->kode }}</p>
                <p>Tanggal Keberangkatan : {{ $item->tanggal_keberangkatan}}</p>
                <p>Tanggal Kepulangan : {{ $item->tanggal_kepulangan}}</p>
                <p>Bandara Keberangkatan : {{ $item->bandara}}</p>
                <p>Airlines : {{ $item->airline}}</p>
                @if ($item->flight == 'direct')
                <div class="btn-group" role="group"
                    aria-label="Basic checkbox toggle button group">
                    <input type="radio" class="btn-check" id="btncheck1" autocomplete="off"
                        value="direct" disabled checked>
                    <l class="btn btn-outline-primary" for="btncheck1">Direct</l
                    <input type="radio" class="btn-check" id="btncheck2" autocomplete="off"
                        value="transit" disabled>
                    <label class="btn btn-outline-primary" for="btncheck2">Transit</label>
                </div>
                @else
                <div class="btn-group" role="group"
                    aria-label="Basic checkbox toggle button group">
                    <input type="radio" class="btn-check" id="btncheck1" autocomplete="off"
                        value="direct" disabled>
                    <l class="btn btn-outline-primary" for="btncheck1">Direct</l
                    <input type="radio" class="btn-check" id="btncheck2" autocomplete="off"
                        value="transit" disabled checked>
                    <label class="btn btn-outline-primary" for="btncheck2">Transit</label>
                </div>
                @endif
                <p>Harga paket : Rp. {{ number_format($item->harga)}},00</p>
                <>
                    <p>Harga Paket Termasuk : </p>
                    @if ($item->tiket == 'yes')
                    <label for="tiket" class="contain">Tiket Pesawat
                        <input type="checkbox" name="tiket" id="tiket" checked disabled>
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->visa == 'yes')
                    <label for="visa" class="contain">Visa-Siskohat
                        <input type="checkbox" checked disabled name="visa" id="visa">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->akomodasi == 'yes')
                    <label for="akomodasi" class="contain">Akomodasi di Saudi
                        <input type="checkbox" checked disabled name="akomodasi" id="akomodasi">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->makan == 'yes')
                    <label for="makan" class="contain">Makan di Saudi
                        <input type="checkbox" checked disabled name="makan" id="makan">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->umroh == 'yes')
                    <label for="umroh" class="contain">Umroh 3x
                        <input type="checkbox" checked disabled name="umroh" id="umroh">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->tour == !null)
                    <label class="contain">Paket tour
                        <input type="checkbox" checked disabled id="showInput">
                        <span class="checkmark"></span>
                    </label>
                    <input type="text" id="inputContainer" style="display:block;" name="tour"
                        class="tourdesc" value="{{$item->tour}}" disabled>
                    @endif
                    @if ($item->airpot == 'yes')
                    <label for="airport" class="contain">Airport Handling
                        <input type="checkbox" checked disabled name="airport" id="airport">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->bus == 'yes')
                    <label for="bus" class="contain">Bus selama di Saudi
                        <input type="checkbox" checked disabled name="bus" id="bus">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->zam == 'yes')
                    <label for="zam" class="contain">Zam-zam 5 Liter
                        <input type="checkbox" checked disabled name="zam" id="zam">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->passport == 'yes')
                    <label for="passport" class="contain">Passport
                        <input type="checkbox" checked disabled name="passport" id="passport">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                <
                <div>
                    @if ($item->tiket == 'no')
                    <label for="tiket" class="contain">Tiket Pesawat
                        <input type="checkbox" name="tiket" id="tiket" disabled>
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->visa == 'no')
                    <label for="visa" class="contain">Visa-Siskohat
                        <input type="checkbox" disabled name="visa" id="visa">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->akomodasi == 'no')
                    <label for="akomodasi" class="contain">Akomodasi di Saudi
                        <input type="checkbox" disabled name="akomodasi" id="akomodasi">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->makan == 'no')
                    <label for="makan" class="contain">Makan di Saudi
                        <input type="checkbox" disabled name="makan" id="makan">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->umroh == 'no')
                    <label for="umroh" class="contain">Umroh 3x
                        <input type="checkbox" disabled name="umroh" id="umroh">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->tour == null)
                    <label class="contain">Paket tour
                        <input type="checkbox" disabled id="showInput">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->airpot == 'no')
                    <label for="airport" class="contain">Airport Handling
                        <input type="checkbox" disabled name="airport" id="airport">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->bus == 'no')
                    <label for="bus" class="contain">Bus selama di Saudi
                        <input type="checkbox" disabled name="bus" id="bus">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->zam == 'no')
                    <label for="zam" class="contain">Zam-zam 5 Liter
                        <input type="checkbox" disabled name="zam" id="zam">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                    @if ($item->passport == 'no')
                    <label for="passport" class="contain">Passport
                        <input type="checkbox" disabled name="passport" id="passport">
                        <span class="checkmark"></span>
                    </label>
                    @endif
                </div>
                <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
            <>
        </div>
    </div>
 </div>