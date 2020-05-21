
//-----------------------------------busqueda de la navFilter de catalogo -------------------------------------


function contienePreg(variable ) {
        var vars = variable.split("?");
        console.log(vars);
            if (vars.length != 1) {
                return true;
            }

        return false;
    }




var cantElem = document.querySelector("#cantidad");

if (cantElem!=null){
  cantElem["1"].onclick= function () {
  var URLactual = window.location.href;
  if(!contienePreg(URLactual))
    {var url=URLactual.concat("?&cantidad=12");}
    else
    {var url=URLactual.concat("&cantidad=12");}

  window.location.replace(url);
}

cantElem["2"].onclick= function () {
  var URLactual = window.location.href;
  if(!contienePreg(URLactual))
    {var url=URLactual.concat("?&cantidad=24");}
    else
    {var url=URLactual.concat("&cantidad=24");}

  window.location.replace(url);
}

cantElem["3"].onclick= function () {
  var URLactual = window.location.href;
  if(!contienePreg(URLactual))
    {var url=URLactual.concat("?&cantidad=100");}
    else
    {var url=URLactual.concat("&cantidad=100");}

  window.location.replace(url);
}

var ordenElem = document.querySelector(".orden");

ordenElem["1"].onclick= function () {
  var URLactual = window.location.href;
  if(!contienePreg(URLactual))
    {var url=URLactual.concat("?&orden=ASC");}
    else
    {var url=URLactual.concat("&orden=ASC");}

  window.location.replace(url);
}

ordenElem["2"].onclick= function () {
  var URLactual = window.location.href;
  if(!contienePreg(URLactual))
    {var url=URLactual.concat("?&orden=DESC");}
    else
    {var url=URLactual.concat("&orden=DESC");}

  window.location.replace(url);
}
}
/*------------------------------------------------------AGREGAR PRODUCTO-------------------------------*/

//MARCA
var addMarca = document.querySelector("#add-marca");
if (addMarca!=null){

  addMarca.onclick=function(){
  var nombreMarca=prompt("ingrese nombre de Marca");

  if(!(nombreMarca === "") && nombreMarca!=null){
    var secMar=  document.querySelector(".section-marca");
    var optMarca=document.createElement('option');
    optMarca.innerText=nombreMarca;
    optMarca.setAttribute('value',nombreMarca);
    secMar.append(optMarca);
    alert("se ha agregado "+nombreMarca+" a su lista de marcas");
  }
}

}


//ESTILO
var addEstilo = document.querySelector("#add-estilo");
if (addEstilo!=null){

  addEstilo.onclick=function(){
  var nombreEstilo=prompt("ingrese nombre de nuevo estilo");

  if(!(nombreEstilo === "")&& nombreEstilo!=null){
    var secEst=  document.querySelector(".section-Estilo");
    var optEstilo=document.createElement('option');
    optEstilo.innerText=nombreEstilo;
    optEstilo.setAttribute('value',nombreEstilo);
    secEst.append(optEstilo);
    alert("se ha agregado "+nombreEstilo+" a su lista de estilos");
  }
}

}

//Color

var addColor = document.querySelector("#add-color");
if (addColor!=null){

  addColor.onclick=function(){
  var nombreColor=prompt("ingrese nombre de nuevo color");

  if(!(nombreColor === "")&& nombreColor!=null){
    var secCol=  document.querySelector(".section-Color");
    var optColor=document.createElement('option');
    optColor.innerText=nombreColor;
    optColor.setAttribute('value',nombreColor);
    secCol.append(optColor);
    alert("se ha agregado "+nombreColor+" a su lista de estilos");
  }
}

}



//ORIGEN

var addOrigen = document.querySelector("#add-Origen");
if (addOrigen!=null){

  addOrigen.onclick=function(){
  var nombreOrigen=prompt("ingrese nombre del nuevo pais o localidad");

  if(!(nombreOrigen === "")&& nombreOrigen!=null){
    var secOri=  document.querySelector(".section-Origen");
    var optOrigen=document.createElement('option');
    optOrigen.innerText=nombreOrigen;
    optOrigen.setAttribute('value',nombreOrigen);
    secOri.append(optOrigen);
    alert("se ha agregado "+nombreOrigen+" a su lista de Paises/Localidades");
  }
}

}



