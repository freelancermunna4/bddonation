// payment method
const payment_methods = {
  Bkash: {
    message: "Send Money Bkash PERSONAL Minimum (100Taka)",
    wallet: "01719182586",
    "1_coin_price": 1,
    currency: "BDT",
  },
  Nagat: {
    message: "Send Money Nagat PERSONAL Minimum (100Taka)",
    wallet: "01719182586",
    "1_coin_price": 1,
    currency: "BDT",
  },
  Rocket: {
    message: "Send Money Rocket PERSONAL Minimum (100Taka)",
    wallet: "01719182586",
    "1_coin_price": 1,
    currency: "BDT",
  },
  Payoneer: {
    message: "Payoneer Account Email",
    wallet: "shamimlem@yahoo.com",
    "1_coin_price": 0.012,
    currency: "USD",
  },
  Bank: {
    message: "Islami Bank Account No",
    wallet: "20501380100525314",
    "1_coin_price": 1,
    currency: "BDT",
  },
  "Visa Card": {
    message: "Card Number",
    wallet: "4170338046268264",
    "1_coin_price": 0.012,
    currency: "USD",
  },
  Bitcoin: {
    message: "Bitcoin Wallet Address",
    wallet: "0x724Ea071aE11EB19a8Ee0329E126786615f5b28b",
    "1_coin_price": 0.012,
    currency: "USD",
  },
};

const copy_svg_icon = `<i class="fa-solid fa-copy"></i>`;

const select_payment_method = document.getElementById("select_payment_method");
const payment_message = document.getElementById("payment_message");
const total_payment = document.getElementById("total_payment");

Object.keys(payment_methods).map((key) => {
  select_payment_method.innerHTML += `
   <option value="${key}">${key}</option> 
  `;
});

let selected_send_currency = "BDT";
let selected_coin_price = 1;

function show_total_payment(get_1_coin_price, currency) {
  const deposit_amount_input = document.getElementById("deposit_amount_input");
  const total = (
    Number(deposit_amount_input.value) *
    (get_1_coin_price || selected_coin_price)
  ).toFixed(2);
  total_payment.innerHTML = `
    <div class = "w-full p-2 text-sm rounded mt-2 bg-gray-500 text-white"> Send Amount <b>${total} </b> ${
    currency || selected_send_currency
  }
    </div>
  `;
}

select_payment_method.addEventListener("change", function (e) {
  selected_coin_price = payment_methods[this.value]["1_coin_price"];
  selected_send_currency = payment_methods[this.value].currency;
  show_total_payment(selected_coin_price, selected_send_currency);

  payment_message.innerHTML = `
  <div class="flex flex-col lg:flex-row gap-7 overflow-hidden">
  <div class="mt-2 bg-green-300 dark:bg-green-600 dark:text-white p-3 rounded shadow w-full text-sm relative">
  <input class="absolute top-0 opacity-0" value="${
    payment_methods[this.value].wallet
  }" id="copy_wallet_input" />
  <p class="break-words mb-2">${payment_methods[this.value].message}</p> 
  <div class="p-2 rounded bg-green-800 text-white shadow flex items-center justify-between">
  <p class="w-8/12 break-words text-sm">
  ${payment_methods[this.value].wallet}
  </p>
  <button id="copy_wallet_btn"> 
   ${copy_svg_icon}
  </button>
 </div>
</div>
<div class="w-full hidden lg:block opacity-0"></div>
</div>
  `;

  const copy_wallet_input = document.getElementById("copy_wallet_input");
  const copy_wallet_btn = document.getElementById("copy_wallet_btn");

  copy_wallet_btn.addEventListener("click", function () {
    navigator.clipboard.writeText(copy_wallet_input.value);
    this.innerHTML = `<small>Copied</small>`;
    setTimeout(() => {
      copy_wallet_btn.innerHTML = copy_svg_icon;
    }, 1000);
  });
});
