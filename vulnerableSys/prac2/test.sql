drop database prac2;
create database prac2;
use prac2;

create table users(
    id int not null auto_increment primary key,
    username varchar(200) not null,
    password text not null,
    fullname varchar(400) not null,
    accountNumber varchar(100) not null,
    userType int not null
);

insert into users(username,password,fullname,accountNumber,userType) values('admin','7cef8a734855777c2a9d0caf42666e69 ','admin admin','33355555',0);


select * from users;