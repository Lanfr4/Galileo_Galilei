CREATE TABLE REGIONE(
    id integer unsigned auto_increment,
    descrizione char(30) not null,

    primary key(id)
)ENGINE =InnoDB;

CREATE TABLE TIPO_S(
    id integer unsigned auto_increment,
    descrizione char(30) not null,

    primary key(id)
)ENGINE = InnoDB;

CREATE TABLE STRUTTURA(
    id integer unsigned auto_increment,
    località varchar(20) not null,
    provincia char(20) not null,
    indirizzo varchar(30) not null,
    telefono integer not null,
    email varchar(20) not null,
    foto,
    soggiorno float not null,
    idRegione integer,
    idTipo_S integer,

    primary key(id),
    foreign key idRegione references REGIONE(id),
    foreign key idTipo_S references  TIPO_S(id)
)ENGINE = InnoDB;
