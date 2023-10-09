// Define
var data_rating_testimoni = $(".data_rating_testimoni").data(
    "rating_testimoni"
);
$("#rating_testimoni").emojiRating({
    fontSize: 32,
});

var count = 5;
for (var i = 0; i < count; i++) {
    if (i < data_rating_testimoni) {
        $('.jqEmoji[data-index="' + i + '"]').css({
            opacity: 1,
        });
    } else {
        $('.jqEmoji[data-index="' + i + '"]').css({
            opacity: 0.2,
        });
    }
}

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
    var getActive = 0;
    if ($('input[name="is_active"]').is(":checked")) {
        getActive = 1;
    }
    
    var getStars = $(".jqEmoji");
    var pushStar = [];
    $.each(getStars, function (i, v) {
        var getAttr = $(this).attr("style");
        if (getAttr == "opacity: 1;") {
            pushStar.push(i);
        }
    });
    var countRatings = pushStar.length;

    data.append("is_active", getActive);
    data.append("rating_testimoni", countRatings);

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
        compvare: function () {
            submitButton.disabled = false;
            submitButton.innerHTML = enableButton;
        },
    });
}
