onmessage = function(datos){
    for(var i = 0;i<datos.data.length;i+=4){
        datos.data[i] = 255 - datos.data[i];
        datos.data[i+1] = 255 - datos.data[i+1];
        datos.data[i+2] = 255 - datos.data[i+2];
        datos.data[i+3] = 255;
    }
    postMessage(datos.data)
}