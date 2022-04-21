create  databade if not exists cafeimetrodb character set utf8
collate utf8_general_ci;

use cafeimetrodb;

create table tipo (
    id integer auto_incremet primary key,
    nome varchar(25)
) engine=InnoDB;

create table cafe (
    id integer auto_incremet primary key,
    nome varchar(25),
    descricao varchar(125),
    tipo_id integer,
    constraint foreign key (tipo_id) references tipo (id)
) engine=InnoDB;

create table consumo (
    id integer auto_incremet primary key,
    data data,
    hora time,
    qtd integer,
    dia_semana varchar(7),
    preco decimal(5,2),
    cafe_id integer,
    constraint foreign key (cafe_id) references cafe (id)
) engine=InnoDB;

create table usuario (
	id integer AUTO_INCREMENT primary key,
	email varchar(30) not null,
	senha varchar(120) not null
) engine=INNODB;