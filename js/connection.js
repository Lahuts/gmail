let printState = (state,cssBinding) => {
    let a = document.querySelector("#state");
    a.innerHTML = state;
    a.className = cssBinding;
    a.className += " state";
};



document.addEventListener("DOMContentLoaded", (e) => {
  let connect = document.querySelector("#connection");
  connect.addEventListener("click", (e) => {
    let login = document.querySelector("#login").value;
    let password = document.querySelector("#psw").value;
    let log = localStorage.getItem("mail");
    let psw = localStorage.getItem("psw");
    console.log(log,psw);
    if (!login || !password ){
        printState("Veuillez completez les champs","warn");
    }else{
        if (login === log && password === psw ){
            printState("Bonjour "+localStorage.getItem("prenom")+" ,vous etez connecter !","success");
        }else{
            printState("Mail ou mot de passe incorrect ! Veuillez saisir un login et mot de passe correct","error");
        }
    }
  });
});
