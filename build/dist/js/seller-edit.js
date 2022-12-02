const sellers = [
  {
    id: "1",
    name: "Linus",
    image:
      "https://scontent.fdac4-1.fna.fbcdn.net/v/t39.30808-1/283158924_116859991023742_2126874511692419102_n.jpg?stp=c0.0.100.100a_dst-jpg_p100x100&_nc_cat=108&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeHJN5dCREg3jDrU03Q8rilMaVQzMJJ3EKdpVDMwkncQpwXs03nD6YbhUnABrkKRuanij316UbxdCRVurb4IQxts&_nc_ohc=WqH5fcqzP6IAX_U8eF8&_nc_ad=z-m&_nc_cid=1160&_nc_ht=scontent.fdac4-1.fna&oh=00_AT_6d9xA-LGcmmpEhWaSQ2AwNrQJ4RL8FLKwwPdsJ5WCow&oe=628E5735",
    phone: "01739712229",
    address: "Mohammadpur",
    city: "Rangpur",
    email: "example@mail.com",
    shop_name: "Mega Shop",
    account_holder: "john",
    account_number: "1543534023233098",
    bank_name: "DBBL",
    branch_name: "Head Office",
  },
  {
    id: "2",
    name: "Steve",
    image:
      "https://scontent.fjsr1-1.fna.fbcdn.net/v/t39.30808-1/280584617_1391681361347870_1861081585521525223_n.jpg?stp=c0.0.100.100a_dst-jpg_p100x100&_nc_cat=105&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeFn9HvrCCnbY9CycwxGagNAscX0q6w4LYGxxfSrrDgtgSY42YszXag_rZAFepqNNKp7uo52XJjeFyph5wKDZATJ&_nc_ohc=ITmkKYJSEGgAX8vt_Ox&_nc_ad=z-m&_nc_cid=1112&_nc_ht=scontent.fjsr1-1.fna&oh=00_AT9fj9tiVNGUc-z5mgRs-pdDC7CGloqNpZhoikuZwOb6qA&oe=628F03CE",
    phone: "01739712229",
    address: "Shibganj",
    city: "Dinajpur",
    email: "example@mail.com",
    shop_name: "Mega Shop",
    account_holder: "john",
    account_number: "1543534023233098",
    bank_name: "DBBL",
    branch_name: "Head Office",
  },
  {
    id: "3",
    name: "Asif",
    image:
      "https://scontent.fjsr1-1.fna.fbcdn.net/v/t39.30808-1/273116542_3392452217648504_3570633216386717297_n.jpg?stp=dst-jpg_p100x100&_nc_cat=100&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeHaqs7exOAyDoFWMFzQ4eENpYOO_Q8BN_Olg479DwE387tW6_m3T6_h7aqEgZlBdGYns1pujSLLKW-Ex-ewNRrD&_nc_ohc=Ja9U84X0Dz4AX_T1otE&_nc_ad=z-m&_nc_cid=1112&_nc_ht=scontent.fjsr1-1.fna&oh=00_AT8oy9nrBNt6rRD4wHLUIPp57TnNjlSMqy1WoesnUjfn5g&oe=628E9228",
    phone: "01739712229",
    address: "Jamalpur",
    city: "Rajshahi",
    email: "example@mail.com",
    shop_name: "Mega Shop",
    account_holder: "john",
    account_number: "1543534023233098",
    bank_name: "DBBL",
    branch_name: "Head Office",
  },
  {
    id: "4",
    name: "Villers",
    image:
      "https://scontent.fjsr1-1.fna.fbcdn.net/v/t1.6435-1/120191530_100698798471166_8729913533458725377_n.jpg?stp=dst-jpg_p100x100&_nc_cat=106&ccb=1-7&_nc_sid=1eb0c7&_nc_eui2=AeE5wZ_yZuZU4Pfv2rxk49WvVFUeBqV6PV9UVR4GpXo9Xz26TuLOYhtgGbn2HbbkYcFD4y6kwz4aVNSxJKyoVQMe&_nc_ohc=bm0F8V3uaL8AX86cI-Q&_nc_ad=z-m&_nc_cid=1112&_nc_ht=scontent.fjsr1-1.fna&oh=00_AT9Kz6rV1qFpFN82uc-7kreGPtHJuYaNEwxgG1knYAwtHg&oe=62AFF802",
    phone: "01739712229",
    address: "Gobindonagar",
    city: "Dhaka",
    email: "example@mail.com",
    shop_name: "Mega Shop",
    account_holder: "john",
    account_number: "1543534023233098",
    bank_name: "DBBL",
    branch_name: "Head Office",
  },
];

const params = new URLSearchParams(window.location.search);
const get_id = params.get("id");

const edit_seller = sellers.find((c) => c.id === get_id);

function view_info_btn() {
  location.replace(`view.html?id=${get_id}`);
}

const edit_seller_form = document.getElementById("edit_seller_form");
edit_seller_form.innerHTML = `
    <div>
    <label>Full Name</label>
    <input type="text" placeholder="Full name" class="input" value="${edit_seller.name}" />
    </div>
    <div>
    <label>Email</label>
    <input type="text" placeholder="Email" class="input" value="${edit_seller.email}" />
    </div>
    <div>
    <label>Phone</label>
    <input type="text" placeholder="Phone" class="input" value="${edit_seller.phone}" />
    </div>
    <div>
    <label>Address</label>
    <input type="text" placeholder="Address" class="input" value="${edit_seller.address}" />
    </div>
    <div>
    <label>Shop Name</label>
    <input type="text" placeholder="Shop Name" class="input" value="${edit_seller.shop_name}" />
    </div>
    <div>
    <label>Account Holder</label>
    <input type="text" placeholder="Account Holder" class="input" value="${edit_seller.account_holder}" />
    </div>
    <div>
    <label>Account Number</label>
    <input type="text" placeholder="Account Number" class="input" value="${edit_seller.account_number}" />
    </div>
    <div>
    <label>Bank Name</label>
    <input type="text" placeholder="Bank Name" class="input" value="${edit_seller.bank_name}" />
    </div>
    <div>
    <label>Branch Name</label>
    <input type="text" placeholder="Branch Name" class="input" value="${edit_seller.branch_name}" />
    </div>
    <div>
    <label>City</label>
    <input type="text" placeholder="City" class="input" value="${edit_seller.city}" />
    </div>
    <div>
    <label for="change_photo">
    <img width="80" height="80" class="rounded" src="${edit_seller.image}"/>
    <span>Change Photo</span>
    </label>
    <input type="file" title="profile" id="change_photo" />
    </div>
    <button class="btn submit_btn" type="submit">Update</button>
`;

edit_seller_form.addEventListener("submit", function (e) {
  e.preventDefault();

  //   Update function (1)

  // Then go to sellers page (2)
  location.replace("all.html");
});
