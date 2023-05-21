create database registration;

create table users(
    id int primary auto_increment,
    firstName varchar(50) not null,
    lastName varchar(50),
    address varchar(50)
);