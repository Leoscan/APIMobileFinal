create database biblioteca_virtual;
use biblioteca_virtual;

create table autores (
	id int not null auto_increment,
    nome varchar(300) not null,
    primary key (id)
);

create table livros (
	id int NOT NULL auto_increment,
    nome varchar(100) not null,
    descricao varchar (300) not null,
    caminho varchar(300) not null,
    fk_autor int not null,
    primary key(id),
    foreign key(fk_autor) references autores(id)
);
insert into autores (nome) values ("Euclides da Cunha");
insert into livros (nome, descricao, caminho, fk_autor) 
values (
	"Os Sertões",
    "Os Sertões é um livro do escritor e jornalista brasileiro Euclides da Cunha, publicado em 1902.",
	"livros/ossertoes.pdf",
    1
);