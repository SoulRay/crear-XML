var request = new XMLHttpRequest();
request.onreadystatechange = function() {
    if (this.readyState == 4) {
       if (this.status == 200) {
           debugger;
           var datos = JSON.parse(this.response);
           var descargar = document.createElement("a");
           descargar.setAttribute('href', 'data:text/plain;charset=utf-8,'+datos);
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