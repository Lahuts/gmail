document.addEventListener("DOMContentLoaded", (e) => {
  localStorage.clear();
  e.preventDefault();
  let btn = document.querySelector("#val");
  btn.addEventListener("click", () => {
    let name = document.querySelector("#nom").value;
    let prenom = document.querySelector("#prenom").value;
    let mail = document.querySelector("#mail").value;
    let password = document.querySelector("#psw").value;

    localStorage.setItem("name", name);
    localStorage.setItem("prenom", prenom);
    localStorage.setItem("psw", password);
    localStorage.setItem("mail", mail);
  });
});
