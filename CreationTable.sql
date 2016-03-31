create table condidat(
  
  idCondidat int(10) auto_increment,
  nom varchar(20),
  prenom varchar(20),
  dateNaiss varchar(20),
  login varchar(20),
  password varchar(20) ,
  specialite varchar(30),
  domaine varchar(30),
  niveau varchar(20),
  nature varchar(20),
  constraint pk_con primary key(idCondidat)

);
create table recruteur(
  
  idRecruteur int(10) auto_increment,
  nom varchar(20),
  prenom varchar(20),
  dateNaiss varchar(20),
  login varchar(20),
  password varchar(20) ,
  domaine varchar(30),
  nature varchar(20),
  constraint pk_con primary key(idRecruteur)

);