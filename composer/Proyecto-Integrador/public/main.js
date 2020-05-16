
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

cantElem["1"].onclick= function () {
  var URLactual = window.location.href;
  if(!contienePreg(URLactual))
    {var url=URLactual.concat("?&cantidad=9");}
    else
    {var url=URLactual.concat("&cantidad=9");}

  window.location.replace(url);
}

cantElem["2"].onclick= function () {
  var URLactual = window.location.href;
  if(!contienePreg(URLactual))
    {var url=URLactual.concat("?&cantidad=15");}
    else
    {var url=URLactual.concat("&cantidad=15");}

  window.location.replace(url);
}

cantElem["3"].onclick= function () {
  var URLactual = window.location.href;
  if(!contienePreg(URLactual))
    {var url=URLactual.concat("?&cantidad=30");}
    else
    {var url=URLactual.concat("&cantidad=30");}

  window.location.replace(url);
}

var ordenElem = document.querySelector(".orden");

ordenElem["0"].onclick= function () {
  var URLactual = window.location.href;
  if(!contienePreg(URLactual))
    {var url=URLactual.concat("?&orden=ASC");}
    else
    {var url=URLactual.concat("&orden=ASC");}

  window.location.replace(url);
}

ordenElem["1"].onclick= function () {
  var URLactual = window.location.href;
  if(!contienePreg(URLactual))
    {var url=URLactual.concat("?&orden=DESC");}
    else
    {var url=URLactual.concat("&orden=DESC");}

  window.location.replace(url);
}
