create database website;
create table users(
    id_user int(11) unsigned auto_increment not null PRIMARY KEY,
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
    sotiencamve float not null,
    sotientattoat float not null,
    sotienphaitratrongngay float not null
)

create table chovaytheoshk(
    sotiencanvay1 FLOAT not null,
    thoigianvay1 int not null,
    sotiencamve1 float not null,
    sotientattoat1 float not null,
    sotienphaitungngay float not null
)
create table thongtindangky1(
    hovaten VARCHAR(50)  not null,
    socmt int(11) not null primary key autocomplete="off",
    ngaycap DATETIME not null autocomplete="off",
    noicap VARCHAR(150) not null autocomplete="off",
    sinhnhat datetime not null autocomplete="off",
    quequan VARCHAR(150) not null autocomplete="off",
    hokhauthuongtru VARCHAR(150) not null autocomplete="off",
    noilamviec varchar(150) not null autocomplete="off",
    sdtnoilamviec int(11) not null autocomplete="off",
    luong FLOAT(15) not null autocomplete="off",
    gioitinh VARCHAR(3) not null autocomplete="off"
    

)