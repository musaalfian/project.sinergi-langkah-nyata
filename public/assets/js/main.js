/* *********************************** */
/*                ADMIN                */
/* *********************************** */

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

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
  if (document.title == "Tagline | Admin - Sinergi Langkah Nyata") {
    $("#navTagline, #navTagline1").addClass("white");
  } else if (document.title == "Team | Admin - Sinergi Langkah Nyata") {
    $("#navTeam, #navTeam1").addClass("white");
  } else if (document.title == "Innovation | Admin - Sinergi Langkah Nyata") {
    $("#navInnovation, #navInnovation1").addClass("white");
  } else if (document.title == "Users Email | Admin - Sinergi Langkah Nyata") {
    $("#navEmail, #navEmail1").addClass("white");
  }
});

// Input File Image

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    console.log("htdhd");
    reader.onload = function (e) {
      $(input)
        .parent(".input-file-image")
        .find(".img-upload-preview")
        .attr("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

$('.input-file-image input[type="file"').change(function () {
  readURL(this);
});

// Innovation
$("#img_innovation").change(function () {
  if (this.files[0].size > 5242880) {
    $(this).addClass("is-invalid");
    this.value = "";
  } else {
    $(this).removeClass("is-invalid");
    $(this).addClass("is-valid");
  }
});

$("#edit_img_innovation").change(function (e) {
  var file = e.target.files[0].name;
  $("label[for='edit_img_innovation" + "']").empty();
  $("label[for='edit_img_innovation" + "']").append(
    '<a class="btn btn-secondary">Pilih File</a>'
  );
  $("label[for='edit_img_innovation" + "']").append(file);
});
// end Innovation
// End active tab
/* *********************************** */
/*              END ADMIN              */
/* *********************************** */

/* *********************************** */
/*                 USER                */
/* *********************************** */
$(".btn__dropdown").click(function () {
  $(this).toggleClass("down");
})
