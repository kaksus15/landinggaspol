//Fungsi untuk mengEdit Data
function editBinaan(url, save) {
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

            // formData(response[uri]);

            $("#instansi_id")
                .select2()
                .val(response.desa.instansi_id)
                .trigger("change");

            $("#kecamatan_id")
                .select2()
                .val(response.desa.kecamatan_id)
                .trigger("change");

            $("#desa_id")
                .select2()
                .val(response.desa.desa_id)
                .trigger("change");
        },
    });
}

// Menampilkan Data Desa Berdasarkan Kecamatan yang di Pilih / Select Dinamis
function pilihDesaBinaan() {
    let id = $("#kecamatan_id").val();
    console.log(id);
    $.ajax({
        url: `/desa/getdesa/${id}`,
        method: "get",
        dataType: "json",
        data: {
            id: id,
        },
        success: function (response) {
            console.log(response);
            $("#desa_id").empty();
            $("#desa_id").append("<option disabled>Pilih Desa</option>");
            $.each(response, function (key, data) {
                // console.log(data);
                $("#desa_id").append(
                    '<option value="' +
                        data["id"] +
                        '">' +
                        data["desa"] +
                        "</option>"
                );
            });
        },
    });
}

// $("#kecamatan_id").on("change", function () {
//     console.log("Nama Desa Guessst");
//     let id = $("#kecamatan_id").val();
//     console.log(id);
//     $.ajax({
//         url: `/desa/getdesa/${id}`,
//         method: "get",
//         dataType: "json",
//         data: {
//             id: id,
//         },
//         success: function (response) {
//             console.log(response);
//             $("#desa_id").empty();
//             $("#desa_id").append("<option disabled>Pilih Kabupaten</option>");
//             $.each(response, function (key, data) {
//                 // console.log(data);
//                 $("#desa_id").append(
//                     '<option value="' +
//                         data["id"] +
//                         '">' +
//                         data["desa"] +
//                         "</option>"
//                 );
//             });
//         },
//     });
// });
