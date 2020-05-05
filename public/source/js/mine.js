(function($) {
    $(document).ready(function() {
        // does current browser support PJAX
        if ($.support.pjax) {
            $.pjax.defaults.timeout = 2000; // time in milliseconds
        }
        $(document).pjax('.page-link', '.shop-page-right');
        $(document).pjax('.filter-btn', '.shop-page-right');
        $(document).pjax('.shop-category', '.shop-page-right');
        $(document).pjax('.cart_remove', '.cart-page-area');
    });

    const formatter = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
        minimumFractionDigits: 2
    });

    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    $.ajax({
        type: 'GET',
        url: '/min_max_price',
        dataType: 'json',
        success: function(data) {
            var min_price = parseInt(data['minPrice']);
            var max_price = parseInt(data['maxPrice']);
            if ($.fn.slider) {
                $(function() {
                    $("#slider-range").slider({
                        range: true,
                        min: min_price,
                        max: max_price,
                        values: [min_price + 10, max_price],
                        slide: function(event, ui) {
                            url.searchParams.set('minPrice', ui.values[0]);
                            url.searchParams.set('maxPrice', ui.values[1]);
                            $('.filter-btn').attr('href', url);
                            $("#amount").val(formatter.format(ui.values[0]) + " - " + formatter.format(ui.values[1]));
                        }
                    });
                    var url = new URL(location.href);
                    url.searchParams.set('minPrice', $("#slider-range").slider("values", 0));
                    url.searchParams.set('maxPrice', $("#slider-range").slider("values", 1));
                    $('.filter-btn').attr('href', url);

                    $("#amount").val(formatter.format($("#slider-range").slider("values", 0)) + " - " + formatter.format($("#slider-range").slider("values", 1)));
                });
            }
        }
    });
}(jQuery));