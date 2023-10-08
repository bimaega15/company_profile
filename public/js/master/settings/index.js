var body = $("body");
var urlSelect2 = $(".url_datastatis_zonawaktu");
var setUrlSelect2 = urlSelect2.data("url");
var setUrlJenisReferensi = urlSelect2.data("jenisreferensi_datastatis");

var zona_waktu_id = $(".zona_waktu").data("zonawaktu_settings_id");
var zona_waktu_name = $(".zona_waktu").data("zonawaktu_settings_nama");
$('select[name="zonawaktu_settings"]')
    .append(new Option(zona_waktu_name, zona_waktu_id, true, true))
    .trigger("change");

select2Standard(".select2", "#form-submit");
select2Server(".select2ServerSide", "#form-submit", setUrlSelect2, {
    jenisreferensi_datastatis: setUrlJenisReferensi,
});
textareaTrim($('textarea[name="alamat_settings"]'));
textareaTrim($('textarea[name="deskripsi_settings"]'));

// Define
var form = $("#form-submit");
var submitButton = document.getElementById("btn_submit");

// Submit button handler
submitButton.addEventListener("click", function (e) {
    e.preventDefault();
    submitData();
});

function updateSettings() {
    let getUrl = $(".url_settings").data("url");
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
            let getData = updateSettings();

            if (getData != null) {
                let getRootUrl = $(".url_root").data("url");
                $("#form-submit").attr(
                    "action",
                    `${getRootUrl}/master/settings/${getData.id}?_method=put`
                );

                let logoSettings = `
                <a class="photoviewer" href="${getRootUrl}/upload/settings/logo/${getData.logo_settings}" data-gallery="photoviewer" data-title="${getData.logo_settings}" target="_blank">
                    <img src="${getRootUrl}/upload/settings/logo/${getData.logo_settings}" alt="Upload gambar" height="100px" class="rounded">
                </a>                
                `;
                $("#load_logo_settings").html(logoSettings);

                let iconSettings = `
                <a class="photoviewer" href="${getRootUrl}/upload/settings/icon/${getData.icon_settings}" data-gallery="photoviewer" data-title="${getData.icon_settings}" target="_blank">
                    <img src="${getRootUrl}/upload/settings/icon/${getData.icon_settings}" alt="Upload gambar" height="100px" class="rounded">
                </a>                
                `;
                $("#load_icon_settings").html(iconSettings);
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

// initialize manually with a list of links
$(document).on("click", '[data-gallery="photoviewer"]', function (e) {
    e.preventDefault();
    var items = [],
        options = {
            index: $(".photoviewer").index(this),
        };

    $('[data-gallery="photoviewer"]').each(function () {
        items.push({
            src: $(this).attr("href"),
            title: $(this).attr("data-title"),
        });
    });

    new PhotoViewer(items, options);
});
