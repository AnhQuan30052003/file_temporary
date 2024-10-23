function load(type) {
  localStorage.setItem("load", type);

  let SV = document.getElementsByClassName("SV");
  let GV = document.getElementsByClassName("GV");
  let title = document.getElementById("title");

  if (type == "SV") {
    if (title != null) title.innerHTML = "Danh sách sinh viên";
    for (let i = 0; i < SV.length; i++) {
      SV[i].classList.remove("hidden");
    }
    for (let i = 0; i < GV.length; i++) {
      GV[i].classList.add("hidden")
    }
  }
  else {
    if (title != null) title.innerHTML = "Danh sách giảng viên";
    for (let i = 0; i < SV.length; i++) {
      SV[i].classList.add("hidden");
    }
    for (let i = 0; i < GV.length; i++) {
      GV[i].classList.remove("hidden")
    }
  }
}

function to_web() {
  localStorage.setItem("outputWeb", true);
  window.location.href = 'output.php';
}

loadTemp = localStorage.getItem("load");
if (loadTemp != null) {
  load(loadTemp);

  if (localStorage.getItem("outputWeb") == null) {
    localStorage.removeItem("load");
  }
}