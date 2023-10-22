use stilec2;

create table Uzivatel(
id int primary key identity(1,1) NOT NULL,
jmeno varchar(50) NOT NULL UNIQUE,
heslo varchar(50) NOT NULL,
check ((len(heslo) > 2) and (len(jmeno) > 2))
);