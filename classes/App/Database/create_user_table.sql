Create table users(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    name varchar(256) not null,
    email varchar(256) not null,
    location varchar(256)  null,
    password text not null,
    remember_token text  null,
    created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP ,
    updated_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP 
);