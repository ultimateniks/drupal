var counter = 6;
var last_clicked = 0;
$(document).ready(function() {
  last_clicked = counter;
  $('.bullet_' + counter + ' a').attr('class', 'red_bullet_sel');
  $('#content-' + counter).fadeIn('slow');
  --counter;
  setInterval("red_bullet_select()", 8000);
});

// Function handles the automatic navigation over the growth paths.
function red_bullet_select() {
  var previous = 0;
  if (counter == -1) {
    return;
  }
  if (counter == 0) {
    counter = 6;
	previous = 1;
  }
  else {
    previous = counter + 1;
  }
  $('.bullet_' + previous + ' a').attr('class', 'red_bullet');
  $('#content-' + previous).hide();
  last_clicked = counter;
  $('.bullet_' + counter + ' a').attr('class', 'red_bullet_sel');
  $('#content-' + counter).fadeIn('slow');
  --counter;
}

// Function handles the click event on the growth paths. 
function growth_path(growth_path_id) {
  if (last_clicked == 7) {
    $('.bullet_' + last_clicked).attr('class', 'bullet_7 adv_btm_gray');
  }
  else {
    $('.bullet_' + last_clicked + ' a').attr('class', 'red_bullet');
  }
  $('#content-' + last_clicked).hide();
  counter = -1;
  if (growth_path_id == 7) {
    $('.bullet_' + growth_path_id).attr('class', 'bullet_7 adv_btm_blue');
  }
  else {
    $('.bullet_' + growth_path_id + ' a').attr('class', 'red_bullet_sel');
  }
  $('#content-' + growth_path_id).fadeIn('slow');
  last_clicked = growth_path_id;
}