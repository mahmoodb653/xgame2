jQuery(document).ready(function ($) {

    $('#parent-category li').click(function () {

        $('#parent-category li').removeClass('active');
        $(this).addClass('active');

        $.ajax({
            url: cxgame.ajaxurl,
            data: {
                action: 'xgame_archive_category',
                cid: $(this).data("cid")
            },
            async: true,
            cache: false,
            type: 'get',
            success: function (response) {

                $('#subcategory-placholder').html(response);

                $('#subcategory-placholder li').click(function (e) {

                  e.preventDefault();
                    $('#subcategory-placholder li').removeClass('active-fill');
                    $(this).addClass('active-fill');

                    $.ajax({
                        url: cxgame.ajaxurl,
                        data: {
                            action: 'xgame_archive_render_product_by_cat',
                            cid: $(this).data("scid")
                        },
                        async: true,
                        cache: false,
                        type: 'get',
                        success: function (response) {

                            $('ul.products').html(response);

                        }
                    });
                })
            }
        });

        $.ajax({
            url: cxgame.ajaxurl,
            data: {
                action: 'xgame_archive_render_product_by_cat',
                cid: $(this).data("cid")
            },
            async: true,
            cache: false,
            type: 'get',
            beforeSend: function(){
                $('.products-list').prepend('<div class="aparat-video-modal"><i class="fas fa-circle-notch fa-spin"></i></div>');
            },
            success: function (response) {

                $('.products-list').html(response);

            }
        });

    })

})
