$('.start-pages-btn').click(function(e){
    localStorage.clear();
    let content = $(this).data('content');
    // let link = $(this).attr('href');
    localStorage.setItem("contentstart", content);
    e.preventDefault();
    // window.location.href = link;
});

function saveStart(url, data){
    localStorage.clear(); //initialize localstorage
    localStorage.setItem("01-contentstart", data );
    window.location.href = url;

}
//https://usefathom.com/docs/script/script-advanced
//https://codecanyon.net/item/paymoney-secure-online-payment-gateway/22341650

$('.specialty > .query-item').click(function(e){
    let con = $(this).data('content');
    localStorage.setItem('02-specialty',con);
});
$('.clientsnow > .query-item').click(function(e){
    let con = $(this).data('content');
    localStorage.setItem('04-clientsnow',con);
});
$('.clientsafter > .query-item').click(function(e){
    let con = $(this).data('content');
    localStorage.setItem('06-clientsafter',con);
});
    
$('#brandname').focusout(function(){
    
    var bname = $('#brandname').val();
    var bsave = bname.trim();
    localStorage.setItem('11-brandname',bsave);
});


$('#sell-product-ipt').focusout(function(){
    let con = $('#sell-product-ipt').val();
    localStorage.setItem("15-sell-product-title", con.trim());
});
$('#sell-product-txt').focusout(function(){
    let con = $('#sell-product-txt').val();
    localStorage.setItem("15-sell-product-description", con.trim());
});
$('#cost-low-high').focusout(function(){
    let lh = $("#cost-low-high").val();
    localStorage.setItem("16-cost-low-high", lh.trim());
});

$('#special-offer').focusout(function(){
    let so = $('#special-offer').val();
    localStorage.setItem("17-com-special-offer", so.trim());
});
$('.sell-btn').click(function(){

    if ( document.URL.includes("12_direction") ) {
        let content = $(this).data('content');
        localStorage.setItem("12-contentsell", content);
    }    
    if ( document.URL.includes("19_way")) {       
        let arr = [];
        //arr = localStorage.get("industry");
        let ele = $(this).data('content');
        let oldArr = null;
        oldArr = localStorage.getItem("19-way");       
        if(oldArr != null)
            arr = oldArr.split(',');
        if($(this).hasClass('selected')){
            $(this).removeClass('selected');
            $(this).blur();

            //get clicked button data        
            var filtered = arr.filter(function(value, index, arr){
                return value != ele;
            });        
            localStorage.setItem('19-way', filtered);            
        } else {
            $(this).addClass('selected');          
            if(arr.indexOf(ele) < 0)
            {
                console.log("arr => ", arr);
                arr.push(ele);
            }
            localStorage.setItem('19-way', arr);           
        }
    }    

});
$('#company-strengths').focusout(function(){
    let con = $(this).val();
    localStorage.setItem("18-company-strengths",con.trim());
});
$('#regions-txt').focusout(function(){
    let con = $(this).val();
    localStorage.setItem("20-regions-txt", con.trim());
});
$('#target-txt').focusout(function(){
    let con = $(this).val();
    localStorage.setItem('24-target', con.trim());
});
$("#email-ipt").focusout(function(){
    let mail = $(this).val();
    localStorage.setItem("31-email", mail.trim());
});
$('.query-content-btn-board > .query_sel_btn').click(function(e){
    // var border = $(this).css('border-color');
    let arr = [];
    //arr = localStorage.get("industry");
    let ele = $(this).data('content');
    let oldArr = null;
    let flag = 1
    if ( document.URL.includes("13_industry") ){
      oldArr = localStorage.getItem("13-industry");
      flag = 13;
    } 
    if(document.URL.includes("25_interests") ){
      oldArr = localStorage.getItem("25-interests");
      flag = 25;
    }

    if(oldArr != null)
        arr = oldArr.split(',');

    console.log("arr init => ", arr);
    if($(this).hasClass('selected'))
    {   
        $(this).removeClass('selected');
        $(this).blur();

        //get clicked button data        
        if(flag == 13){            
            var filtered = arr.filter(function(value, index, arr){
                return value != ele;
            });        
            localStorage.setItem('13-industry', filtered);        
        }
        if(flag == 25){            
            var filtered = arr.filter(function(value, index, arr){
                return value != ele;
            });        
            localStorage.setItem('25-interests', filtered);        
        }

    } else {
        
        $(this).addClass('selected');
        if(arr.indexOf(ele) < 0 && flag == 13)
        {
            arr.push(ele);
            localStorage.setItem('13-industry', arr);
        }
        if(arr.indexOf(ele) < 0 && flag == 25)
        {
            arr.push(ele);
            localStorage.setItem('25-interests', arr);
        }
    }

    // alert(border);
});

