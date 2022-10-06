// This is a public sample test API key.
// Don’t submit any personally identifiable information in requests made with this key.
// Sign in to see your own test API key embedded in code samples.
const stripe = Stripe("pk_test_51LjdwlLmuafw767dURIeEjyI2lw9E2fj5LPqBUMVlfvG50gGWxJuepu5MlOEn5EctzVwY5yldADQ52YURg3jstFx00Xhm3Zi6R");

// The items the customer wants to buy
const items = [{ id: "xl-tshirt" }];

let elements;

initialize();
checkStatus();

document
  .querySelector("#payment-form")
  .addEventListener("submit", handleSubmit);

// Fetches a payment intent and captures the client secret
async function initialize() {
  const { clientSecret } = await fetch("/CheekyMonkey/create.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ items }),
  }).then((r) => r.json());

  const appearance = {
    theme: 'night'
  };
  elements = stripe.elements({ clientSecret , appearance});

  const paymentElement = elements.create("payment");
  paymentElement.mount("#payment-element");
}

async function handleSubmit(e) {
  e.preventDefault();
  setLoading(true);

  const { error } = await stripe.confirmPayment({
    elements,
    confirmParams: {
      // Make sure to change this to your payment completion page
      return_url: "http://localhost/CheekyMonkey/33_thankyou.html",
    },
  })
  .then(function(result){
    if(result.error){
      console.log("PAYMENT ERROR: ", result.error);
    } else {
      console.log("Payment success")
      window.location.href = "../33_thankyou.html";
    }
  })

  console.log("PAYMENT");
  // This point will only be reached if there is an immediate error when
  // confirming the payment. Otherwise, your customer will be redirected to
  // your `return_url`. For some payment methods like iDEAL, your customer will
  // be redirected to an intermediate site first to authorize the payment, then
  // redirected to the `return_url`.
  // if (error.type === "card_error" || error.type === "validation_error") {
  //   console.log(error.message);
  // } else {
  //   console.log("An unexpected error occurred.");
  // }

  setLoading(false);
}

// Fetches the payment intent status after payment submission
async function checkStatus() {
  const clientSecret = new URLSearchParams(window.location.search).get(
    "payment_intent_client_secret"
  );

  if (!clientSecret) {
    return;
  }

  const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

  switch (paymentIntent.status) {
    case "succeeded":
      console.log("Payment succeeded!");
      break;
    case "processing":
      console.log("Your payment is processing.");
      break;
    case "requires_payment_method":
      console.log("Your payment was not successful, please try again.");
      break;
    default:
      console.log("Something went wrong.");
      break;
  }
}

// ------- UI helpers -------

function showMessage(messageText) {
  const messageContainer = document.querySelector("#payment-message");

  messageContainer.classList.remove("hidden");
  messageContainer.textContent = messageText;

  setTimeout(function () {
    messageContainer.classList.add("hidden");
    messageText.textContent = "";
  }, 4000);
}

// Show a spinner on payment submission
function setLoading(isLoading) {
  if (isLoading) {
    // Disable the button and show a spinner
    document.querySelector("#submit").disabled = true;
    // document.querySelector("#spinner").classList.remove("hidden");
    // document.querySelector("#button-text").classList.add("hidden");
  } else {
    document.querySelector("#submit").disabled = false;
    // document.querySelector("#spinner").classList.add("hidden");
    // document.querySelector("#button-text").classList.remove("hidden");
  }
}