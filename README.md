# TeamBirra
E-commerce de Cervezas

ESPECIFICACIONES

Una empresa de comercio electrónico (E-commerce) dedicada a la venta de cervezas Los dos tipos de personas(nombre, 
apellido, email, dni, pass, telefono, direccion): CLIENTE, este debe poder logearse si está registrado, ejecutar una
compra que se almacena en un carrito, puede elegir la cantidad que desee de un mismo producto(siempre que haya stock),
deberá además tener la posibilidad de editar su perfil(donde podrá cargar y descargar una foto), incluso cambiar la 
contraseña, editar y eliminar productos del carrito. ADMINISTRADOR, tiene permiso para agregar, eliminar y modificar 
distintos productos, tanto cambiar sus datos como agregarlo a promociones aplicando un descuento adicional.

PRODUCTO: (nombre, precio, marca, color, estilo, origen.) VENTA: fecha, usuario, total ENVÍO: usuario, fecha de 
programacion, fecha de recibo, carrito, calle y número

Un usuario que no existente en la base de datos debe poder acceder únicamente al catálogo e información de la 
página, en caso de querer agregar un producto al carrito de compra tendrá que ser derivado a la ruta de 
registración. Se debe almacenar cada movimiento: actualización de las actualizaciones en la base de datos como 
fecha de registro de un usuario, fecha de compra, fecha de actualización de stock de producto.
