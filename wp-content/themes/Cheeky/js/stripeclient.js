"use strict";
console.log('usa');
var stripe = Stripe('pk_test_51LjdwlLmuafw767dURIeEjyI2lw9E2fj5LPqBUMVlfvG50gGWxJuepu5MlOEn5EctzVwY5yldADQ52YURg3jstFx00Xhm3Zi6R', {
  apiVersion: "2022-09-19" // "allow-same-origin": true

});
var paymentRequest = stripe.paymentRequest({
  country: 'UK',
  currency: 'GBP',
  total: {
    label: 'Demo total',
    amount: 150
  },
  requestPayerName: true,
  requestPayerEmail: true
});
console.log("paymentRequest::::", paymentRequest);

var elements = stripe.elements();
var prButton = elements.create('paymentRequestButton', {
  paymentRequest: paymentRequest
}); 
// Check the availability of the Payment Request API first.
paymentRequest.canMakePayment().then(function(result) {
  if (result) {
    prButton.mount('#payment-request-button');
  } else {
    // document.getElementById('payment-request-button').style.display = 'none';
  }
});


// paymentRequest.canMakePayment().then(function (result) {
//   console.log("result::::", result);
//   prButton.mount('#payment-request-button');

//   if (result) {
//     document.getElementsByClassName("e-wallet-button")[0].style.display = "";
//     $(".pay__input").show();
    
//     prButton.mount('#payment-request-button');
//   } else {
//     document.getElementById('payment-request-button').style.display = 'none';
//     $(".pay__input").hide();
//   }
// });


let emailSend;

if (typeof localStorage.getItem("email") !== 'undefined' && localStorage.getItem("email") !== null) {
  emailSend = localStorage.getItem("email");
} else {
  emailSend = 'mail@zeely.app';
}


  function sendEmail() {
    $.ajax({
      type: "POST",
      url: "/send-2.php",
      data: {
        "domen": $('[name=domen]').val(),
        "email": emailSend,
        //$('[name=email]').val(),
        "utmSource": localStorage.getItem("utmSource"),
        "utmMedium": localStorage.getItem("utmMedium"),
        "utmCampaign": localStorage.getItem("utmCampaign"),
        "utmContent": localStorage.getItem("utmContent"),
        "utmTerm": localStorage.getItem("utmTerm")
      }
    }).done(function () {
      document.getElementsByClassName("loading")[0].style = "display:none";
      document.location.href = "thankyou.html";
    });
  }

  
paymentRequest.on('paymentmethod', function (event) {
  // event.paymentMethod is available
  console.log("event.payment method:::", event.paymentMethod.id); //document.getElementsByClassName("loading")[0].style="display:"

  $.ajax({
    method: "POST",
    //url: "https://staging.zeely.link/stripe/e-wallet",
	   url: "https://zee.sale/free/en/applepay.php",
    data: {
      "email": emailSend,
      "name": emailSend,
      "token": event.paymentMethod.id
    },
    success: function success(result) {
		console.log(result);
      if (result == "success") {
        sendEmail(); // document.getElementsByClassName("loading")[0].style="display:none"
        // document.location.href = "/thankyoupage.html";
      } else {
        document.getElementsByClassName("loading")[0].style = "display:none";
        $('.popup').fadeIn();
        $('.popup-container p').text(result.message);
      }
    },
    error: function error(_error) {
      console.log("e-wallet error:::", _error);
		 document.getElementsByClassName("loading")[0].style = "display:none";
      $('.popup').fadeIn();
      $('.popup-container p').text(_error);
    }
  });
}); //paymentRequest.on('token', function(event) {
// event.token is available
// console.log("event.payment:::",event.token)
//});




if (window.location.href.match('utm_*')) {
  var getUtmParameter = function getUtmParameter(sParam) {
    var url = window.location.search.substring(1);
    var urlVariables = url.split('&');

    for (var i = 0; i < urlVariables.length; i++) {
      var variables = urlVariables[i].split('=');

      if (variables[0] === sParam) {
        return variables[1];
      }
    }
  };




  var utmCampaign = getUtmParameter('utm_campaign');
  localStorage.setItem("utmCampaign", utmCampaign);
  var utmMedium = getUtmParameter('utm_medium');
  localStorage.setItem("utmMedium", utmMedium);
  var utmSource = getUtmParameter('utm_source');
  localStorage.setItem("utmSource", utmSource);
  var utmContent = getUtmParameter('utm_content');
  localStorage.setItem("utmContent", utmContent);
  var utmTerm = getUtmParameter('utm_term');
  localStorage.setItem("utmTerm", utmTerm);
}