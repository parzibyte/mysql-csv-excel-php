CREATE TABLE IF NOT EXISTS personas(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    edad INTEGER NOT NULL,
    altura DECIMAL(9, 2) NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO personas (nombre, edad, altura) VALUES ('Juan Pérez', 30, 175.50);
INSERT INTO personas (nombre, edad, altura) VALUES ('María Gómez', 25, 160.75);
INSERT INTO personas (nombre, edad, altura) VALUES ('Carlos Ruiz', 40, 180.25);
INSERT INTO personas (nombre, edad, altura) VALUES ('Ana Torres', 22, 165.30);
INSERT INTO personas (nombre, edad, altura) VALUES ('Luis Fernández', 35, 170.10);
INSERT INTO personas (nombre, edad, altura) VALUES ('Carmen Díaz', 28, 168.80);
INSERT INTO personas (nombre, edad, altura) VALUES ('Jorge Martínez', 33, 172.50);
INSERT INTO personas (nombre, edad, altura) VALUES ('Laura Jiménez', 27, 162.45);
INSERT INTO personas (nombre, edad, altura) VALUES ('Marta Sánchez', 31, 169.60);
INSERT INTO personas (nombre, edad, altura) VALUES ('Pedro López', 29, 174.90);