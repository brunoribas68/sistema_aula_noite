var formulario = document.forms.formularioLogin;
console.log(formulario)

fetch('./login.php',{
    headers: {
        "content-type": "aplication/json; charset=UTF-8"
    },
    body: formData,
    method: "POST"
})
    .then(response => response.json())
    .then(data => {
        location.replace("/listar.html")
    })
    .catch(error => {
        document.getElementById("mensagemDeErro").innerText(error)
    });
