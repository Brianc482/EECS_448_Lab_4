function validate() {
  var username, pGoats, bGoats, blGoats, gGoats;

  user = document.forms["blockForm"]["username"].value;
  pGoats = document.forms["blockForm"]["purple"].value;
  bGoats = document.forms["blockForm"]["black"].value;
  blGoats = document.forms["blockForm"]["blue"].value;
  gGoats = document.forms["blockForm"]["green"].value;


  if(pGoats < 0 || isNaN(pGoats) || pGoats == " "){
    alert("Invalid number of Purple Goats!");
    return false;
  }
  else if(bGoats < 0 || isNaN(bGoats) || bGoats == " "){
    alert("Invalid number of Black Goats!");
    return false;
  }
  else if(blGoats < 0 || isNaN(blGoats) || blGoats == " "){
    alert("Invalid number of Blue Goats!");
    return false;
  }
  else if(gGoats < 0 || isNaN(gGoats) || gGoats == " "){
    alert("Invalid number of Green Goats!");
    return false;
  }
}
