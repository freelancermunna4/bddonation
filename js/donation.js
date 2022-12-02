// payment method
const payment_methods = {
    0: {
        method_name: "Bkash",
        message: "Send Money Bkash PERSONAL ",
        wallet: "01719182586",
        "1_coin_price": 1 /*BD Taka*/ ,
        currency: "BDT",
        receive_from: "Bkash Number",
    },
    1: {
        method_name: "Nagat",
        message: "Send Money Nagat PERSONAL ",
        wallet: "01719182586",
        "1_coin_price": 1 /*BD Taka*/ ,
        currency: "BDT",
        receive_from: "Nagat Number",
    },
    2: {
        method_name: "Rocket",
        message: "Send Money Rocket PERSONAL ",
        wallet: "01719182586",
        "1_coin_price": 1 /*BD Taka*/ ,
        currency: "BDT",
        receive_from: "Rocket Number",
    },
    3: {
        method_name: "Payoneer",
        message: "Payoneer Account Email",
        wallet: "shamimlem@yahoo.com",
        "1_coin_price": 0.012 /*USD*/ ,
        currency: "USD",
        receive_from: "Payoneer Email",
    },
    4: {
        method_name: "Islami Bank",
        message: "Islami Bank Account No",
        wallet: "20501380100525314",
        "1_coin_price": 1 /*BD Taka*/ ,
        currency: "BDT",
        receive_from: "Bank Account Number",
    },

    5: {
        method_name: "Visa Card",
        message: "Card Number",
        wallet: "4170338046268264",
        "1_coin_price": 0.012 /*USD*/ ,
        currency: "USD",
        receive_from: "Card Number",
    },
};

// Add Payment Method Function Receive Structure
add_payment_method({
    method_name: "Paypal",
    message: "Paypal email address",
    wallet: "mail@main.mail",
    receive_from: "Paypal Email",
    currency: "USD",
    "1_coin_price": "0.12" /*USD*/ ,
});

function add_payment_method(json_obj) {
    const new_key = Object.keys(payment_methods).length + 1;
    payment_methods[new_key] = {
        method_name: json_obj["method_name"],
        message: json_obj["message"],
        wallet: json_obj["wallet"],
        "1_coin_price": json_obj["1_coin_price"],
        currency: json_obj["currency"],
        receive_from: json_obj["receive_from"],
    };
}

const copy_svg_icon = `<i class="fa-solid fa-copy"></i>`;

const select_payment_method = document.getElementById("select_payment_method");
const payment_message = document.getElementById("payment_message");
const total_payment = document.getElementById("total_payment");

const payment_label = document.getElementById("payment_label");
const payment_input = document.getElementById("payment_input");

Object.keys(payment_methods).map((key) => {
    select_payment_method.innerHTML += `
     <option value="${key}">
      ${payment_methods[key].method_name}
     </option> 
    `;
});

let selected_send_currency = "BDT";
let selected_coin_price = 1;

select_payment_method.addEventListener("change", function(e) {
    const selected_obj = payment_methods[this.value];

    selected_coin_price = selected_obj["1_coin_price"];
    selected_send_currency = selected_obj.currency;

    payment_label.innerHTML = `Enter Your ${selected_obj.receive_from}`;

    payment_input.setAttribute("placeholder", selected_obj.receive_from);

    payment_message.innerHTML = ` 
    <div class="my-5 bg-primary text-white p-3 rounded shadow w-full text-sm relative">
    <input class="absolute top-0 opacity-0" value="${selected_obj.wallet}" id="copy_wallet_input" />
    <p class="break-words mb-2">(Receiver) ${selected_obj.message}</p> 
    <div class="p-2 rounded bg-green-600 text-white shadow flex items-center justify-between">
    <p class="w-8/12 break-words text-base riciveNumber">
    ${selected_obj.wallet}
    </p>
    <button id="copy_wallet_btn"> 
     ${copy_svg_icon}
    </button>
   </div> 
    `;

    const copy_wallet_input = document.getElementById("copy_wallet_input");
    const copy_wallet_btn = document.getElementById("copy_wallet_btn");

    copy_wallet_btn.addEventListener("click", function() {
        navigator.clipboard.writeText(copy_wallet_input.value);
        this.innerHTML = `<small>Copied</small>`;
        setTimeout(() => {
            copy_wallet_btn.innerHTML = copy_svg_icon;
        }, 1000);
    });
});

