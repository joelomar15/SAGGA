
/*==============================================================*/
/* Table: ALUMNO                                                */
/*==============================================================*/
create table ALUMNO
(
   ESTID                int not null auto_increment,
   ESTCEDULA            varchar(30),
   ESTAPELLIDOS         varchar(64),
   ESTNOMBRES           varchar(64),
   ESTDIRECCION         varchar(128),
   ESTTELEFONO          varchar(30),
   ESTCELULAR           varchar(30),
   ESTCOLGRADO          varbinary(64),
   ESTTIPCOLEGIO        varchar(64),
   ESTCIUCOLEGIO        varchar(64),
   ESTTITULO            varbinary(128),
   ESTENFERMEDAD        varchar(2),
   ESTDESENFERMEDAD     varchar(64),
   ESTTIPENFERMEDAD     varchar(30),
   primary key (ESTID)
);

/*==============================================================*/
/* Table: BIENES                                                */
/*==============================================================*/
create table BIENES
(
   BIEID                int not null auto_increment,
   FICID                int,
   TBIID                int,
   BIEDIRECCION         varchar(128),
   BIECANTIDAD          decimal(10,2),
   primary key (BIEID)
);

/*==============================================================*/
/* Table: EGRESO                                                */
/*==============================================================*/
create table EGRESO
(
   EGRID                int not null,
   EGRNOMBRE            varchar(128),
   primary key (EGRID)
);

/*==============================================================*/
/* Table: FICHAS                                                */
/*==============================================================*/
create table FICHAS
(
   FICID                int not null auto_increment,
   ESTID                int,
   PERID                int,
   FICFECHA             date,
   FICESTADO            varchar(30),
   primary key (FICID)
);

/*==============================================================*/
/* Table: FINANCIAMIENTOS                                       */
/*==============================================================*/
create table FINANCIAMIENTOS
(
   FINID                int not null auto_increment,
   FICID                int,
   FINTIPO              varchar(64),
   FINDESCRIPCION       varchar(128),
   FINRELESTUDIANTE     varchar(64),
   primary key (FINID)
);

/*==============================================================*/
/* Table: GRUPO_FAMILIARES                                      */
/*==============================================================*/
create table GRUPO_FAMILIARES
(
   GFAID                int not null auto_increment,
   FICID                int,
   GFAAPELLIDOS         varchar(64),
   GFANOMBRES           varchar(64),
   GFAPARENTESCO        varchar(64),
   GFACONVENCIONAL      varchar(30),
   GFACELULAR           varchar(30),
   GFADEPENDIENTE       varchar(2),
   GFAINGRESOS          decimal(10,2),
   GFAFECNACIMIENTO     date,
   GFAOCUPACION         varchar(128),
   GFAENFERMEDAD        varchar(2),
   GFADESENFERMEDAD     varchar(64),
   GFATIPENFERMEDAD     varchar(30),
   primary key (GFAID)
);

/*==============================================================*/
/* Table: OCUPACIONES                                           */
/*==============================================================*/
create table OCUPACIONES
(
   OCUID                int not null auto_increment,
   FICID                int,
   OCUPUESTO            varchar(64),
   OCUDESCRIPCION       varchar(128),
   OCUSECTOR            varchar(30),
   OCUINSTITUCION       varchar(128),
   OCUDIRINSTITUCION    varchar(128),
   OCUTELEFONO          varchar(30),
   OCUTIPO              varchar(30),
   primary key (OCUID)
);

/*==============================================================*/
/* Table: PERIODOS                                              */
/*==============================================================*/
create table PERIODOS
(
   PERID                int not null,
   primary key (PERID)
);

/*==============================================================*/
/* Table: REGISTRO_EGRESOS                                      */
/*==============================================================*/
create table REGISTRO_EGRESOS
(
   REGID                int not null auto_increment,
   FICID                int,
   EGRID                int,
   REGDESCRIPCION       varchar(64),
   REGVALOR             decimal(10,2),
   primary key (REGID)
);

/*==============================================================*/
/* Table: SNIESE                                                */
/*==============================================================*/
create table SNIESE
(
   SNIID                int not null,
   FICID                int,
   primary key (SNIID)
);

/*==============================================================*/
/* Table: TIPO_BIENES                                           */
/*==============================================================*/
create table TIPO_BIENES
(
   TBIID                int not null,
   TBINOMBRE            varchar(128),
   primary key (TBIID)
);

/*==============================================================*/
/* Table: VIVIENDAS                                             */
/*==============================================================*/
create table VIVIENDAS
(
   VIVID                int not null,
   FICID                int,
   VIVTIPO              varchar(64),
   VIVDIRECCION         varchar(128),
   VIVCROQUIS           varchar(128),
   VIVREFUNO            varchar(128),
   VIVREFDOS            varchar(128),
   primary key (VIVID)
);

alter table BIENES add constraint FK_REFERENCE_6 foreign key (FICID)
      references FICHAS (FICID) on delete restrict on update restrict;

alter table BIENES add constraint FK_REFERENCE_9 foreign key (TBIID)
      references TIPO_BIENES (TBIID) on delete restrict on update restrict;

alter table FICHAS add constraint FK_REFERENCE_1 foreign key (ESTID)
      references ALUMNO (ESTID) on delete restrict on update restrict;

alter table FICHAS add constraint FK_REFERENCE_7 foreign key (PERID)
      references PERIODOS (PERID) on delete restrict on update restrict;

alter table FINANCIAMIENTOS add constraint FK_REFERENCE_3 foreign key (FICID)
      references FICHAS (FICID) on delete restrict on update restrict;

alter table GRUPO_FAMILIARES add constraint FK_REFERENCE_4 foreign key (FICID)
      references FICHAS (FICID) on delete restrict on update restrict;

alter table OCUPACIONES add constraint FK_REFERENCE_2 foreign key (FICID)
      references FICHAS (FICID) on delete restrict on update restrict;

alter table REGISTRO_EGRESOS add constraint FK_REFERENCE_5 foreign key (FICID)
      references FICHAS (FICID) on delete restrict on update restrict;

alter table REGISTRO_EGRESOS add constraint FK_REFERENCE_8 foreign key (EGRID)
      references EGRESO (EGRID) on delete restrict on update restrict;

alter table SNIESE add constraint FK_REFERENCE_10 foreign key (FICID)
      references FICHAS (FICID) on delete restrict on update restrict;

alter table VIVIENDAS add constraint FK_REFERENCE_11 foreign key (FICID)
      references FICHAS (FICID) on delete restrict on update restrict;

