var request = new XMLHttpRequest();
request.onreadystatechange = function() {
    if (this.readyState == 4) {
       if (this.status == 200) {
           var datos = JSON.parse(this.response);
           var xml = '<?xml version="1.0" encoding="ISO-8859-1" standalone="true" ?>\n';
           xml += '<cuerpo>\n';
           for (let i = 0; i < datos.nombre.length; i++) {
               xml += '<nombre>'+datos.nombre[i]+'</nombre>\n'+
                        '<apellido>'+datos.apellido[i]+'</apellido>\n'+
                        '<telefono>'+datos.telefono[i]+'</telefono>\n';
           }
           xml += '</cuerpo>';
           var descargar = document.createElement("a");
           descargar.setAttribute('href', 'data:text/plain;charset=utf-8,'+xml);
           descargar.setAttribute('download', 'xmldeprueba.xml');
           descargar.style.display = "none";
           document.body.appendChild(descargar);
           descargar.click();
           document.body.removeChild(descargar);
       }
    }
};

function descargarxml() {
    debugger;
    var url = "command.php";
    var method = "GET";
    var async = true;
    request.open(
        method,
        url + '?cmd=descargarxml',
        async
    );
    request.send();
}