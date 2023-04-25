onmessage = function(datos){
    resultado = datos.data*2;
    postMessage(resultado)
}