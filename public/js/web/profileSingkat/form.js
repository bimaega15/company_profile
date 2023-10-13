// Define
var editor = CKEDITOR.replace("pesan_tentangdetail", {
    toolbar: [
        { name: "document", items: ["NewPage", "Preview"] },
        {
            name: "clipboard",
            items: [
                "Cut",
                "Copy",
                "Paste",
                "PasteText",
                "PasteFromWord",
                "-",
                "Undo",
                "Redo",
            ],
        },
        {
            name: "editing",
            items: ["Find", "Replace", "-", "SelectAll", "-", "Scayt"],
        },
        {
            name: "insert",
            items: [
                "Table",
                "HorizontalRule",
                "Smiley",
                "SpecialChar",
                "PageBreak",
                "Iframe",
            ],
        },
        "/",
        { name: "styles", items: ["Styles", "Format"] },
        {
            name: "basicstyles",
            items: ["Bold", "Italic", "Strike", "-", "RemoveFormat"],
        },
        {
            name: "paragraph",
            items: [
                "NumberedList",
                "BulletedList",
                "-",
                "Outdent",
                "Indent",
                "-",
                "Blockquote",
            ],
        },
        { name: "links", items: ["Link", "Unlink", "Anchor"] },
        { name: "tools", items: ["Maximize", "-", "About"] },
    ],
});
CKEDITOR.config.height = 250;

var form = $("#form-submit");
var submitButton = document.getElementById("btn_submit");

// Submit button handler
submitButton.addEventListener("click", function (e) {
    e.preventDefault();

    submitData();
});

function submitData() {
    var formData = $(form)[0];
    var data = new FormData(formData);
    data.delete("is_active");
    data.delete("pesan_tentangdetail");

    let getActive = 0;
    if ($('input[name="is_active"]').is(":checked")) {
        getActive = 1;
    }
    data.append("is_active", getActive);
    data.append("pesan_tentangdetail", editor.getData());

    $.ajax({
        type: "post",
        url: $(form).attr("action"),
        data: data,
        dataType: "json",
        enctype: "multipart/form-data",
        processData: false, // Important!
        contentType: false,
        cache: false,
        beforeSend: function () {
            submitButton.disabled = true;
            submitButton.innerHTML = disableButton;
        },
        success: function (data) {
            notifAlert("Successfully", data, "success");
            datatable.ajax.reload();
            $(`#${modal_large}`).modal("toggle");
        },
        error: function (jqXHR, exception) {
            // Enable button
            submitButton.disabled = false;
            ajaxErrorMessage(jqXHR, exception);
        },
        complete: function () {
            submitButton.disabled = false;
            submitButton.innerHTML = enableButton;
        },
    });
}