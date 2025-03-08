// Fasilitas yang disediakan START
let tiketPesawatLabel = document.getElementById("label-custom-checkbox-tiket-pesawat");
let tiketPesawatInput = document.getElementById("custom-checkbox-tiket-pesawat");

function tiketPesawatAktif() {
    if(tiketPesawatInput.checked) {
        tiketPesawatInput.checked = false;
        tiketPesawatLabel.setAttribute("id","label-custom-checkbox-tiket-pesawat");
    } else {
        tiketPesawatInput.checked = true;
        tiketPesawatLabel.setAttribute("id","label-custom-checkbox-tiket-pesawat-checked");
    }
}


let visaLabel = document.getElementById("label-custom-checkbox-visa");
let visaInput = document.getElementById("custom-checkbox-visa");

function visaAktif() {
    if(visaInput.checked) {
        visaInput.checked = false;
        visaLabel.setAttribute("id","label-custom-checkbox-visa");
    } else {
        visaInput.checked = true;
        visaLabel.setAttribute("id","label-custom-checkbox-visa-checked");
    }
}

let akomodasiLabel = document.getElementById("label-custom-checkbox-akomodasi");
let akomodasiInput = document.getElementById("custom-checkbox-akomodasi");

function akomodasiAktif() {
    if(akomodasiInput.checked) {
        akomodasiInput.checked = false;
        akomodasiLabel.setAttribute("id","label-custom-checkbox-akomodasi");
    } else {
        akomodasiInput.checked = true;
        akomodasiLabel.setAttribute("id","label-custom-checkbox-akomodasi-checked");
    }
}

let makanLabel = document.getElementById("label-custom-checkbox-makan");
let makanInput = document.getElementById("custom-checkbox-makan");

function makanAktif() {
    if(makanInput.checked) {
        makanInput.checked = false;
        makanLabel.setAttribute("id","label-custom-checkbox-makan");
    } else {
        makanInput.checked = true;
        makanLabel.setAttribute("id","label-custom-checkbox-makan-checked");
    }
}

let umrohLabel = document.getElementById("label-custom-checkbox-umroh");
let umrohInput = document.getElementById("custom-checkbox-umroh");

function umrohAktif() {
    if(umrohInput.checked) {
        umrohInput.checked = false;
        umrohLabel.setAttribute("id","label-custom-checkbox-umroh");
    } else {
        umrohInput.checked = true;
        umrohLabel.setAttribute("id","label-custom-checkbox-umroh-checked");
    }
}

let paketTourLabel = document.getElementById("label-custom-checkbox-paket-tour");
let paketTourInput = document.getElementById("custom-checkbox-paket-tour");

function paketTourAktif() {
    if(paketTourInput.checked) {
        paketTourInput.checked = false;
        paketTourLabel.setAttribute("id","label-custom-checkbox-paket-tour");
    } else {
        paketTourInput.checked = true;
        paketTourLabel.setAttribute("id","label-custom-checkbox-paket-tour-checked");
    }
}

let airportLabel = document.getElementById("label-custom-checkbox-airport");
let airportInput = document.getElementById("custom-checkbox-airport");

function airportAktif() {
    if(airportInput.checked) {
        airportInput.checked = false;
        airportLabel.setAttribute("id","label-custom-checkbox-airport");
    } else {
        airportInput.checked = true;
        airportLabel.setAttribute("id","label-custom-checkbox-airport-checked");
    }
}

let busLabel = document.getElementById("label-custom-checkbox-bus");
let busInput = document.getElementById("custom-checkbox-bus");

function busAktif() {
    if(busInput.checked) {
        busInput.checked = false;
        busLabel.setAttribute("id","label-custom-checkbox-bus");
    } else {
        busInput.checked = true;
        busLabel.setAttribute("id","label-custom-checkbox-bus-checked");
    }
}

let zamzamLabel = document.getElementById("label-custom-checkbox-zamzam");
let zamzamInput = document.getElementById("custom-checkbox-zamzam");

function zamzamAktif() {
    if(zamzamInput.checked) {
        zamzamInput.checked = false;
        zamzamLabel.setAttribute("id","label-custom-checkbox-zamzam");
    } else {
        zamzamInput.checked = true;
        zamzamLabel.setAttribute("id","label-custom-checkbox-zamzam-checked");
    }
}

let passportLabel = document.getElementById("label-custom-checkbox-passport");
let passportInput = document.getElementById("custom-checkbox-passport");

function passportAktif() {
    if(passportInput.checked) {
        passportInput.checked = false;
        passportLabel.setAttribute("id","label-custom-checkbox-passport");
    } else {
        passportInput.checked = true;
        passportLabel.setAttribute("id","label-custom-checkbox-passport-checked");
    }
}
// Fasilitas yang disediakan END

// Rute Pemberangkatan START
let labelDirect = document.getElementById("custom-radio-direct");
let labelTransit = document.getElementById("custom-radio-transit");
let directInput = document.getElementById("custom-radio-direct-input");
let transitInput = document.getElementById("custom-radio-transit-input");
let kotaTransit = document.getElementById("kota-transit");

kotaTransit.style.display = "none";

function directAktif() {
    directInput.checked = true;
    labelDirect.setAttribute("id","custom-radio-direct-checked");
    labelTransit.setAttribute("id","custom-radio-transit");
    kotaTransit.style.display = "none";
}

function transitAktif() {
    transitInput.checked = true;
    labelDirect.setAttribute("id","custom-radio-direct");
    labelTransit.setAttribute("id","custom-radio-transit-checked");
    kotaTransit.style.display = "flex";
    kotaTransit.setAttribute("autofocus","on");
}
// Rute Pemberangkatan END