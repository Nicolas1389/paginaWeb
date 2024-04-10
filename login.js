function loguear()
{
    let user = document.getElementById("usuario").value;
    let pass = document.getElementById("clave").value;

    if (user == "subgrupo5" && pass =="1234@") 
    {
        window.location="paginainicio.html";

    }
    else{
        alert("El usuario y/o Contraseña son incorrectos")
    }
}