// Seting token di Ajax
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

// Menampilkan Form Modal Tambah Data
function addForm(url) {
    $("#modal-form").modal("show");
    $(".modal-title").text("Tambah Data");
    $("#modal-form form").attr("action", url);
    $("#modal-form [name=_method]").val("post");

    resetForm();
}

// Fungsi untuk menyimpan ke Database
function submitForm(form) {
    let url = $(form).attr("action");
    let type = $("#modal-form [name=_method]").val();
    $.ajax({
        url: url,
        method: "POST",
        data: $(form).serialize(),
        success: function () {
            $("#modal-form").modal("hide");
            reloadTable();
            if (type == "post") {
                Swal.fire({
                    icon: "success",
                    title: "Berhasil!",
                    text: "Data Berhasil ditambahkan",
                    timer: 2000,
                    timerProgressBar: true,
                });
            } else {
                Swal.fire({
                    icon: "success",
                    title: "Berhasil!",
                    text: "Data Berhasil di Update",
                    timer: 2000,
                    timerProgressBar: true,
                });
            }
        },
        error: function (err) {
            loopError(err.responseJSON.errors);
        },
    });
}

// Fungsi untuk menghapus data
function deleteData(url, desc) {
    // Pesan Dialog Konfirmasi Hapus dengan Sweet Alert
    Swal.fire({
        title: "Apakah kamu Yakin ?",
        text: "Akan Menghapus data " + desc + " !",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus itu !",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                method: "delete",
                success: function () {
                    Swal.fire({
                        icon: "success",
                        title: "Deleted!",
                        text: "Data Berhasil di Hapus",
                    });
                    // menjalankan fungsi reload Datatable
                    reloadTable();
                },
            });
        }
    });
}

//Fungsi untuk mengEdit Data
function editData(url, save) {
    // dapatkan url dan pisahkan url per segment
    const segments = url.split("/");
    // dapatkan uri segment ke 3
    const uri = segments[3];
    // mendampilkan form modal
    $("#modal-form").modal("show");
    // mengubah title form jadi Edit Data
    $(".modal-title").text("Edit Data");
    // mengubah method dari post ke PUT
    $("#modal-form [name=_method]").val("put");
    // mengambil nilai aksi dari atribut action
    $("#modal-form form").attr("action", save);

    // menggunakan fungsi reset form
    resetForm();

    // dapatkan data untuk edit
    $.ajax({
        url: url,
        method: "get",
        success: function (response) {
            console.log(response);

            if ($("select").hasClass("select2")) {
                formData(response[uri]);

                $("#kecamatan_id")
                    .select2()
                    .val(response.desa.kecamatan_id)
                    .trigger("change");
            } else {
                formData(response[uri]);
            }
        },
    });
}

// Fungsi untuk Reload Datatable
function reloadTable() {
    $(".table").DataTable().ajax.reload();
}

// Fungsi untuk Reset Form Input
function resetForm() {
    $("#modal-form form")[0].reset();
    $(".form-control, .select2").removeClass("is-invalid");
    $(".form-control, .select2").removeClass("is-valid");
    $(".select2").val(null).trigger("change");
}

// Fungsi untuk pesan error
function loopError(errors) {
    $(".invalid-feedback").remove();

    for (error in errors) {
        $(`[name=${error}]`).addClass("is-invalid");

        if ($(`[name=${error}]`).hasClass("select2")) {
            $(
                `<span class="error invalid-feedback">${errors[error]}</span>`
            ).insertAfter($(`[name=${error}]`).next());
        } else {
            $(
                `<span class="error invalid-feedback">${errors[error]}</span>`
            ).insertAfter($(`[name=${error}]`));
        }
    }
}

// Fungsi untuk menampilkan form edit data
function formData(data) {
    for (field in data) {
        // $(`input[name=${field}]`).val(data[field]);
        $(`[name=${field}]`).val(data[field]);
    }
}

//Set Auto Focus Text pada Modal Form
$("#modal-form").on("shown.bs.modal", function () {
    $(this).find("input:enabled:visible:first").focus();
});

//Set Auto Focus Search Select2
$(document).on("select2:open", () => {
    document.querySelector(".select2-search__field").focus();
});

// On every :input focusin remove existing validation messages if any
$(":input").click(function () {
    $(this).removeClass("is-valid is-invalid");
});
// On every :input focusin remove existing validation messages if any
$(":input").keydown(function () {
    $(this).removeClass("is-valid is-invalid");
});

// $(".select").click(function () {
//     $(this).removeClass("is-valid is-invalid");
// });

// Short Cut for Show Modal Form, when press button ctr + m
$(document).on("keydown", function (e, url) {
    // You may replace `m` with whatever key you want
    if (
        (e.metaKey || e.ctrlKey) &&
        String.fromCharCode(e.which).toLowerCase() === "m"
    ) {
        $("#modal-form").modal("show");
        $(".modal-title").text("Tambah Data");
        $("#modal-form form").attr("action", url);

        resetForm();
    }
});
