$(".dd").nestable();
$(".dd").on("change", function () {
    var $this = $(this);
    var serializedData = window.JSON.stringify($($this).nestable("serialize"));

    $this.parents("div.body").find("textarea").val(serializedData);
});

// handle btn edit
var body = $("body");
body.on("click", ".btn-edit", function (e) {
    e.preventDefault();

    showModalFormLarge(
        $(this).attr("href"),
        { id: $(this).data("id") },
        "Ubah Data",
        "get"
    );
});

function loadNested() {
    var url_menu = $(".url_rendermenu_form").data("url");
    $.ajax({
        url: url_menu,
        type: "get",
        dataType: "text",
        success: function (data) {
            $("#output_menu").html(data);
        },
        complete: function () {
            $(".dd").nestable();
        },
    });
}
// handle btn delete
function handleDelete(element, data = null) {
    basicDeleteConfirmDatatable(
        $(element).data("url"),
        {
            nestedTree: data,
        },
        "",
        "",
        loadNested,
        false
    );
}

body.on("click", ".btn-delete", function (e) {
    e.preventDefault();
    var $this = $(".dd");
    var serializedData = window.JSON.stringify($($this).nestable("serialize"));

    handleDelete(this, serializedData);
});
