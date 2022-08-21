var side = document.getElementsByClassName('sider')[0];
var close = document.getElementById('close');
function function1(){
side.style.display = "block";
// alert("he");

}
close.onclick = function(){
  side.style.display = "none";
}

window.onclick = function(event){
  if (event.target == side){
    side.style.display = "none";
    // alert("ban");
  }
  }
