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

function conversionPrice(itemId){
    var newCnt = $('#itemCnt_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).attr('value');
    var itemRealPrice = newCnt * itemPrice;
    
    $('#itemRealPrice_' + itemId).html(itemRealPrice);
}


function getData(obj_form){
    var hData = {};
    $('input, textarea, select', obj_form).each(function(){
        if(this.name && this.name!=''){
            hData[this.name] = this.value;
            console.log('hData[' + this.name + '] = ' + hData[this.name]);
        }
    });
    return hData;
}

function registerNewUser(){
    var postData = getData('#registerBox');
    
    $.ajax({
        type: 'POST',
        async: false,
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if (data['success']) {
                alert('Регитсрация прошла успешно');
                
                $('#registerBox').hide();
        }else{
            alert(data['message']);
        }
        }
    });
}
