
function dashboard() {

  document.getElementById("right").innerHTML = "Hello Hi ";
}

function showVan() {
  document.getElementById("right").innerHTML = "This is the garbage van";
}
function showDustbin() {
  document.getElementById("right").innerHTML='<object type="text/html" data="dustbinAdmin.php" height = "1000px" width= "1200px"></object>';

}

function scrap(){
  fetch('scrap_admin.php')
  .then(response => response.text())
  .then(text => document.getElementById('right').innerHTML = text);
}

function scrapDB(){
  fetch('scrap_database.php')
  .then(response => response.text())
  .then(text => document.getElementById('right').innerHTML = text);
}

//   function complain() {
//     var ajax = new XMLHttpRequest();
// ajax.onreadystatechange = function() {
// if (ajax.readyState == 4) {
//  alert(ajax.responseText);
// }
// };
// ajax.open("GET", "complainDataDisplay.php", true);
// ajax.send(null);

//   }
function complain(str) {
  if (str == "") {
    document.getElementById("right").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("right").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "complainDataDisplay.php?q=" + str, true);
    xmlhttp.send();
  }
}


// function scrap() {
//   document.getElementById("right").innerHTML = "Scrap kosle kosle reqest gareko cha sell garney dekhauney";
// }



function driver(str) {
  if (str == "") {
    document.getElementById("right").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("right").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "driverDataDisplay.php?q=" + str, true);
    xmlhttp.send();
  }
}


function activeDriver() {
  fetch('dActiveDriverDataDisplay.php')
    .then(response => response.text())
    .then(text => document.getElementById('right').innerHTML = text);
}

function logout(){
  fetch('logoutAdmin.php')
  .then(response => response.text())
  .then(text => document.getElementById('right').innerHTML = text);
}



//COmplain select option

function getValue(){
var selectedValue = document.getElementById('list').value;
//  console.log(selectedValue);

 document.cookie= selectedValue;
 alert(document.cookie);
}