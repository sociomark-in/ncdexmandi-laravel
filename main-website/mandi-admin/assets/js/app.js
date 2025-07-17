$(function () {
    if ($("body").width() <= 751) {
        $(".sidebar-toggler").on("click", () => {
            $("body").toggleClass("sidebar-open");

            if ($(".sidebar-toggler").hasClass("active")) {
                $(".sidebar-toggler").removeClass("active");
                $(".sidebar-toggler").addClass("not-active");
            } else {
                $(".sidebar-toggler").addClass("active");
                $(".sidebar-toggler").removeClass("not-active");

                $(".sidebar-body").on("mouseenter", () => {
                    $("body").addClass("open-sidebar-folded overflow-hidden");
                });
                $(".sidebar-body").on("mouseleave", () => {
                    $("body").removeClass(
                        "open-sidebar-folded overflow-hidden"
                    );
                });
            }
        });
    } else {
        $(".sidebar-toggler").on("click", () => {
            $("body").toggleClass("sidebar-folded");
            if ($(".sidebar-toggler").hasClass("active")) {
                $(".sidebar-toggler").removeClass("active");
                $(".sidebar-toggler").addClass("not-active");
            } else {
                $(".sidebar-toggler").addClass("active");
                $(".sidebar-toggler").removeClass("not-active");

                $(".sidebar-body").on("mouseenter", () => {
                    $("body").addClass("open-sidebar-folded overflow-hidden");
                });
                $(".sidebar-body").on("mouseleave", () => {
                    $("body").removeClass(
                        "open-sidebar-folded overflow-hidden"
                    );
                });
            }
        });
    }
    $("form select.langSelector").each((index, element) => {
        $(element).select2({
            templateSelection: (state) => {
                if (!state.id) {
                    return state.text;
                }

                var baseUrl = "/user/pages/images/flags";
                var $state = $(
                    '<span><i class="flag-icon" title="us" id="us"></i><span class="ms-1 d-none d-md-inline"></span></span>'
                );

                // Use .text() instead of HTML string concatenation to avoid script injection issues
                $state.find("span").text(state.text);
                switch (
                    state.element.getAttribute("data-origin").toLowerCase()
                ) {
                    case "en":
                        $state.find("i").attr("id", "us");
                        $state.find("i").addClass("flag-icon-us");
                        $state.find("i").attr("title", "us");
                        break;
                    default:
                        $state.find("i").addClass("flag-icon-in");
                        $state.find("i").attr("title", "in");
                        break;
                }
                return $state;
            },
        });
        $(element).on("change", (event) => {
            $.ajax({
                method: "POST",
                data: {
                    lang: $("#langSelect").val(),
                    redirect: "<?= current_url() ?>",
                },
                url: "<?= base_url('api/v2/') ?>",
                success: (response) => {
                    // location.reload();
                },
                error: (error) => {
                    console.log(error);
                },
            });
        });
    });
});
function slugify(text) {
    return (
        text
            .toString()
            .trim() // Trim leading and trailing whitespace first
            .replace(/^['"]+|['"]+$/g, "") // Trim quotes
            .replace(/,/g, "-") // Replace commas with hyphens
            .toLowerCase()
            .replace(/&/g, "and")
            .replace(/\s+/g, "-")
            // .replace(/[^\p{L}\p{N}-]+/gu, '') // Remove non-letter, non-number, non-hyphen
            .replace(/--+/g, "-")
            .replace(/^-+/, "")
            .replace(/-+$/, "")
    );
}
