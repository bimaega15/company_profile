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

// handle btn delete
function handleDelete(element) {
    basicDeleteConfirmDatatable($(element).data("url"));
}

body.on("click", ".btn-delete", function (e) {
    e.preventDefault();
    handleDelete(this);
});
