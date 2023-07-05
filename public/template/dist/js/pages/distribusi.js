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
