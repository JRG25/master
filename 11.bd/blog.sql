CREATE TABLE usuarios(
id int(255) AUTO_INCREMENT NOT NULL,
nombre varchar(100) not null,
apellidos varchar(100) not null,
email varchar(255) not null,
password varchar(255) not null,
fecha date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email) 
)ENGINE=InnoDb;

CREATE TABLE categorias(
id int(255) AUTO_INCREMENT NOT NULL,
nombre VARCHAR(100) NOT NULL,
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas (
id int(255) AUTO_INCREMENT NOT NULL,
usuario_id int(255) NOT NULL, 
categoria_id INT (255) NOT NULL,
titulo VARCHAR(255) NOT NULL,
descripcion MEDIUMTEXT,
fecha DATE NOT NULL,
CONSTRAINT pk_entradas PRIMARY KEY(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

#EJERCICIOS:

/*
Diseñar la BD de un consecionario
*/

create database concesionario;
use concesionario;
CREATE TABLE coches(
id INT AUTO_INCREMENT NOT NULL,   
modelo VARCHAR(100) NOT NULL,
marca VARCHAR(50) ,
precio INT not null,
stock INT not null,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE InnoDB;

CREATE TABLE grupos(
id INT AUTO_INCREMENT NOT NULL,
nombre VARCHAR(100) NOT NULL,
ciudad VARCHAR(100),
CONSTRAINT ok_grupos PRIMARY KEY(id) 
)ENGINE InnoDB;

CREATE TABLE vendedores(
id int not null,
grupo_id int not null,
jefe int,
nombre varchar(100) not null,
apellidos varchar(150),
cargo varchar(40),
fecha_alta date,
sueldo float(20,2),
comision float(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE InnoDB;

CREATE TABLE clientes(
id INT NOT NULL,
vendedor_id int,
nombre varchar(150) not null,
ciudad varchar(100),
gastado float(50,2),
fecha date,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_clientes_vendedor FOREIGN KEY(vendedor_id) references vendedores(id)
)ENGINE InnoDB;

CREATE TABLE encargos(
id int not null,
cliente_id int not null,
coche_id int not null,
cantidad int,
fecha date,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE InnoDB;

#insert:
INSERT INTO coches values(null, 'Renault', 'Renault', 120000, 13);
INSERT INTO coches values(null, 'Seat Panda', 'Seat', 100000, 10);
INSERT INTO coches values(null, 'Mercedez Ranchera', 'Mercedez', 32000, 24);
INSERT INTO coches values(null, 'Porche Cayene', 'Porche', 65000, 5);
INSERT INTO coches values(null, 'Lamborgini Aventador', 'Lamborgini', 172000, 2);
INSERT INTO coches values(null, 'Ferrari Sider', 'Ferrari', 245000, 50);

INSERT INTO grupos VALUES(null,'Vendedores A', 'Madrid');
INSERT INTO grupos VALUES(null,'Vendedores B', 'Madrid');
INSERT INTO grupos VALUES(null,'Directores Mecanicos', 'Madrid');
INSERT INTO grupos VALUES(null,'Vendedores A', 'Barcelona');
INSERT INTO grupos VALUES(null,'Vendedores b', 'Barcelona');
INSERT INTO grupos VALUES(null,'Vendedores c', 'Barcelona');
INSERT INTO grupos VALUES(null,'Vendedores A', 'Bilbao');
INSERT INTO grupos VALUES(null,'Vendedores B', 'Pamplona');
INSERT INTO grupos VALUES(null,'Vendedores C', 'Santiago de Compostela');

INSERT INTO vendedores VALUES(NULL, 1, null, 'David', 'Lopez', 'Responsable de Tienda', CURDATE(),30000,4);
INSERT INTO vendedores VALUES(NULL, 1, 1, 'Fran', 'Martinez', 'Ayudante de Tienda', CURDATE(),23000,2);
INSERT INTO vendedores VALUES(NULL, 2, null, 'Nelson', 'Sanchez', 'Responsable de Tienda', CURDATE(),38000,5);
INSERT INTO vendedores VALUES(NULL, 2, 3, 'Jesus', 'Lopez', 'Ayudante de Tienda', CURDATE(),12000,6);
INSERT INTO vendedores VALUES(NULL, 3, null, 'Victor', 'Lopez', 'Mecanico Jefe', CURDATE(),50000,2);
INSERT INTO vendedores VALUES(NULL, 4, null, 'Antonio', 'Lopez', 'Vendedor de Recambios', CURDATE(),13000,8);
INSERT INTO vendedores VALUES(NULL, 5, null, 'Salvador', 'Lopez', 'Vendedor Experto', CURDATE(),60000,2);
INSERT INTO vendedores VALUES(NULL, 6, null, 'Joaquin', 'Lopez', 'Ejecutivo de Cuentas', CURDATE(),80000,1);
INSERT INTO vendedores VALUES(NULL, 6, 8, 'Luis', 'Lopez', 'Ayudante de Tienda', CURDATE(),10000,10);

INSERT INTO clientes VALUES(null, 1,'Construcciones Diaz inc.','Alcohobendas', 24000, CURDATE());
INSERT INTO clientes VALUES(null, 1,'Fruteria Antonia inc.','Fuenlabrada', 40000, CURDATE());
INSERT INTO clientes VALUES(null, 1,'Imprenta Martinez inc.','Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES(null, 1,'Jesus Colchones inc.','El Prat', 96000, CURDATE());
INSERT INTO clientes VALUES(null, 1,'Bar Pepe inc.','Valencia', 170000, CURDATE());
INSERT INTO clientes VALUES(null, 1,'Tienda Pc inc.','mURCIA', 245000, CURDATE());

INSERT INTO encargos VALUES(NULL,1,1,2, curdate());
INSERT INTO encargos VALUES(NULL,2,2,4, curdate());
INSERT INTO encargos VALUES(NULL,3,3,1, curdate());
INSERT INTO encargos VALUES(NULL,4,3,3, curdate());
INSERT INTO encargos VALUES(NULL,5,5,1, curdate());
INSERT INTO encargos VALUES(NULL,6,6,1, curdate());

#ejercicios:
1. UPDATE vendedores set comision = 0.5 where sueldo >=50000;
2. UPDATE coches SET precio = precio * 1.05;
3. select nombre, apellidos, fecha_alta from vendedores where fecha_alta > '2018,07,01';
4. select nombre, apellidos, datediff(curdate(),fecha_alta) from vendedores;
5. select concat(nombre, ' ',apellidos,' ',fecha_alta, ' ', dayname(fecha_alta)) from vendedores;
6. select nombre, sueldo from vendedores where cargo='Ayudante de Tienda';
7. select modelo, marca, precio from coches where marca like '%a%' and modelo like '%m%';
8. select * from vendedores where grupo_id=2 order by sueldo desc;
9. select apellidos, fecha_alta, grupo_id from vendedores order by fecha_alta desc limit 4;
10. select cargo, count(id) from vendedores group by cargo;
11. select sum(sueldo) as 'masa salarial' from vendedores ;
12. select v.grupo_id , avg(v.sueldo) as 'media salarial', g.nombre, g.ciudad from vendedores v 
inner join grupos g on g.id = v.grupo_id 
group by grupo_id;
13. select c.modelo as 'coche', cl.nombre as 'cliente', sum(cantidad) as 'cantidad' from encargos e
inner join coches c on c.id=e.coche_id
inner join clientes cl on cl.id=e.cliente_id 
group by e.coche_id, e.cliente_id;
14. #mostrar clientes cuyos mas pedidos han hecho y mostrar cuantos hicieron:
select c.nombre, count(e.id) from encargos e
inner join clientes c on c.id=e.cliente_id
group by cliente_id order by 2 desc limit 2;
15.#obtener list de clientes atendidos por el vendedor david lopez:
select * from clientes where vendedor_id in (select id from vendedores where nombre ='david' and apellidos='lopez');
16. #obtener listado con los encargos realizado por fruteria antonia:
select e.id as 'numero encargo', cantidad, c.nombre, co. modelo, e.fecha
from encargos e
inner join clientes c on c.id= e.cliente_id
inner join coches co on co.id=e.coche_id
where e.cliente_id in
(select id from clientes where nombre ='fruteria antonia inc');

17. #lista los clientes que han hecho algun encargo del coche mercedez ranchera:
select * from clientes where id in
(select cliente_id from encargos where coche_id in
	(select id from coches where modelo like '%Mercedez Ranchera%'));

18. #obtener los vendedore con 2 o mas clientes:
select * from vendedores where id in
(select vendedor_id from clientes group by vendedor_id having count(id) >=2);

19. #seleccionar el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo:
select * from grupos where id in
(select grupo_id from vendedores where sueldo=
(select max(sueldo) from vendedores) );

20. # obtener los noombres y ciudades de los clientes con encargos de 3 unidades en adelante:
select nombre, ciudad from clientes where id in
(select cliente_id from encargos where cantidad >=3);

21. # mostrar listado de clientes  nume de cliente y nombre y el num de vendedor y su nombre:
select c.id, c.nombre, v.id, concat( v.nombre,' ' ,v.apellidos) 
from clientes c, vendedores v
where c.vendedor_id = v.id;

22. # listar todos los encargos realizdos con la marca del coche y el nombre del cliente:
select e.id, co.marca, c.nombre from encargos e
inner join coches co on co.id = e.coche_id
inner join clientes c on c.id = e.cliente_id; 

23. # listar los encargos con el nombre del coche nombre del cliente y el nom de la ciudad solo cuando sean de madrid:
select e.id, co.modelo, c.nombre, c.ciudad from encargos e
inner join coches co on co.id = e.coche_id
inner join clientes c on c.id = e.cliente_id
where c.ciudad='Barcelona';

24. # obtener una lista de los nombres de los clientes con el importe de sus encargos acumulados:
select ci.nombre, sum(precio*cantidad) as 'importe' from clientes ci
inner join encargos en on ci.id=en.cliente_id
inner join coches co on en.coche_id = co.id
group by ci.nombre;

25. # sacar vend que tienen jefe y sacar nombre del jefe:
select v1.nombre as 'vendedor', v2.nombre from vendedores v1
inner join vendedores v2 on v1.jefe = v2.id;

26. #visualizar los nombres de los clientes y la cant de encargos realizados incluyendo los que no hayan realizado encargos:

select c.nombre, count(e.id) from clientes c
left join encargos e on c.id = e.cliente_id
group by 1;

27. # listar vendedores tengan o no clientes y mostrar el numero de clientes:
select v.nombre, v.apellidos, count(c.id) from vendedores v
 left join clientes c on c.vendedor_id = v.id
 group by v.id;

28. # crear una vista llamada vendedoresA q incluyeran todos los vendedores del grupo vendedores A:
create view vendedoresA as 
select * from vendedores where grupo_id in
(select id from grupos where nombre ='Vendedores A');

29. # mostrar los datos del vendedor con mas antiguedad en el concesionario:
select * from vendedores order by fecha_alta asc;

3. #obtener los coches con mas unidades vendidas:
select * from coches where id in
(select coche_id from encargos where cantidad in
(select max(cantidad) from encargos));