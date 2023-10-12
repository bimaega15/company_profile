// "use strict";
var datatable;
let url_datastatis = $(".url_datastatis").data("url");
var url_parent_id;
var url_parent_name;
var check_input = [];

$(document).ready(function () {
    var body = $("body");
    // handle btn add data
    body.on("click", ".btn-add", function () {
        showModalFormLarge($(this).data("url"), {}, "Tambah Data", "get");
    });

    // handle btn edit
    body.on("click", ".btn-edit", function (e) {
        e.preventDefault();

        showModalFormLarge(
            $(this).attr("href"),
            { id: $(this).data("id") },
            "Ubah Data",
            "get"
        );
    });

    // handle btn delete
    function handleDelete(element) {
        basicDeleteConfirmDatatable($(element).data("url"));
    }

    body.on("click", ".btn-delete", function (e) {
        e.preventDefault();
        handleDelete(this);
    });

    function loadNested() {
        var url_menu = $(".url_rendermenu").data("url");
        $.ajax({
            url: url_menu,
            type: "get",
            dataType: "text",
            success: function (data) {
                $("#output_tree").html(data);
            },
        });
    }
    loadNested();
});
