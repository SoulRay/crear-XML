# ¿Qué es XML?
XML es un lenguaje de marcado similar a HTML. Significa Extensible Markup Language (Lenguaje de Marcado Extensible) y es una especificación de W3C como lenguaje de marcado de propósito general. Esto significa que, a diferencia de otros lenguajes de marcado, XML no está predefinido, por lo que debes definir tus propias etiquetas. El propósito principal del lenguaje es compartir datos a través de diferentes sistemas
# ¿Donde puedo utilizar XML?
Dado que, en gran parte, la utilidad de una herramienta depende de la creatividad de quien la utiliza, resulta imposible resumir todas las aplicaciones de XML. En pocas palabras, se puede decir que ofrece la posibilidad de estructurar y representar datos. En la actualidad, es común que los programas incluyan archivos de configuración en este formato; tal es el caso de Apache y de las aplicaciones creadas con la tecnología .NET (de Microsoft).
Cuando se desarrolla un programa con interfaz gráfica es necesario organizar todas las imágenes de manera que se vayan cargando a medida que se necesiten, y XML es de gran ayuda en estos casos: permite agruparlas, etiquetarlas, especificar su ubicación y relacionarlas con otros datos, según las necesidades de los diseñadores.
# Ejemplo
Cuando tu realizas una compra online, se envia un documento de compra que aprueba que el pago fue exitoso, la empresa responsable de emitir el documento crea un archivo XML con los datos de compra y los envia al SII que valida los datos. El XML verificado se devuelve a la empresa emisora y se interpreta el archivo en un documento electronico.
## Factura Electronica
![Factura electronica](https://www.aboutespanol.com/thmb/tV-mHiZn8YD4vCc2oCH3Lowe8Hg=/768x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/factura-56a48fd25f9b58b7d0d78dc5.png)
# Estructura de documento XML
## La declaración XML
corresponde a la cabecera del documento y es obligatoria
```xml
<?xml versión= “1.0” encoding= “ISO-8859-1” standalone= “yes”?>
```
## La declaración del tipo de documento: 
La Declaración de Tipo del Documento es opcional. Se escribe en el prólogo y tiene un formato especial, distinto de las marcas y de las instrucciones de procesamiento.
```xml
<!DOCTYPE Casas_Rurales SYSTEM “http://www.casasrurales.com/casasrurales.dtd”>
```
## El cuerpo
El cuerpo es la parte más importante y que contiene la información del documento, es decir, los datos a los que se les ha añadido el marcado.
El cuerpo de los documentos XML tiene una estructura de árbol, en la que siempre existe un elemento principal, o elemento raíz, dentro del cual se encuentran el resto de los elementos. Se dice que el elemento raíz es el “padre” de todos los demás elementos, y de él se derivan las ramas del árbol hasta el nivel más bajo.
```xml
<raíz>
  <hijo1>
    <subhijo1_1>
      <subhijo1_1_1> ... </subhijo1_1_1>
      <subhijo1_1_2> ... </subhijo1_1_2>
    ...
    </subhijo1_1>
    <subhijo1_2> ... </subhijo1_2>
    ...
  </hijo1>
  <hijo2> ... </hijo2>
  ...
</raíz>
```
## Estructura de ejemplo
```xml
<?xml version="1.0" encoding="ISO-8859-1"?>
  <libreria>
    <libro categoría="COOKING">
      <título lang="en">Everyday Italian</título>
      <autor>Giada De Laurentiis</autor>
      <año>2005</año>
      <precio>30.00</precio>
    </libro>
    <libro categoría="INFANTIL">
      <título lang="en">Harry Potter</título>
      <autor>J K. Rowling</autor>
      <año>2005</año>
      <precio>29.99</precio>
    </libro>
      <libro categoría="WEB">
      <título lang="en">Learning XML</título>
      <autor>Erik T. Ray</autor>
      <año>2003</año>
      <precio>39.95</precio>
    </libro>
  </libreria>
```
