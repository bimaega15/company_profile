var rootAsset = $(".root_asset").data("url");
var urlCkFinder = `${rootAsset}library/ckfinder`;
console.log(urlCkFinder);

var editor_sejarah_tentangkami = CKEDITOR.replace("sejarah_tentangkami", {
    filebrowserBrowseUrl: `${urlCkFinder}/ckfinder.html`,
    filebrowserImageBrowseUrl: `${urlCkFinder}/ckfinder.html?type=Images`,
    filebrowserUploadUrl: `${urlCkFinder}/core/connector/php/connector.php?command=QuickUpload&type=Files`,
    filebrowserImageUploadUrl: `${urlCkFinder}/core/connector/php/connector.php?command=QuickUpload&type=Images`,
});
var editor_visimisi_tentangkami = CKEDITOR.replace("visimisi_tentangkami", {});
var editor_nilainilai_tentangkami = CKEDITOR.replace(
    "nilainilai_tentangkami",
    {}
);
CKEDITOR.config.height = 300;

var body = $("body");

// Define
var form = $("#form-submit");
var submitButton = document.getElementById("btn_submit");

// Submit button handler
submitButton.addEventListener("click", function (e) {
    e.preventDefault();
    submitData();
});

function updateTentangKami() {
    let getUrl = $(".url_tentang_kami").data("url");
    var output = null;
    $.ajax({
        url: getUrl,
        dataType: "json",
        type: "get",
        async: false,
        success: function (data) {
            output = data;
        },
    });
    return output;
}

function submitData() {
    var formData = $(form)[0];
    var data = new FormData(formData);
    data.append("sejarah_tentangkami", editor_sejarah_tentangkami.getData());
    data.append("visimisi_tentangkami", editor_visimisi_tentangkami.getData());
    data.append(
        "nilainilai_tentangkami",
        editor_nilainilai_tentangkami.getData()
    );

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
            let getData = updateTentangKami();

            if (getData != null) {
            }
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
