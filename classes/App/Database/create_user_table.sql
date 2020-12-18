Create table user(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    name varchar(256) not null,
    email varchar(256) not null,
    password text not null,
)