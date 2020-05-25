jQuery(document).ready(function($) {

    $(".wpp-get-price").click(function(){
        var pId = $(this).attr("data-prod-id");
        var data = {
            action: 'my_action',
            whatever: pId      // We pass php values differently!
        };

        jQuery.post(wpsc_ajax.ajaxurl, data, function(response) {
            $(".wpp-msg").html("Добавлен товар для уточнения").fadeIn().delay(1000).fadeOut();
            $(".wpp-text").html(response);
        });

    });

    $(".wpp-del-prod").click(function(){
        var pId = $(this).attr("data-prod-id");
        var data = {
            action: 'wpp_del_prod',
            prod_id: pId      // We pass php values differently!
        };
        var tr = $(this).closest('tr');

        jQuery.post(wpsc_ajax.ajaxurl, data, function(response) {
            $(".wpp-text").html(response);
        }).done(function(){
                tr.fadeOut(400, function(){
                    tr.remove();
                });
            });

    });

    $(document).on("submit", "#wpp-get-price", function(e){
        e.preventDefault();

        var dat = $(this).serialize();
        $.ajax({
            url: wpsc_ajax.ajaxurl,
            type: "POST",
            data: dat,
            success: function(data){
                alert(data)
            }
        });
        $(this).trigger( 'reset' );

    });


    // We can also pass the url value separately from ajaxurl for front end AJAX implementations

});