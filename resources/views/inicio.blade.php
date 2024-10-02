<!DOCTYPE html>
<html lang="pt-br">
<head><title>Teste via CEP</title>

<link rel="shortcut icon" href="http://youtube.local/assets/favicon.ico">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
    #form-messages {
        background-color: rgb(255, 232, 232);
        border: 1px solid red;
        color: red;
        display: none;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 10px;
        padding: 10px 25px;
        max-width: 250px;
    }
</style>


<script>

  
    
    function post(id){
        const data = { cep: id };
    console.log(data)
    fetch("api/consultarCepPorCodigo", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then((response) => response.json())
      .then((data) => {
        gravar(data.corpo.cep,data.corpo.logradouro,data.corpo.complemento,data.corpo.bairro,data.corpo.localidade,data.corpo.uf,data.corpo.estado,data.corpo.regiao);
      })
      .catch((error) => {
        swal("Ops!", "Verifique o cep digitado, n foi possivel encontrar.", "error");
      });
    }
    

    function gravar(cep,logradouro,complemento,bairro,localidade,uf,estado,regiao){
     
            var div = document.getElementById("divResultado");
             
            div.innerText = cep + ", " + logradouro + ", "  + complemento + ", " + ", " + localidade + "\n" + bairro + ", " + estado + "-" + uf + " / " +  regiao;
        }
    
    
        const handleZipCode = (event) => {
  let input = event.target
  input.value = zipCodeMask(input.value)
}

const zipCodeMask = (value) => {
  if (!value) return ""
  value = value.replace(/\D/g,'')
  value = value.replace(/(\d{5})(\d)/,'$1-$2')
  return value
}
    </script>

<body>
    <h1>Digite o CEP para busca</h1>
    <div class="form">
        <ul id="form-messages"></ul>

        <label for="username">Cep</label>
        <input type="text" id="username" maxlength="9" onkeyup="handleZipCode(event)">

 

        <button type="submit" id="btn-submit">Buscar</button>
    </div>
<br>
    <div id="divResultado"></div>
    <script>
        const form = {
            username: document.getElementById('username'),
            submit: document.getElementById('btn-submit'),
            messages: document.getElementById('form-messages')
        };

        form.submit.addEventListener('click', () => {
            const request = new XMLHttpRequest();

           

            const requestData = `${form.username.value}`;

            post(requestData);
        });

    </script>
</body>
