$(document).ready(function () {
    setTimeout(() => {
        $( "img" ).each(function() {
            var data_src = $(this).attr("data-src");
            if (data_src !== undefined) {
                $(this).attr("src", data_src);
            }
        });
    }, 3000);
});