$('.usage-time-step__conoptions > .usage-time-step__option').click(function(e){
    let arr = [];
    //arr = localStorage.get("industry");
    let ele = $(this).data('content');
    let oldArr = null;
    let flag = 1; //decide if multiselect or not
    if ( document.URL.includes("17_offer")) {       
        oldArr = localStorage.getItem("17-company-sell");       
        if(oldArr != null)
            arr = oldArr.split(',');
        flag = 17;
    }    

    if($(this).hasClass('selected')){
        $(this).removeClass('selected');
        $(this).blur();
        if(flag == 17){
            //get clicked button data        
            var filtered = arr.filter(function(value, index, arr){
                return value != ele;
            });        
            localStorage.setItem('17-company-sell', filtered);  
        }
    } else {
        $(this).addClass('selected');
        if(flag == 17){
            if(arr.indexOf(ele) < 0)
            {
                console.log("arr => ", arr);
                arr.push(ele);
            }
            localStorage.setItem('17-company-sell', arr);
        }
    }
});
$('.query-main-conboard > .query-item').click(function(e){

    let arr = [];
    //arr = localStorage.get("industry");
    let ele = $(this).data('content');
    console.log("18con = ", ele);
    let oldArr = null;
    let flag = 0;
    if ( document.URL.includes("18_strengths")) {       
        oldArr = localStorage.getItem("18_strengths");       
        if(oldArr != null)
            arr = oldArr.split(',');
        flag = 18; //decide if multiselect or not
    }
    if ( document.URL.includes("21_gender")) {       
        oldArr = localStorage.getItem("21_gender");       
        if(oldArr != null)
            arr = oldArr.split(',');
        flag = 21; //decide if multiselect or not
    }
    if ( document.URL.includes("22_age")) {       
        oldArr = localStorage.getItem("22_age");       
        if(oldArr != null)
            arr = oldArr.split(',');
        flag = 22; //decide if multiselect or not
    }

    if($(this).hasClass('selected')){
        $(this).removeClass('selected');
        $(this).blur(); 
        if(flag == 18){
            //get clicked button data        
            var filtered = arr.filter(function(value, index, arr){
                return value != ele;
            });        
            localStorage.setItem('18_strengths', filtered);     
        }
        if(flag == 21){
            //get clicked button data        
            var filtered = arr.filter(function(value, index, arr){
                return value != ele;
            });        
            localStorage.setItem('21_gender', filtered);     
        }
        if(flag == 22){
            //get clicked button data        
            var filtered = arr.filter(function(value, index, arr){
                return value != ele;
            });        
            localStorage.setItem('22_age', filtered);     
        }
    } else {
        $(this).addClass('selected');      
        if(flag == 18){
            if(arr.indexOf(ele) < 0)
            {
                console.log("arr => ", arr);
                arr.push(ele);
            }
            localStorage.setItem('18_strengths', arr);   
        }
        if(flag == 21 && arr.indexOf(ele) < 0){             
            arr.push(ele);            
            localStorage.setItem('21_gender', arr);   
        }
        if(flag == 22 && arr.indexOf(ele) < 0){             
            arr.push(ele);            
            localStorage.setItem('22_age', arr);   
        }
    }
});

$('.query-content-btn-conboard > .query_sel_btn').click(function(e){

    var ele = $(this).data('content');
    if($(this).hasClass('selected')){
        $(this).removeClass('selected');
        $(this).blur(); 
    } else {
        $(this).addClass('selected');
    }
});