//----------------------------------------------------------------INGRESAR DATOS DE FINALIZAR COMPRA-----------------

var secDir = document.querySelector(".section-direccion");

if (secDir!=null){

    secDir["0"].onclick= function () {
        var divDir = document.querySelector(".ingrese-dir");
        var inputDir = document.querySelector(".nuevaDireccion");
        if(inputDir!=null){
            divDir.removeChild(inputDir);
            var sp = document.querySelector(".dir-sp");
            if(sp==null){
                sp = document.querySelector(".ocultar");
                sp.setAttribute('class',"dir-sp");
              }
          }
    }


    secDir["1"].onclick= function () {
        var sp = document.querySelector(".dir-sp");
        if(sp!=null){
            sp.setAttribute('class',"ocultar");
          }

        var inp=  document.querySelector(".nuevaDireccion");
        if(inp===null){

        var divDir = document.querySelector(".ingrese-dir");
        var inputDir=document.createElement('input');
        inputDir.setAttribute('name',"nuevaDireccion");
        inputDir.setAttribute('class',"nuevaDireccion");
        divDir.append(inputDir);
      }


  }
}


//------------------------------------------------------------------------------agregar producto form-------------------------------
//VALIDACIONES
var campoNombre = document.querySelector('input[name=nombre]');
var campoPrecio = document.querySelector('input[name=precio]');
var campoVolumen = document.querySelector('input[name=volumen]');
var campoGrad= document.querySelector('input[name=graduacionAlcoholica]');
var campoInfo= document.querySelector('textarea[name=informacion]');

 campoNombre.onblur = function(){
   if(this.value.trim() == ''){
     document.querySelector('#errorNombre').innerText="El nombre no puede estar vacio";
   }
 }

 campoPrecio.onblur = function(){
   if(this.value.trim()  == '' ){
     document.querySelector('#errorPrecio').innerText="El precio no puede estar vacio";
   }
 }

 campoVolumen.onblur = function(){
   if(this.value.trim()  == ''){
     document.querySelector('#errorVolumen').innerText="El Volumen no puede estar vacio";
   }
 }

 campoGrad.onblur = function(){
   if(this.value.trim() == ''){
     document.querySelector('#errorGraduacionAlcoholica').innerText="La graduacion alcoholica no puede estar vacia";
   }
 }

 campoInfo.onblur = function(){
   if(this.value.trim()  == '' ){
     document.querySelector('#errorInformacion').innerText="La informacion no puede estar vacia";
   }

   if(this.value.length>200){
     document.querySelector('#errorInformacion').innerText="La informacion debe tener menos de 200 caracteres";}
 }

var formAdd=document.querySelector('.form-add-product');

formAdd.onsubmit=function(event){
   if(campoNombre.value.trim()  == '' ){
     document.querySelector('#errorPrecio').innerText="El precio no puede estar vacio";
      event.preventDefault();}

   if(campoPrecio.value.trim()  == '' ){
     document.querySelector('#errorPrecio').innerText="El precio no puede estar vacio";
      event.preventDefault();}

   if(campoVolumen.value.trim()  == '' ){
     document.querySelector('#errorPrecio').innerText="El precio no puede estar vacio";
      event.preventDefault();}

    if(campoGrad.value.trim()  == '' ){
        document.querySelector('#errorInformacion').innerText="La informacion no puede estar vacia";
        event.preventDefault();
      }

    if(campoInfo.value.trim()  == '' ){
        document.querySelector('#errorInformacion').innerText="La informacion no puede estar vacia";
        event.preventDefault();
      }

    if(campoInfo.value.length>200){
        document.querySelector('#errorInformacion').innerText="La informacion debe tener menos de 200 caracteres";
        event.preventDefault();}
}
