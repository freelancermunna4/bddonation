// Visits Limit "INPUT" Enabled/Disabled
const ac_limit_select = document.getElementById("ac_limit_select");
const ac_limit_input = document.getElementById("ac_limit_input");
ac_limit_select.addEventListener("change", function () {
  if (this.value === "enabled") {
    ac_limit_input.removeAttribute("disabled");
  } else if (this.value === "disabled") {
    ac_limit_input.setAttribute("disabled", "true");
  }
});
// Visits Limit "INPUT" Enabled/Disabled
