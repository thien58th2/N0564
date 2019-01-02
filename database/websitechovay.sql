create database website;
create table users(
    id_user int(11) unsigned auto_increment not null PRIMARY KEY,
    email varchar(255) not null ,
    username varchar(50) not null ,
    password varchar(50) not null ,
    noio varchar(50) not null ,
    permision TINYINT(4),
    name varchar(50) not null

)
insert into users values ('2','1234@gmail.com','thien1','123456','Hanoi',1,'thien1')

create table admin(
    id_admin int(11)  auto_increment not null PRIMARY KEY;
    email varchar(255) not null ,
    username varchar(50) not null ,
    password varchar(50) not null ,
    
    permision TINYINT(4),
    name_admin varchar(50) not null 
)
insert into admin values (1,'123@gmail.com','admin','1',1,'thien')
create table chovaytratheongay(
    sotiencanvay FLOAT not null,
    thoigianvay int not null,
    sotiencamve float not null,
    sotientattoat float not null,
    sotienphaitratrongngay float not null
)
insert into chovaytratheongay values (5000000,50,4500000,5000000,100000);
insert into chovaytratheongay values (5000000,60,4500000,5000000,83333);
insert into chovaytratheongay values (5000000,100,4500000,5000000,50000);
insert into chovaytratheongay values (10000000,50,9000000,10000000,200000);
insert into chovaytratheongay values (10000000,60,9000000,10000000,166667);
insert into chovaytratheongay values (10000000,100,9000000,10000000,100000);
insert into chovaytratheongay values (15000000,50,14850000,15000000,300000);
insert into chovaytratheongay values (15000000,60,14850000,15000000,250000);
insert into chovaytratheongay values (15000000,100,14850000,15000000,150000);
insert into chovaytratheongay values (2000000,50,18000000,20000000,40000);
insert into chovaytratheongay values (2000000,60,18000000,20000000,333333);
insert into chovaytratheongay values (2000000,100,18000000,20000000,200000);
insert into chovaytratheongay values (2500000,50,22500000,25000000,500000);
insert into chovaytratheongay values (2500000,60,22500000,25000000,416667);
insert into chovaytratheongay values (2500000,100,22500000,25000000,250000);
insert into chovaytratheongay values (3000000,50,27000000,30000000,600000);
insert into chovaytratheongay values (3000000,60,27000000,30000000,500000);
insert into chovaytratheongay values (3000000,100,27000000,30000000,300000);
insert into chovaytratheongay values (3500000,50,31500000,35000000,750000);
insert into chovaytratheongay values (3500000,60,31500000,35000000,583333);
insert into chovaytratheongay values (3500000,100,31500000,35000000,350000);
insert into chovaytratheongay values (4000000,50,36000000,40000000,800000);
insert into chovaytratheongay values (4000000,60,36000000,40000000,666667 );
insert into chovaytratheongay values (4000000,100,36000000,40000000,400000);
insert into chovaytratheongay values (4500000,50,40500000,45000000,900000);
insert into chovaytratheongay values (4500000,60,40500000,45000000,750000);
insert into chovaytratheongay values (4500000,100,40500000,45000000,450000);
insert into chovaytratheongay values (5000000,50,45000000,50000000,1000000);
insert into chovaytratheongay values (5000000,60,45000000,50000000,833333);
insert into chovaytratheongay values (5000000,100,45000000,50000000,500000);





create table chovaytheoshk(
    sotiencanvay1 FLOAT not null,
    thoigianvay1 int not null,
    sotiencamve1 float not null,
    sotientattoat1 float not null,
   
)
insert into chovaytheoshk values (5000000,30,5000000,5500000);
insert into chovaytheoshk values (10000000,30,10000000,11000000);
insert into chovaytheoshk values (15000000,30,15000000,16500000);
insert into chovaytheoshk values (20000000,30,20000000,22000000);
insert into chovaytheoshk values (25000000,30,25000000,27500000);
insert into chovaytheoshk values (30000000,30,30000000,33000000);
insert into chovaytheoshk values (35000000,30,35000000,38500000);
insert into chovaytheoshk values (40000000,30,40000000,44000000);
insert into chovaytheoshk values (45000000,30,45000000,49500000);
insert into chovaytheoshk values (50000000,30,50000000,55000000);
insert into chovaytheoshk values (75000000,30,75000000,82500000);
insert into chovaytheoshk values (100000000,30,100000000,110000000);
insert into chovaytheoshk values (150000000,30,150000000,165000000);


CREATE table thongtindangky1(
    hovaten VARCHAR(50)  not null ,
    sdt int(11) not null ,
    email VARCHAR(50) not NULL ,
    socmt int(11) not null primary key  ,
    ngaycap DATETIME not null ,
    noicap VARCHAR(150) not null 
)
insert into thongtindangky1 values ('truong thanh thien',01687631629,'thien123@gmail.com',013409012,'2008-5-12','Ha Noi');
insert into thongtindangky1 values ('do thanh hoa',01687632329,'hoa123@gmail.com',013423012,'2008-5-12','Ha Noi');
insert into thongtindangky1 values ('truong thi uyen',01687345629,'uyen@gmail.com',013459012,'2008-5-12','Ha Noi')
create table thongtindangky2(
    
    sinhnhat datetime not null ,
    quequan VARCHAR(150) not null ,
    hokhauthuongtru VARCHAR(150) not null ,
    noilamviec varchar(150) not null ,
    sdtnoilamviec int(11) not null ,
    luong FLOAT(15) not null ,
    gioitinh VARCHAR(3) not null ,
    socmt int not null   ,
    FOREIGN key (socmt) REFERENCES thongtindangky1(socmt)

    

)
