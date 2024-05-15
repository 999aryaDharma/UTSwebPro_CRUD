// navbar fixed
window.onscroll = function () {
	const header = document.querySelector("header");
	const fixedNav = header.offsetTop;

	if (window.pageYOffset > fixedNav) {
		header.classList.add("navbar-fixed");
	} else {
		header.classList.remove("navbar-fixed");
	}
};

// hamburger button
const hamburger = document.querySelector("#hamburger");

hamburger.addEventListener("click", function () {
	hamburger.classList.toggle("hamburger-active");
});

function validateForm() {
	var namaFilm = document.forms["myForm"]["nama_film"].value;
	var tahun = document.forms["myForm"]["tahun"].value;
	var genre = document.forms["myForm"]["genre"].value;
	var durasi = document.forms["myForm"]["durasi"].value;
	var penilaian = document.forms["myForm"]["penilaian"].value;

	if (namaFilm == "" || tahun == "" || genre == "" || durasi == "" || penilaian == "") {
		alert("Semua bidang harus diisi!");
		return false;
	}
}
