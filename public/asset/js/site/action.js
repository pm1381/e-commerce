$(document).ready(function () {
    setTimeout(() => {
        $( "img" ).each(function() {
            var data_src = $(this).attr("data-src");
            if (data_src !== undefined) {
                $(this).attr("src", data_src);
            }
        });
    }, 3000);

    $(document).on("click", ".hambergurMenu", event => {
        $(".hambergurMenu").hide();
        $(".menuInHamburger").show(350);
        // $(".menuInHamburger").addClass("active");
        $(".closeHamburgerMenu").show();
    })

    $(document).on("click", ".closeHamburgerMenu", event => {
        $(".closeHamburgerMenu").hide();
        $(".menuInHamburger").hide(350);
        // $(".menuInHamburger").removeClass(className);
        $(".hambergurMenu").show();
    })
});

