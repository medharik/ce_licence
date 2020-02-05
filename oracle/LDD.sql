-- LDD
LES 5 TYPES DE  CONSTRAINTES DES BASES DE DONNEES : (pour garantir l'integrite des donnees )_
primary key : (ou identifiant id) => information unique + obligatoire 
foreign key : cle etrangere => mettre en relation des tables 
not null : obligatoire  (RQ : NULL => ABSENCE E VALEUR) => garantir l'integrite referenrielle 
unique :  un champs unique n'acceotre pas des valeurs identique (pas de doublons)
check : contrainte  de domaine (ou de verification)

RAPPEL :
base de donnees : 
au niveau logique : c'est une ensemble de tables , eventuellement relationnelles 
au niveau physique : fichier persitant dans le Disque Dur  et gerer par SGBDR (ACCEES , ORACLE , SQL SERVER , POSTGRESQL , MYSQL)

exemple : 


create :


create table fournisseur (
id  number   ,
nom varchar2(20) not null ,
constraint pk_frn_prd primary key(id) 


)

create table produit (
id NUMBER PRIMARY KEY ,
libelle varchar2(50) unique,
prix number(6,2) not null ,
qtestock  INTEGER default 0 , 
marque varchar2(100) default 'hp',
fournisseur_id number ,
constraint verif_prix check( prix >= 1 ),
constraint verif_marque check ( marque in ('hp','dell') ),
constraint fk_prd_frn foreign key (fournisseur_id) references fournisseur (id) on delete cascade 
)


les 4 options qu'on peut definir  dans une relation entre  tables 
on delete  casacade => supprimer parent entraine la suppression de tous les child
on delete restrict => interdit la suppression de parent s'il a au moins 1 child 
on delete set null 
on delete no action 



alter (modifier la structure des donnees )

alter table produit add config varchar2(20)

alter table produit modify  config varchar2(200)
alter table produit drop column config

alter table produit drop constraint  verif_marque
alter table produit add  constraint  verif_marque
alter table produit modify constraint  verif_marque

aly
drop :
- supprimer une table (produit)
drop table produit

describe produit pour afficher la structure de la table




select * from user_constraints