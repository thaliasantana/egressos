create database dbegresso;

use dbegresso;

create table egresso (
	id int auto_increment primary key,
	nome varchar(100) not null,
	cpf varchar(100) not null
);