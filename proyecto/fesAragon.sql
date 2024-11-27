drop schema if exists `fes_aragon`;

create schema if not exists `fes_aragon` default character set utf8 collate
utf8_spanish2_ci;
USE `fes_aragon`;

CREATE TABLE `empleado`(
    `numero_telefono` int(10) NOT NULL,
    `nombre_empleado` text not null,
    `departamento` text not null,
    `id_empleado` int(8) not null,
    `email` text not null,
    `password` varchar(8) not null,
    `fecha_registro` datetime not null default current_timestamp,
)engine=Innodb default charset=utf8;

ALTER TABLE `fes_aragon`.`empleado`
CHANGE COLUMN `numero_telefono` `numero_telefono` INT(10) NOT NULL AUTO_INCREMENT ,
ADD PRIMARY KEY (`nombre_empleado`);

insert into `empleado`(`nombre_empleado`, `departamento`, `id_empleado`, `numero_telefono`, `email`, `password`, `fecha_registro`)values('Roberto Santos', 'sistemas', '15478947', '5522113388', 
'roberto@mail.com', '12345678');



insert into `empleado`(`nombre_empleado`, `departamento`, `id_empleado`, `numero_telefono`, `email`, `password`, `fecha_registro`)values('Roberto Santos', 'sistemas', '15478947', '5522113388', 
'roberto@mail.com', '12345678');
