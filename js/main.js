function addToCart(itemId){
    console.log("js - addToCart()");
    $.ajax({
        type: 'POST',
        async: true,
        url: "/cart/addtocart/" + itemId + '/',
        dataType: 'json',
        success: function(data){
            if(data['success']){
            $('#CartCntItems').html(data['cntItems']);
            
            $('#addCart_'+itemId).hide();
            $('#removeCart_'+itemId).show();
        }
    }   
    });
}
function removeFromCart(itemId){
    console.log("js-removeFromCart("+itemId+")");
    $.ajax({
        type: 'POST',
        async: true,
        url: "/cart/removefromcart/" + itemId + '/',
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#CartCntItems').html(data['cntItems']);
                $('#addCart_'+itemId).show();
                $('#removeCart_'+itemId).hide();
            }
        }
    });
}
