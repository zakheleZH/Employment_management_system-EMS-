
function confirm() {
    var r = confirm("are you sure about whatever it is youre doing?");
    if (r==true)
      {
      window.location="postDeleteUser.php";
  return true;
  }
     else
  {
  alert("You pressed Cancel!");
  window.location="users.php"
  // return false here
  return false;
  }
}
