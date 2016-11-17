function GetRandom()
{
    var randNum = document.getElementById("pwbx")
    randNum.value = Math.random()
}

var btn = document.getElementById('myBtn');
btn.addEventListener('click', function() {
  document.location.href = 'neworder.php';
});
