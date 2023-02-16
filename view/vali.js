const nombre = document.getElementById("name")
const codigo = document.getElementById("code")
const contra = document.getElementById("pass")
const celular = document.getElementById("phone")
const form0 = document.getElementById("form0")
const form1 = document.getElementById("form1")

form0.addEventListener("submit", e=>{
      
    //Validaciones de los fomrularios
  
    if(nombre.value.length<1){
        alert("EL NOMBRE NO PUEDE ESTAR EN BLANCO")
        e.preventDefault()
    
    }
})

form1.addEventListener("submit", e=>{
      
    //Validaciones de los fomrularios
  
    if(codigo.value.length<4){
        alert("EL CODIGO DEBE TENER AL MENOS 4 DIGITOS")
        e.preventDefault()
    }

    if(pass.value.length<4){
        alert("LA CLAVE DEBE TENER AL MENOS 4 DIGITOS")
        e.preventDefault()
    }

    if(celular.value.length<6){
        alert("EL TELEFONO DEBE TENER AL MENOS 6 DIGITOS")
        e.preventDefault()
    }
})

