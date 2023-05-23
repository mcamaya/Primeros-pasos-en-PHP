CREATE DATABASE campusv2;
CREATE TABLE campers(
    id INT primary key AUTO_INCREMENT,  /* columna de id's | primary key -> elementos no se van a repetir */
    nombres VARCHAR (50) NOT NULL,
    direccion VARCHAR (50),
    logros VARCHAR (60)
);