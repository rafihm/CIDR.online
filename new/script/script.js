function checkSite() {
    $(".byte-check-website").addClass("website-check");
    $(".byte-check-website").addClass("in-progress");
    $(".byte-check-go-label").text("Checking " + $('#url-check').val());
    return true;
}

function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}