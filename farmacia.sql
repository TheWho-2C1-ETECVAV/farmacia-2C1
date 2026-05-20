create database estoque;
use estoque

create table produtos(
id int primary key identity(1,1),
nome varchar(25),
preco decimal(10,2),
estoque int
)

select * from produtos