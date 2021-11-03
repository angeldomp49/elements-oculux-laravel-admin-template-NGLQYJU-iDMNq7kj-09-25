<h1>Leads Panel</h1>

Creamos una tabla para cada formulario, en este caso
en uno que guarda los datos de un prospecto de cliente por cada registro.

También guarda datos como la fuente y algunos tipos de contacto que pueden variar dependiendo del cliente.


<h2>Tablas</h2>

<p>vamos a crear las siguientes tablas</p>

<h3>users</h3>

<p>
Se almacenan los datos referentes a los usuarios que podrán ingresar al panel y gestionar los datos.
</p>

<h3>Roles</h3>

<p>
Solamente guarda el nombre y el respectivo id del rol para utilizarlo en otras partes del programa.
</p>

<h3>leads</h3>

<p>
Cada fila representa un registro de un formulario lleno y se relaciona con otros datos
como la proveniencia del cliente y los tipos de contacto que tiene el cliente.
</p>

<p>
Los siguientes datos se guardan en esta tabla:
</p>

<ul>
    <li>nombre</li>
    <li>email</li>
    <li>apellidos</li>
    <li>direccion</li>
    <li>pais</li>
    <li>fuente</li>
</ul>

<h3>contact_types</h3>

<p>
En cada fila se almacena el nombre de algun tipo de medio de contacto.
</p>

<h3>contacts</h3>

<p>
Almacena un tipo de medio de contacto junto con su valor y está relacionado con un registro de lead.
</p>
<hr/>
<p>
Un breve repaso de las tablas.
</p>

<ul>
    <li>users</li>
    <li>roles</li>
    <li>contact_types</li>
    <li>contacts</li>
</ul>

<h2>Soft Deletes</h2>

<p>
Los modelos que van a usar el soft delete son leads y users.
</p>