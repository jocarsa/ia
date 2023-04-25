onmessage = function(datos){
    var partido = datos.data.split(",");
    for(var i = 0;i<partido.length;i+=4){
        partido[i] = 255 - partido[i];
        partido[i+1] = 255 - partido[i+1];
        partido[i+2] = 255 - partido[i+2];
    }
    postMessage(partido)
}