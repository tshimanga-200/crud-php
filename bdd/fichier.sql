create table if not exists student(
id int(3) not null auto_increment,
nom varchar(50),
postnom varchar(50),
promotion varchar(255),
universite varchar(255),
primary key (id)
)
ENGINE=InnoDB   DEFAULT  CHARSET=latin1  ;
