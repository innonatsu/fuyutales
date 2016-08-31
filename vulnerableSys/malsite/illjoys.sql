drop database prac2_joys;
create database prac2_joys;
use prac2_joys;

create table illegal_joys(
    id int not null auto_increment primary key,
    stolen_session text not null,
    session_url text not null
);

select * from illegal_joys;
