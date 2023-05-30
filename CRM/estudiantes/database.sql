CREATE DATABASE campusv2;
CREATE TABLE campers(
    id INT primary key AUTO_INCREMENT,  /* columna de id's | primary key -> elementos no se van a repetir */
    nombres VARCHAR (255) NOT NULL,
    direccion VARCHAR (255),
    logros VARCHAR (255),
    ser VARCHAR (255),
    ingles VARCHAR (255),
    skills VARCHAR (255),
    especialidad VARCHAR (255),
    asistencia VARCHAR (225)
);

mysql -u (user) -p;

USE campusv2;
DROP TABLE campers;


--Login
CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCamper INT NOT NULL,
    email VARCHAR(80) NOT NULL,
    username VARCHAR(80) NOT NULL,
    password VARCHAR(60) NOT NULL,

    FOREIGN KEY (idCamper) REFERENCES campers(id)
);
