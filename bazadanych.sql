------------------------ operacje na tabelach -----------------------

-- utworzenie bazy zajecia7 (zadanie 1 z części MySQL)
create database zajecia7;

-- utworzenie uzytkownika zajecia7 z haslem zaliczenie123k i nadanie mu uprawnien do bazy (zadanie 2 z części MySQL)
grant select,insert on zajecia7.* to zajecia7@localhost identified by 'zaliczenie123k';

-- utworzenie tabeli ksiega z kluczem podstawowym ustawionym na
-- kolumne id
use zajecia7;

create table ksiega (
	id int NOT NULL AUTO_INCREMENT, 
	imie varchar(255),
	skad varchar(255),
    opinia TEXT,
    wiek int,
	adresip varchar(15),
	data_godzina datetime,
	PRIMARY KEY (id)
) CHARACTER SET utf8;

-- przykładowy insert
insert into ksiega (imie, skad, opinia, wiek, adresip, data_godzina) values ('Szymon','kolega','taka sobie',27,'127.0.0.1',NOW());

