function signin() {
  var name = document.getElementById("logname");
  var email = document.getElementById("logemail");
  var mobile = document.getElementById("logmobile");
  var password = document.getElementById("logpass");
  var gender = document.getElementById("gender");

  var form = new FormData();
  form.append("n", name.value);
  form.append("e", email.value);
  form.append("m", mobile.value);
  form.append("p", password.value);
  form.append("g", gender.value);

    var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.status == 200 && request.readyState == 4) {
      var response = request.responseText;
      alert(response);
    }
  };

  request.open("POST", "signupprocess.php", true);
  request.send(form);
}
