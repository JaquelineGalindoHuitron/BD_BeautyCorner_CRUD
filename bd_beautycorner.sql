create database bd_beautycorner;
use bd_beautycorner;

create table servicios(
  idservicio int auto_increment primary key,
  nomservicio varchar(50),
  descripcion varchar(50),
  nomempleado varchar(50),
  direccion varchar(50),
  telefono varchar(11),
  precio varchar(50),
  iva varchar(50)
);

INSERT INTO servicios(nomservicio, descripcion, nomempleado, direccion, telefono, precio, iva) VALUES 
('Gelish','Colores Pastel','Aurora','Nueva Zelanda 7870','6568741025','650.00','120.00'),
('Extensiones','De Buena Calidad','Daniel','Nueva Zelanda 7870','6568741025','5000.00','200.00'),
('Manicure','Incluye Exfoliación','Angela','Nueva Zelanda 7870','6568741025','330.00','100.00')