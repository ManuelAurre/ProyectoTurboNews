CREATE VIEW `noticias_por_fecha_creacion` AS
    SELECT 
		creacion AS 'creacion',
		id_noticia AS 'id_noticia',
		firma AS 'firma',
        colonia AS 'colonia',
		ciudad AS 'ciudad',
		pais AS 'pais',
        fecha_acontecimiento AS 'fecha_acontecimiento',
        titulo AS 'titulo',
		descripcion AS 'descripcion',
        imagen AS 'imagen',
		videos AS 'videos',
        EstadoNota AS 'EstadoNota',
        activo AS 'activo',
		likes AS 'likes',
        KeyWord AS 'KeyWord',
        id_User AS 'id_User'
    FROM
       noticia
    ORDER BY creacion DESC;
    
CREATE VIEW `noticias_por_keyword` AS
    SELECT 
        KeyWord AS 'KeyWord',
        creacion AS 'creacion',
        id_noticia AS 'id_noticia',
        firma AS 'firma',
        colonia AS 'colonia',
        ciudad AS 'ciudad',
        pais AS 'pais',
        fecha_acontecimiento AS 'fecha_acontecimiento',
        titulo AS 'titulo', 
        descripcion AS 'descripcion',
        imagen AS 'imagen',
        videos AS 'videos', 
        EstadoNota AS 'EstadoNota',
        activo AS 'activo', 
        likes AS 'likes', 
        id_User AS 'id_User'
    FROM
       noticia
    ORDER BY KeyWord , creacion DESC;
    

CREATE VIEW `secciones_en_orden_numerico` AS
    SELECT 
        orden AS 'orden',
        nombre AS 'nombre',
        id_secciones AS 'id_secciones',
        color AS 'color', 
        activo AS 'activo'
    FROM
        secciones
         WHERE
        secciones.activo = 1
    ORDER BY orden;
    
CREATE VIEW `noticias_por_mas_likes` AS
    SELECT 
      id_noticia AS 'id_noticia',
      firma AS 'firma',
      colonia AS 'colonia',
      ciudad AS 'ciudad',
      pais AS 'pais',
      fecha_acontecimiento AS 'fecha_acontecimiento',
      creacion AS 'creacion', 
      titulo AS 'titulo',
      descripcion AS 'descripcion', 
      imagen AS 'imagen', 
      videos AS 'videos',
      EstadoNota as 'EstadoNota',
      activo AS 'activo',
      likes AS 'likes',
      KeyWord AS 'KeyWord',
      id_User AS 'id_User'
    FROM
        noticia
        WHERE
        EstadoNota = 3 and activo = 1
    ORDER BY likes DESC
		LIMIT 3;
    
CREATE VIEW `noticias_por_titulo` AS
    SELECT 
		titulo AS 'titulo',
		creacion AS 'creacion',
		KeyWord AS 'KeyWord',
		id_noticia AS 'id_noticia',
      firma AS 'firma',
      colonia AS 'colonia',
      ciudad AS 'ciudad',
      pais AS 'pais',
      fecha_acontecimiento AS 'fecha_acontecimiento',
      descripcion AS 'descripcion', 
      imagen AS 'imagen', 
      videos AS 'videos',
      EstadoNota as 'EstadoNota',
      activo AS 'activo',
      likes AS 'likes',
      id_User AS 'id_User'
    FROM
        noticia
    ORDER BY likes DESC;
    
CREATE VIEW `usuarios_por_tipo_usuario` AS
    SELECT 
      tipoUsuario AS 'tipoUsuario',
      id_usuario AS 'id_usuario',
      nickname AS 'nickname',
      nombres AS 'nombres',
      Email AS 'Email',
      imagen AS 'imagen',
      activo AS 'activo'
    FROM
       usuario
       WHERE activo = '1'
    ORDER BY tipoUsuario;
    
CREATE VIEW `secciones_por_mas_likes` AS
    SELECT 
	id_secciones AS 'id_secciones',
	nombre AS 'nombre',
	KeyWord AS 'keyword',
	SUM(likes) AS 'SUM(likes)'
    FROM
        noticia
        JOIN secciones
    WHERE
        secciones.nombre = noticia.KeyWord AND
        secciones.activo = 1
    GROUP BY nombre
    ORDER BY likes DESC;
    
    
SELECT * FROM usuarios_por_tipo_usuario;
SELECT * FROM noticias_por_fecha_creacion; 
SELECT * FROM secciones_por_mas_likes;
SELECT * FROM secciones_en_orden_numerico;

SELECT * FROM noticias_por_mas_likes;
SELECT * FROM noticias_por_keyword WHERE  KeyWord = 'Musica';  
  
SELECT * FROM noticias_por_titulo WHERE titulo LIKE '%con%'
UNION SELECT * FROM noticias_por_titulo WHERE descripcion LIKE '%con%';

call Busqueda('%o%');