$(document).ready(function() {
    $('.btn-icon.add_to_cart').click(function () {
        var id = $(this).attr('data-id');
        $.ajax({
            type:'get',
            url:"/order/add_to_cart/"+id,
            success:function(data){
                $('#cart_count').html(data);
            }
        });
        return false;
    });

    $('#label5').click(function () {
        $.get( "/order/quick_view_cart", function( data ) {
            var content = [];
            $.each(data, function (index, val) {
                //console.log('Index:' + index, 'val:' + val.id);

                var html ='<li class="item-cart">' +
                    '<div class="product-img-wrap">' +
                        '<a href="#"><img src="' + val.image +'" alt="" class="img-reponsive"></a>' +
                    '</div>' +
                    '<div class="product-details">' +
                        '<div class="inner-left">' +
                            '<div class="product-name"><a href="#">' + val.name + '</a></div>' +
                            '<div class="product-price">' +
                                val.price + "грн" +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>' +
                '</li>';
                content.push(html);
                //

            });
            console.log(content);
            $('#mini-products-list').html(content);
        });
    });
});