// Checkbox Hide Input functionalities
var checkBox = false;
const hide_entity_checkbox = document.getElementById("hide_entity_checkbox");
const all_hide_when_check = document.querySelectorAll(".hide_when_check");

hide_entity_checkbox.addEventListener("change", function(e) {
    if (this.checked) {
        checkBox = true;
        all_hide_when_check.forEach((ele) => {
            ele.style.display = "none";
        });
    } else {
        checkBox = false;
        all_hide_when_check.forEach((ele) => {
            ele.style.display = "flex";
        });
    }
});


var cause_area = "all";
var tarms = false;
var hideme = false;
$('.btn-submit').click((e) => {
    var amount = $('#deposit_amount_input').val();
    var paymethod = $('.paymethod :selected').text();
    var riciveNumber = $('.riciveNumber').html();
    var name_inpute = $('#name-inpute').val();
    var email_input = $('#payment_input1').val(); 
    var payment_input = $('#payment_input').val();
    var trx_id = $('#trx_id').val();
    var address = $('#address').val();
    if (hideme) {
        if (amount == "") {
            swal("Empty!", "Please Add Amount!", "error");
            // alert("Add Amount");
        } else if (paymethod === null) {
            swal("Empty!", "Please Add Payment Option!", "error");

        } else if (!tarms) {
            swal("Empty!", "Please Check our Turm And Condition!", "error");

        } else {
            $.ajax({
                type: "POST",
                url: "system/ajax.php",
                data: 'amount=' + amount + '&paymethod=' + paymethod  + '&riciveNumber=' + riciveNumber + '&cause_area=' + cause_area + '&hidden=' + "hidden",
                success: function(z) {
                    if (z.trim() === "Success") {
                        swal("Success!", "Thanks For Donate !", "success");
                    } else {
                        swal("Error!", "Sumething Wrong!", "error");
                    }


                }
            });
        }

    } else {
        if (amount == "") {
            swal("Empty!", "Please Add Amount!", "error");
            // alert("Add Amount");
        } else if (paymethod === null) {
            swal("Empty!", "Please Add Payment Option!", "error");

        } else if (name_inpute == "") {
            swal("Empty!", "Please Enter Your Name!", "error");

        } else if (payment_input == "") {
            swal("Empty!", "Please Enter Number/Email!", "error");

        } else if (trx_id == "") {
            swal("Empty!", "Please Enter Transaction ID!", "error");

        } else if (address == "") {
            swal("Empty!", "Please Enter  Your Address!", "error");

        } else if (!tarms) {
            swal("Empty!", "Please Check our Turm And Condition!", "error");

        } else {
            $.ajax({
                type: "POST",
                url: "system/ajax.php",
                data: 'amount=' + amount + '&paymethod=' + paymethod + '&email_input=' + email_input + '&riciveNumber=' + riciveNumber + '&name_inpute=' + name_inpute + '&cause_area=' + cause_area + '&payment_input=' + payment_input + '&trx_id=' + trx_id + '&address=' + address,
                success: function(z) {
                    console.log(z);
                    if (z.trim() === "Success") {
                        swal("Success!", "Thanks For Donate, Check Your Donation Letter, After Admin Aprove !", "success");
                    } else {
                        swal("Error!", "Sumething Wrong!", "error");
                    }


                }
            });
        }
    }

})






function causeArea(params) {
    cause_area = params;

}


function turms() {
    if ($("#checkbox2").is(":checked")) {
        tarms = true;
    } else {
        tarms = false;
    }
}

function hidem() {
    if ($("#hide_entity_checkbox").is(":checked")) {
        hideme = true;
    } else {
        hideme = false;
    }
}