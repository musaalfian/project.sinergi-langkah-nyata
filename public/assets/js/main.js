/* *********************************** */
/*                ADMIN                */
/* *********************************** */

// Data Team
$(document).ready(function () {
  $("#dataTeam").DataTable({
    // pageLength: 5,
    language: {
      info: "Menampilkan _END_ dari _TOTAL_ baris",
      infoEmpty: "Menampilkan 0 sampai 0 of 0 baris",
      infoFiltered: "(filtered from MAX total entries)",
      infoPostFix: "",
      thousands: ",",
      lengthMenu: "Menampilkan _MENU_ baris",
      loadingRecords: "Loading...",
      processing: "Memproses...",
      search: "Cari:",
      zeroRecords: "Tidak ada data yang ditemukan",
      paginate: {
        first: "First",
        last: "Last",
        next: "Selanjutnya",
        previous: "Sebelumnya",
      },
    },
  });
});
// End data Team

// Show/hide password
var state = false;

function toogle() {
  if (state) {
    document.getElementById("sandi").setAttribute("type", "password");
    document.getElementById("eye").style.color = "#000";
    state = false;
  } else {
    document.getElementById("sandi").setAttribute("type", "text");
    document.getElementById("eye").style.color = "rgba(38, 151, 255, 1)";
    state = true;
  }
}

function toogle2() {
  if (state) {
    document.getElementById("ulangiSandi").setAttribute("type", "password");
    document.getElementById("eye2").style.color = "#000";
    state = false;
  } else {
    document.getElementById("ulangiSandi").setAttribute("type", "text");
    document.getElementById("eye2").style.color = "rgba(38, 151, 255, 1)";
    state = true;
  }
}
// End show/hide password

// Active tab
$(document).ready(function () {
  if (document.title == "Dashboard | Admin - Sinergi Langkah Nyata") {
    $("#navDashboard, #navDashboard1").addClass("active");
  } else if (document.title == "Data Sekolah Dasar | Admin") {
    $("#navDataSd, #navDataSd1").addClass("active");
  } else if (document.title == "Data Sekolah Menengah Pertama | Admin") {
    $("#navDataSmp, #navDataSmp1").addClass("active");
  } else if (document.title == "Struktur Organisasi | Admin") {
    $("#navStrukturOrganisasi, #navStrukturOrganisasi1").addClass("active");
  } else if (document.title == "Kotak Saran | Admin") {
    $("#navKotakSaran, #navKotakSaran1").addClass("active");
  } else if (document.title == "Detail Sekolah Dasar | Admin") {
    $("#navDataSd, #navDataSd1").addClass("active");
  } else if (document.title == "Edit Sekolah Dasar | Admin") {
    $("#navDataSd, #navDataSd1").addClass("active");
  } else if (document.title == "Detail Sekolah Menengah Pertama | Admin") {
    $("#navDataSmp, #navDataSmp1").addClass("active");
  } else if (document.title == "Edit Sekolah Menengah Pertama | Admin") {
    $("#navDataSmp, #navDataSmp1").addClass("active");
  } else if (document.title == "Tambah Data Sekolah Dasar | Admin") {
    $("#navDataSd, #navDataSd1").addClass("active");
  } else if (document.title == "Tambah Tenaga Pendidik Sekolah Dasar | Admin") {
    $("#navDataSd, #navDataSd1").addClass("active");
  } else if (document.title == "Edit Tenaga Pendidik Sekolah Dasar | Admin") {
    $("#navDataSd, #navDataSd1").addClass("active");
  } else if (document.title == "Tambah Data Sekolah Menengah Pertama | Admin") {
    $("#navDataSmp, #navDataSmp1").addClass("active");
  } else if (
    document.title == "Tambah Tenaga Pendidik Sekolah Menengah Pertama | Admin"
  ) {
    $("#navDataSmp, #navDataSmp1").addClass("active");
  } else if (
    document.title == "Edit Tenaga Pendidik Sekolah Menengah Pertama | Admin"
  ) {
    $("#navDataSmp, #navDataSmp1").addClass("active");
  } else if (document.title == "Edit Struktur Organisasi | Admin") {
    $("#navStrukturOrganisasi, #navStrukturOrganisasi1").addClass("active");
  } else if (document.title == "Data Tenaga Pendidik | Admin") {
    $("#navDataTenagaPendidik, #navDataTenagaPendidik1").addClass("active");
  } else if (document.title == "Jabatan | Admin") {
    $("#navJabatan, #navJabatan1").addClass("active");
  } else if (document.title == "Edit Jabatan | Admin") {
    $("#navJabatan, #navJabatan1").addClass("active");
  }
});

// End active tab
/* *********************************** */
/*              END ADMIN              */
/* *********************************** */
