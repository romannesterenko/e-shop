$(function (){
    updateCartInfo();
    $(document).on('change', '.cart-plus-minus-box', function (e){
        //e.preventDefault();
        var cart_id = $(this).data('id');
        var quantity = $(this).val();
        console.log(cart_id);
        console.log(quantity);
        $.ajax({
            method: 'GET',
            url: "api/set_quantity/"+quantity+"/"+cart_id,
            data: {},
            dataType: 'json',
            success: function (response){
                $('.amount[data-id="'+cart_id+'"]').empty().text(response.price+' zl')
                $('.cart_total span').empty().text(response.total+' zl')
                updateCartInfo();
            }
        });

    })
    $(document).on('click', '.cart-plus-minus .qtybutton', function (e){
        e.preventDefault()
        var parent = $(this).parent('.cart-plus-minus');
        var action = $(this).hasClass('dec')?'dec':'inc';
        var cart_id = $(this).parent('.cart-plus-minus').data('id');
        $.ajax({
            method: 'GET',
            url: "api/card_actions/"+action+"/"+cart_id,
            data: {},
            dataType: 'json',
            success: function (response){
                $('.amount[data-id="'+cart_id+'"]').empty().text(response.price+' zl')
                $('.cart_total span').empty().text(response.total+' zl')
                updateCartInfo();
            }
        });
    })
    $(document).on('click', '.addToCart', function (e){
        e.preventDefault()
        var product_id = $(this).data('product-id');
        var product_qty = 1
        $.ajax({
            method: 'GET',
            url: "/catalog/add_to_cart/"+product_id+"/"+product_qty,
            data: {},
            dataType: 'json',
            success: function (response){
                updateCartInfo();
            }
        });
    })
    /*$(document).on('click', '#logout_button', function (e){
        e.preventDefault()
        $.ajax({
            method: 'POST',
            url: "/logout",
            data: {},
            dataType: 'json',
            success: function (response){
                location.reload();
            }
        });
    })*/
    $(document).on('click', '.deleteFromCart', function (e){
        e.preventDefault()
        var item_id = $(this).data('item-id');
        $.ajax({
            method: 'GET',
            url: "/catalog/delete_from_cart/"+item_id+"/"+$('#session_id').val(),
            data: {},
            dataType: 'json',
            success: function (response){
                updateCartInfo();
            }
        });
    })
    $(document).on('click', '.deleteFromCartPage', function (e){
        e.preventDefault()
        var link = $(this);
        var item_id = $(link).data('id');
        $.ajax({
            method: 'GET',
            url: "/catalog/delete_from_cart/"+item_id+"/"+$('#session_id').val(),
            data: {},
            dataType: 'json',
            success: function (response){
                //$(link).parents('tr').remove();
                updateCartInfo(item_id);
            }
        });
    })
})
function updateCartInfo(item_id=0) {
    $.ajax({
        type:'GET',
        url:'/api/getCart/'+$('#session_id').val(),
        dataType: 'html',
        success:function(data) {
            $('.offcanvas-body.cart_body').empty().html(data);
        }
    });
    $.ajax({
        type:'GET',
        url:'/api/getCountCart/'+$('#session_id').val(),
        dataType: 'html',
        success:function(data) {
            $('.minicart-btn .quantity').empty().text(data);
        }
    });
    if($('.cart_total li span').length>0){
        $.ajax({
            type:'GET',
            url:'/api/getTotalSum/'+$('#session_id').val(),
            dataType: 'html',
            success:function(data) {
                $('.cart_total li span').empty().text(data+' zl');
            }
        });
    }
    if($('a.deleteFromCartPage').length>0){
        $('a.deleteFromCartPage[data-id="'+item_id+'"]').parents('tr').remove();
    }
}
