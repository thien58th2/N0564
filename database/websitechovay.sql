create database website;
create table users(
    id_user int(11) unsigned auto_increment not NULL not null PRIMARY KEY,
    email varchar(255) not null autocomplete="off",
    username varchar(50) not null autocomplete="off",
    password varchar(50) not null autocomplete="off",
    number_idcard int(9) not null autocomplete="off",
    permision TINYINT(4),
    name varchar(50) not null autocomplete="off"

)
create table admin(
    id_admin int(11) unsigned auto_increment not null PRIMARY KEY;
    email varchar(255) not null autocomplete="off",
    username varchar(50) not null autocomplete="off",
    password varchar(50) not null autocomplete="off",
    number_idcard int(9) not null autocomplete="off",
    permision TINYINT(4),
    name_admin varchar(50) not null autocomplete="off"
)
create table chovaytratheongay(
    sotiencanvay FLOAT not null,
    thoigianvay int not null,
    sotiencanve float not null,
    sotientattoat float not null,
    sotienphaitratrongngay float not null
)