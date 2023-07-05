// Fungsi Menampilkan Form Modal Tambah Kategori
function addCategory(url) {
    $("#form-kategori").modal("show");
    $(".modal-title").text("Tambah Kategori");
    $("#form-kategori form").attr("action", url);
    $("#form-kategori [name=_method]").val("post");

    $("#form-kategori form")[0].reset();
    $(".form-control, .select2").removeClass("is-invalid");
    $(".form-control, .select2").removeClass("is-valid");
}

// Fungsi Menampilkan Form Modal Tambah Satuan
function addSatuan(url) {
    $("#form-satuan").modal("show");
    $(".modal-title").text("Tambah Satuan");
    $("#form-satuan form").attr("action", url);
    $("#form-satuan [name=_method]").val("post");

    $("#form-satuan form")[0].reset();
    $(".form-control, .select2").removeClass("is-invalid");
    $(".form-control, .select2").removeClass("is-valid");
}

// Fungsi untuk menyimpan ke Database
function submitMultiModal(form) {
    let url = $(form).attr("action");
    $.ajax({
        url: url,
        method: "POST",
        data: $(form).serialize(),
        success: function () {
            $("#form-kategori").modal("hide");
            $("#form-satuan").modal("hide");
            Swal.fire({
                icon: "success",
                title: "Berhasil!",
                text: "Data Berhasil ditambahkan",
                timer: 2000,
                timerProgressBar: true,
            });
        },
        error: function (err) {
            loopError(err.responseJSON.errors);
        },
    });
}

// Sumber Skript dari Dokumentasi Select2 halaman => https://select2.org/data-sources/ajax
// mendapatkan data Kategori
$(document).ready(function () {
    $("#category_id")
        .select2({
            ajax: {
                url: route("product.category"),
                dataType: "json",
                delay: 250,
                data: function (params) {
                    return {
                        searchItem: params.term, // search term
                        page: params.page,
                    };
                },
                processResults: function (data, params) {
                    params.page = params.page || 1;
                    return {
                        results: data.data,
                        pagination: {
                            more: data.last_page != params.page,
                        },
                    };
                },
                cache: true,
            },
            placeholder: "Silahkan Pilih",
            templateResult: formatRepo,
            templateSelection: formatRepoSelection,
        })
        .trigger("change");
});

function formatRepo(data) {
    if (data.loading) {
        return data.text;
    }
    return data.category;
}

function formatRepoSelection(data) {
    return data.category || data.text;
}

// Sumber Skript dari Dokumentasi Select2 halaman => https://select2.org/data-sources/ajax
// mendapatkan data Satuan
$(document).ready(function () {
    $("#satuan_id")
        .select2({
            ajax: {
                url: route("product.satuan"),
                dataType: "json",
                delay: 250,
                data: function (params) {
                    return {
                        searchItem: params.term, // search term
                        page: params.page,
                    };
                },
                processResults: function (data, params) {
                    params.page = params.page || 1;
                    return {
                        results: data.data,
                        pagination: {
                            more: data.last_page != params.page,
                        },
                    };
                },
                cache: true,
            },
            placeholder: "Silahkan Pilih",
            templateResult: formatSatuan,
            templateSelection: formatSatuanSelection,
        })
        .trigger("change");
});

function formatSatuan(data) {
    if (data.loading) {
        return data.text;
    }
    return data.satuan;
}

function formatSatuanSelection(data) {
    return data.satuan || data.text;
}

// format uang, memberikan titik pada angka
function format_uang(input) {
    a = input.value;
    if (a == undefined) {
        a = input.toString();
    }
    b = a.replace(/[^\d]/g, "");
    c = "";
    length = b.length;

    j = 0;
    for (i = length; i > 0; i--) {
        j = j + 1;
        if (j % 3 == 1 && j != 1) {
            c = b.substr(i - 1, 1) + "." + c;
        } else {
            c = b.substr(i - 1, 1) + c;
        }
    }
    if (input.value == undefined) {
        return c;
    }

    input.value = c;
}

// select All Checkbox
$("[name=select_all]").on("click", function () {
    $(":checkbox").prop("checked", this.checked);
});

// Skript ini diambil dari web from www.codeply.com/go/bp/cObcYInvpq, berguna untuk mengembalikan modal pertama berjalan normal, stelah modal kedua di close
https: (function ($, window) {
    "use strict";

    var MultiModal = function (element) {
        this.$element = $(element);
        this.modalCount = 0;
    };

    MultiModal.BASE_ZINDEX = 1040;

    MultiModal.prototype.show = function (target) {
        var that = this;
        var $target = $(target);
        var modalIndex = that.modalCount++;

        $target.css("z-index", MultiModal.BASE_ZINDEX + modalIndex * 20 + 10);

        // Bootstrap triggers the show event at the beginning of the show function and before
        // the modal backdrop element has been created. The timeout here allows the modal
        // show function to complete, after which the modal backdrop will have been created
        // and appended to the DOM.
        window.setTimeout(function () {
            // we only want one backdrop; hide any extras
            if (modalIndex > 0)
                $(".modal-backdrop").not(":first").addClass("hidden");
            that.adjustBackdrop();
        });
    };

    MultiModal.prototype.hidden = function (target) {
        this.modalCount--;

        if (this.modalCount) {
            this.adjustBackdrop();

            // bootstrap removes the modal-open class when a modal is closed; add it back
            $("body").addClass("modal-open");
        }
    };

    MultiModal.prototype.adjustBackdrop = function () {
        var modalIndex = this.modalCount - 1;
        $(".modal-backdrop:first").css(
            "z-index",
            MultiModal.BASE_ZINDEX + modalIndex * 20
        );
    };

    function Plugin(method, target) {
        return this.each(function () {
            var $this = $(this);
            var data = $this.data("multi-modal-plugin");

            if (!data)
                $this.data("multi-modal-plugin", (data = new MultiModal(this)));

            if (method) data[method](target);
        });
    }

    $.fn.multiModal = Plugin;
    $.fn.multiModal.Constructor = MultiModal;

    $(document).on("show.bs.modal", function (e) {
        $(document).multiModal("show", e.target);
    });

    $(document).on("hidden.bs.modal", function (e) {
        $(document).multiModal("hidden", e.target);
    });
})(jQuery, window);
