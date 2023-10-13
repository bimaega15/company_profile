$(document).ready(function () {
    var urlCreateView = $(".url_view_tentangkami").data("url");
    function createViewTentangKami() {
        $.ajax({
            url: urlCreateView,
            type: "get",
            dataType: "text",
            success: function (data) {
                $("#output_menu").html(data);
            },
        });
    }
    createViewTentangKami();

    function createViewProfileSingkat() {
        var urlProfileSingkat = $(".url_view_profilesingkat").data("url");
        $.ajax({
            url: urlProfileSingkat,
            type: "get",
            dataType: "text",
            success: function (data) {
                $("#output_menu").html(data);
            },
        });
    }

    $(document).on("click", ".btn-tab-data", function (e) {
        e.preventDefault();
        $(".btn-tab-data").attr("class", "w-100 btn btn-light btn-tab-data");

        let viewData = $(this).data("view");
        if (viewData == "tentang_kami") {
            $(".btn-tab-data[data-view='tentang_kami']").attr(
                "class",
                "w-100 btn btn-primary btn-tab-data"
            );
            createViewTentangKami();
            $(".btn-add-tab").removeClass("btn-add");
        }
        if (viewData == "profile_singkat") {
            $(".btn-tab-data[data-view='profile_singkat']").attr(
                "class",
                "w-100 btn btn-primary btn-tab-data"
            );
            createViewProfileSingkat();
            $(".btn-add-tab").addClass("btn-add");
        }
    });
});
