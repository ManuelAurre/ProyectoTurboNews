DELIMITER %%
CREATE PROCEDURE P_GET_COMMENT_NEW(
IN pNewsId INT
) READS SQL DATA
BEGIN
	SELECT COM.id_comentarios AS ID, COM.cuerpo AS 'TEXT', CCOM.parent_id AS PARENT
	FROM comentarios AS COM
	INNER JOIN Com_comentarios AS CCOM ON CCOM.id_comentariosC = COM.id_comentarios
	WHERE COM.activo = 1 AND CCOM.activoC = 1 AND CCOM.idNoticiaCC = pNewsId
	ORDER BY CCOM.creacion ASC;
END %%
DELIMITER ;

DELIMITER %%
 create PROCEDURE Commentario_Nuevo(
	IN textoIngresa varchar(40),
	IN NoticiaId INT,
    IN UserId INT
 )READS SQL DATA
  BEGIN
   insert into comentarios(cuerpo,id_UserC,idNoticiaC) 
   Values (textoIngresa,UserId,NoticiaId);
   
   insert into Com_comentarios(id_comentariosC,id_UserCC,idNoticiaCC,parent_id)
   Values (LAST_INSERT_ID(),UserId,NoticiaId,null);
  END %%
DELIMITER ;

DELIMITER %%
 create PROCEDURE Respuesta_Nuevo(
	IN textoIngresa varchar(40),
	IN NoticiaId INT,
    IN UserId INT,
     IN Parent INT
 )READS SQL DATA
  BEGIN
   insert into comentarios(cuerpo,id_UserC,idNoticiaC) 
   Values (textoIngresa,UserId,NoticiaId);
   
   insert into Com_comentarios(id_comentariosC,id_UserCC,idNoticiaCC,parent_id)
   Values (LAST_INSERT_ID(),UserId,NoticiaId,Parent);
  END %%
DELIMITER ;

DELIMITER %%
CREATE PROCEDURE Busqueda(
IN Buscando varchar(400)
) READS SQL DATA
BEGIN
	
SELECT * FROM noticias_por_titulo WHERE titulo LIKE Buscando
UNION SELECT * FROM noticias_por_titulo WHERE descripcion LIKE Buscando;

END %%
DELIMITER ;

drop procedure P_GET_COMMENT_NEW;
drop procedure Commentario_Nuevo;

call P_GET_COMMENT_NEW(1);
call Commentario_Nuevo('comentario de gta5',3,2);
call Respuesta_Nuevo('Respuesta de gta5',3,3,6);

insert into comentarios(cuerpo,id_UserC,idNoticiaC) Values ('unbuen comentario',3,1);
insert into comentarios(cuerpo,id_UserC,idNoticiaC) Values ('video feo',6,1);
insert into comentarios(cuerpo,id_UserC,idNoticiaC) Values ('QUE mal comentario',3,1);
insert into comentarios(cuerpo,id_UserC,idNoticiaC) Values ('no se ve nada',6,1);
insert into comentarios(cuerpo,id_UserC,idNoticiaC) Values ('respuesta de un comentario',2,1);

insert into Com_comentarios(id_comentariosC,id_UserCC,idNoticiaCC,parent_id) Values (1,3,1,null);
insert into Com_comentarios(id_comentariosC,id_UserCC,idNoticiaCC,parent_id) Values (2,6,1,null);

insert into Com_comentarios(id_comentariosC,id_UserCC,idNoticiaCC,parent_id) Values (4,4,1,2);
insert into Com_comentarios(id_comentariosC,id_UserCC,idNoticiaCC,parent_id) Values (3,4,1,1);
insert into Com_comentarios(id_comentariosC,id_UserCC,idNoticiaCC,parent_id) Values (5,2,1,1);