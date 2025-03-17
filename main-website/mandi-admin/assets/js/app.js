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
});
function slugify(text) {
    return (
        text
            .toString()
            .trim() // Trim leading and trailing whitespace first
            .replace(/^['"]+|['"]+$/g, "") // Trim quotes
            .replace(/,/g, '-') // Replace commas with hyphens
            .toLowerCase()
            .replace(/&/g, "and")
            .replace(/\s+/g, "-")
            // .replace(/[^\p{L}\p{N}-]+/gu, '') // Remove non-letter, non-number, non-hyphen
            .replace(/--+/g, "-")
            .replace(/^-+/, "")
            .replace(/-+$/, "")
    );
}
