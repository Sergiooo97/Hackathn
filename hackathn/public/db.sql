 CREATE TRIGGER insertar_proyecto 
 AFTER INSERT ON proyectos 
 FOR EACH ROW 
 UPDATE users SET proyectoName=NEW.name 
 WHERE equipoNumber=NEW.equipoNumber;
