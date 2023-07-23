DROP DATABASE IF EXISTS BaseDatosNomina;

CREATE DATABASE BaseDatosNomina;

use BaseDatosNomina;

CREATE TABLE nominaEmpleado (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(250) NOT NULL,
  hrsTrabajadas int(11) NOT NULL,
  valorHora float NOT NULL,
  salBasico float NOT NULL,
  subsidio float NOT NULL,
  retFuente double NOT NULL,
  horasExtras double NOT NULL,
  salNeto double NOT NULL,
  seguridadSocial double NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO nominaEmpleado (id, nombre, hrsTrabajadas, valorHora, salBasico, subsidio, retFuente, horasExtras, salNeto, seguridadSocial) VALUES
(1, 'Jhon Doe', 60, 50000, 1200000, 70000, 0, 40000, 640000, 30000);