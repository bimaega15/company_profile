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
