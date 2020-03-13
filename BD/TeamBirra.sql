
INSERT INTO productos (idProducto, nombre,marca,precio,descripcion,imagen,enOferta,color,origen,estilo)
VALUES (8,'Hoegaarden gold','Hoegaarden',3250,'descripcion Lorem ipsum dolor sit amet ','images/hoagg.png',TRUE,'Dorado','Alemania','Blonde');


INSERT INTO productos (idProducto, nombre,marca,precio,descripcion,imagen,enOferta,color,origen,estilo)
VALUES (9,'Peñon Arandano','Peñon',120,'descripcion Lorem ipsum dolor sit amet ','images/peñon2.png',TRUE,'Dorado','Argentina','Pale Lager');

INSERT INTO productos (idProducto, nombre,marca,precio,descripcion,imagen,enOferta,color,origen,estilo)
VALUES (10,'Quilmes Rubia','Quilmes',50,'descripcion Lorem ipsum dolor sit amet ','images/quilmes.png',FALSE,'Dorado','Argentina','Blonde');

INSERT INTO productos (idProducto, nombre,marca,precio,descripcion,imagen,enOferta,color,origen,estilo)
VALUES (11,'Andes Roja','Andes',80,'descripcion Lorem ipsum dolor sit amet ','images/andesRoja.png',TRUE,'Rojo','Argentina','Red Lager');

INSERT INTO productos (idProducto, nombre,marca,precio,descripcion,imagen,enOferta,color,origen,estilo)
VALUES (12,'Brahma Rubia','Brahma',50,'descripcion Lorem ipsum dolor sit amet ','images/brahma.png',TRUE,'Dorado','Brasil','Blonde');

INSERT INTO productos (idProducto, nombre,marca,precio,descripcion,imagen,enOferta,color,origen,estilo)
VALUES (13,'Brahma Rubia','Brahma',50,'descripcion Lorem ipsum dolor sit amet ','images/brahma.png',TRUE,'Dorado','Brasil','Blonde');


SELECT * FROM productos


CREATE USER 'user'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'user'@'localhost' WITH GRANT OPTION;

CREATE USER 'user'@'%' IDENTIFIED WITH mysql_native_password BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'user'@'%' WITH GRANT OPTION;