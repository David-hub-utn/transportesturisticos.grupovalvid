delimiter //;

create procedure 
	
	SP_destinos_ins(in
		 des_ID          int (11),
		 des_NAME        varchar (80),
		 des_TYPE        varchar(20),
		 des_DESCRIPTION varchar(1000),
		 des_IMG         varchar(120),
		 des_IMG1        varchar(120),
		 des_IMG2        varchar(120),
		 des_IMG3        varchar(120),
	     des_TEXT        varchar(45),
	     des_TEXT1        varchar(45),
	     des_TEXT2        varchar(45),
	     des_TEXT3       varchar(45)
		     
	)
	
begin

	insert into destinos_table values(
	     des_ID,
		 des_NAME,
		 des_TYPE,
		 des_DESCRIPTION,
		 des_IMG,
		 des_IMG1,
		 des_IMG2,
		 des_IMG3,
		 des_TEXT,
		 des_TEXT1,
		 des_TEXT2,
		 des_TEXT3
	);
	              

	select * from destinos_table;
end;
//;

-------------------------------------------------
delimiter //;

create procedure 
	
	SP_imagenes_ins(in
		 img_ID          int (11),
		 img_des_ID        varchar (11),
		 img_NAME        varchar(120),
		 img_TEXT varchar(45)
	
		     
	)
	
begin

	insert into imagenes values(
		 img_ID,
		 img_des_ID,
		 img_NAME,
		 img_TEXT
	);
	              

	select * from imagenes;
end;
//;