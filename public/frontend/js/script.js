var state = false;
function toggle() {
  if (state) {
    document.getElementById("password").setAttribute("type", "password");
    state = false;
  } else {
    document.getElementById("password").setAttribute("type", "text");
    state = true;
  }
}

function radioValidation() {

  var izin = document.getElementsByName('izin');
  var state = false;

  for (var i = 0; i < izin.length; i++) {
    if (izin[i].checked == true) {
      document.getElementsByName('izin').style.color = "#EFF0F9";
      state = true;
    }
  }

}