$('.pay-text__more').click(function(e){
    $('.pay-text__hide').show();
    $('.pay-text__more').hide();   
    // $('.pay-text').addClass('active');
    $('.pay-text').css('height','auto');
    $('.pay-text').css('overflow','visible');

});

$('.pay-text__hide').click(function(e){
    $('.pay-text__hide').hide();
    $('.pay-text__more').show();    
    $('.pay-text').css('height','45px');
    $('.pay-text').css('overflow','hidden');

});

function res_email(){
    alert("ddd");
}



















// function sendRegistration() {
//     $.ajax({
//         type: "POST",
//         url: "/send-1.php",
//         data: {
//           "domen": $('[name=domen]').val(), 
//           "email": $('[name=email]').val(),
//           "utmSource": localStorage.getItem("utmSource"),
//           "utmMedium": localStorage.getItem("utmMedium"),
//           "utmCampaign": localStorage.getItem("utmCampaign"),
//           "utmContent": localStorage.getItem("utmContent"),
//           "utmTerm": localStorage.getItem("utmTerm"),
//         }
//     }).done(function() {
//         localStorage.setItem("email", $('[name=email]').val());
//         console.log('succes');
//         fathom.trackGoal('BE3Y3VJ3', 0);
//         document.location.href = "trial.html";
//     });
// }

// $('.enter-form form').validate({
//           rules: {
//           //   // fio: {
//           //   //   required: true,
//           //   // },
//           //   // phone: {
//           //   //   required: true,
//           //   //   minlength: 10
//           //   // },
//           //   email: {
//           //       required: true,
//           //       minlength: 5
//           //   },
//           //   password: {
//           //       required: true,
//           //       minlength: 5
//           //   },
//           //   cardNumber: {
//           //       required: false,
//           //   },
//           //   expiryDate: {
//           //       required: false,
//           //   },
//           //   cvv: {
//           //       required: false,
//           //   }
//           // },
//           // messages: {
//           //   // fio: {
//           //   //     required: $('.form__name').data('required'),
//           //   //   },
//           //   //   phone: {
//           //   //     required: $('.form__name').data('required'),
//           //   //     minlength: jQuery.validator.format($('.form__name').data('msg')),
//           //   //   },
//           //     email: {
//           //       required: "Please fill in the field",
//           //       email: "Please fill in the field",
//           //     },
//           //     password: {
//           //       required: "Please fill in the field",
//           //       minlength: 'The field must contain at least 5 characters.',
//           //   },
//           //   },
//             submitHandler: function() {
//                 $('.signup-form__cta').addClass('loading').addClass('active');
//                 sendRegistration();
                
//                 // var valid = $('#payment-stripe').paymentForm('valid');
//                 // if (valid) {
//                 //     checkout();
//                 // }
//             }
//         });

//         function checkout()
//   {
//       let exp = $('[name=expiryDate]').val().replace(/ /g, "");
      
//       $('.signup-form__cta').addClass("signup-form__cta-disable");
//     $.ajax({
//       method:"POST",
//       url: "https://staging.zeely.link/stripe/subscription-session", 
//       data:{     
            
//           "email": $('[name=email]').val(),
//           "name": $('[name=email]').val(),
//           "cardNumber":$('[name=cardNumber]').val(),
//           "expiryDate": exp,
//           "securityCode": $('[name=cvv]').val(),
//           "productId":"price_1LdbNoLjt2Wv3Hn8X5oBUz6b"
//       },
//     success: function(result){
//         console.log("result::",result.message)
//         if(result.message === "Success"){
//             sendEmail();
//         } else{
//             $('.signup-form__cta').removeClass("signup-form__cta-disable");
//             $('.enter-title').hide();
//             $('.enter-form-error').fadeIn();
//             $('.enter-form-error span').html(result.message);
//         }
//     },
//     error: function(error){
//         $('.signup-form__cta').removeClass("signup-form__cta-disable");
//         $('.enter-title').hide();
//         $('.enter-form-error').fadeIn();
//         $('.enter-form-error span').html('error');
//     },
//   }
//   );
//   }