// Confirm Delete Button Function
function confirm_delete_channel(get_channel_id) {
  // delete channel here
  console.log("this is channel id ", get_channel_id);

  setTimeout(() => {
    hide_modal("channel_delete_popup_wrapper", "channel_delete_popup_content");
    setTimeout(() => {
      show_alert("Successfully deleted!");
    }, 110);
  }, 100);
}

// Confirm Add Subscribe Button Function
function confirm_add_subscribe(get_channel_id) {
  // add subscribe here
  console.log("this is channel id ", get_channel_id);

  setTimeout(() => {
    hide_modal("channel_add_popup_wrapper", "channel_add_popup_content");
    setTimeout(() => {
      show_alert("Subscribe Added!");
    }, 110);
  }, 100);
}
