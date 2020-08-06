create database Pruebas;
use Pruebas;

create table Productos(
    IDProducto varchar(10),
    Nombre varchar(10),
    Cantidad int,
    Precio int,
    constraint PK_IDProducto primary key(IDProducto)
);