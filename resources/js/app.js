import "./bootstrap";
import "flowbite";

const accordionHeader = document.querySelectorAll(".accordion-header");
accordionHeader.forEach((accordionHeader) => {
    accordionHeader.addEventListener("click", (event) => {
        accordionHeader.classList.toggle("active");
        const accordionBody = accordionHeader.nextElementSibling;
        if (accordionHeader.classList.contains("active")) {
            accordionHeader.style.backgroundColor = "rgba(18, 20, 129, 0.15)";
            accordionHeader.style.borderTopLeftRadius = "14.2px";
            accordionHeader.style.borderTopRightRadius = "14.2px";
            accordionHeader.style.borderBottomRightRadius = "0px";
            accordionHeader.style.borderBottomLeftRadius = "0px";
            accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
            accordionBody.style.borderTop = "1px solid black";
        } else {
            accordionBody.style.maxHeight = 0;
            accordionBody.style.borderTop = "none";
            accordionHeader.style.borderRadius = "14.2px";
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    // Dapatkan semua tombol
    const buttonGroup = document.getElementById("button-group");
    const buttons = buttonGroup.querySelectorAll("button");

    // Dapatkan input tersembunyi
    const hiddenInput = document.getElementById("consultation_time");

    // Dapatkan elemen consul-time
    const consulTimeElement = document.getElementById("selected-time-display");

    // Tambahkan event listener ke setiap tombol
    buttons.forEach((button) => {
        button.addEventListener("click", function () {
            // Hapus warna latar belakang dari semua tombol
            buttons.forEach((btn) => {
                btn.style.backgroundColor = "#D9D9D9"; // Reset background color
            });

            // Setel nilai consul-time sesuai dengan nilai tombol yang dipilih
            consulTimeElement.textContent = this.value + " WIB";

            // Setel nilai input tersembunyi ke nilai tombol yang ditekan
            hiddenInput.value = this.value;

            // Tambahkan warna latar belakang ke tombol yang baru diklik
            this.style.backgroundColor = "#121481";
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const submitButton = document.getElementById("submit-button");

    // Tambahkan event listener ke peristiwa klik pada tombol submit
    submitButton.addEventListener("click", function (event) {
        // Dapatkan nilai input tersembunyi
        const selectedTimeInput =
            document.getElementById("consultation_time").value;
        const selectedDate = document.getElementById("selected-date").value;

        // Periksa apakah nilai input tersembunyi kosong
        if (!selectedTimeInput || !selectedDate) {
            // Jika kosong, mencegah pengiriman formulir
            event.preventDefault();

            // Tampilkan pesan kesalahan
            alert("Harap pilih waktu dan tanggal sebelum mengirim formulir");

            // Hentikan eksekusi fungsi
            return false;
        }
    });
});

// DatePicker <-
const inlineDatepicker = document.getElementById("inline-datepicker");

// Tentukan fungsi penanganan acara onChange untuk menangkap perubahan tanggal
inlineDatepicker.addEventListener("changeDate", function (event) {
    // Dapatkan tanggal yang dipilih dari event
    const selectedDate = event.detail.date;

    // Buat opsi untuk menampilkan tanggal saja (tanpa jam)
    const options = { year: "numeric", month: "long", day: "numeric" };

    const year = selectedDate.getFullYear();
    const month = selectedDate.getMonth() + 1; // Tambahkan 1 karena indeks bulan dimulai dari 0
    const day = selectedDate.getDate();

    // Ubah tanggal menjadi string tanpa jam menggunakan toLocaleDateString()
    const formattedDate = selectedDate.toLocaleDateString("id-ID", options);

    const dateFormat = `${year}-${month.toString().padStart(2, "0")}-${day
        .toString()
        .padStart(2, "0")}`;

    // Update nilai input teks dengan tanggal yang dipilih
    document.getElementById("selected-date").value = dateFormat;

    // Update nilai dari elemen p untuk menampilkan tanggal yang dipilih
    document.getElementById("selected-date-display").innerText = formattedDate;

    document.getElementById("display-date-table").innerText = formattedDate;
});
