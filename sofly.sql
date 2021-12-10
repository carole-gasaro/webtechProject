create database SoFly;
use SoFly;
create table passenger(
passenger_id int not null auto_increment primary key,
fname varchar(225) not null,
lname varchar(225) not null,
dob date not null,
gender varchar(225) not null,  
passport varchar(225) not null,
issued_date date not null,
expiration_date date not null,
issued_place varchar(225) not null,
ticket_nbr int not null,
departure time not null,
arrival time not null
);

create table airline(
airline_id int not null auto_increment primary key,
airline_name varchar(225) not null,
passenger_id int not null,
foreign key (passenger_id) references passenger (passenger_id) 
);

create table flight(
flight_id int not null auto_increment primary key,
flight_nbr varchar(225) not null, 
departure time not null,
arrival time not null,
comingfrom varchar(225) not null,
destination varchar(225) not null
);

create table seats(
seatrow int not null,
seatcolumn int not null,
class varchar(225) not null
);

create table contact(
fullname varchar(100) not null,
email varchar(225) not null,
message varchar(300) 
);

create table login(
id int not null auto_increment primary key,
email varchar(225) not null,
pwd varchar(80) not null
);


