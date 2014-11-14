drop database if exists shpe_programming;

create database shpe_programming;

use shpe_programming;

create table users (name varchar(50) not null, 
lastname varchar(50) not null, email varchar(50) not null,
national_status boolean not null, chapter_status boolean not null,
points integer, meetings_attended integer, 
gender varchar (1) not null, primary key(email));

create table meetings (title varchar(100) not null, meeting_date date not null, point_value integer not null, primary key(meeting_date));

create table users_meetings (userID varchar(50) not null, meetingID date not null, linkID integer NOT NULL auto_increment, primary key (linkID),
	foreign key (userID) references users(email) ON UPDATE CASCADE, FOREIGN KEY (meetingID) REFERENCES meetings(meeting_date) ON UPDATE CASCADE);

