// Define
$("#rating_testimoni").emojiRating({
    fontSize: 32,
});
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
    let getActive = 0;
    if ($('input[name="is_active"]').is(":checked")) {
        getActive = 1;
    }
    var emojiRating = $(".emoji-rating").val();

    data.append("is_active", getActive);
    data.append("rating_testimoni", emojiRating);

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
