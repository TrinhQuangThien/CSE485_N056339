create database movie

drop table genre;

create table users(
users_id int not null primary key,
users_name varchar(100) not null,
email varchar(100) not null,
phone int not null,
users_address varchar(100) not null,
username varchar(100) not null,
password varchar(100) not null,
access_level varchar(16) not null,
status int not null,
created datetime not null
);

create table film(
film_id int not null primary key,
genre_id int not null,
country_id int not null,
film_name varchar(100) not null,
actor varchar(200) not null,
director varchar(50) not null,
viewed int not null,
film_time varchar(50) not null,
film_year varchar(50) not null
);

create table genre(
genre_id int not null primary key,
genre_name varchar(50) not null

);

create table country(
country_id int not null primary key,
country_name varchar(50) not null
);

create table comment(
comment_id int not null primary key,
users_id int not null,
film_id int not null,
comment_name varchar(100) not null,
content text not null,
comment_time datetime not null

);

create table episode(
episode_id int not null primary key,
film_id int not null,
episode_name varchar(50) not null,
episode_number int not null,
episode_url varchar(250) not null

);

create table trailer(
trailer_id int not null primary key,
genre_id int not null,
trailer_name varchar(50) not null,
trailer_time varchar(50) not null,
trailer_url varchar(250) not null

);

ALTER TABLE film ADD FOREIGN KEY (genre_id) REFERENCES genre(genre_id);
ALTER TABLE film ADD FOREIGN KEY (country_id) REFERENCES country(country_id);

ALTER TABLE episode ADD FOREIGN KEY (film_id) REFERENCES film(film_id);

ALTER TABLE comment ADD FOREIGN KEY (users_id) REFERENCES users(users_id);
ALTER TABLE comment ADD FOREIGN KEY (film_id) REFERENCES film(film_id);

ALTER TABLE trailer ADD FOREIGN KEY (genre_id) REFERENCES genre(genre_id);
