create table humans (
  id int(11) primary key auto_increment,
  nick varchar(12) not null,
  name varchar(45) not null,
  crew_of int(11) null
);

insert into humans
  (`nick`, `name`, `crew_of`) VALUES ('Neo', 'Thomas Anderson', 1),
  (`nick`, `name`, `crew_of`) VALUES ('Sheena', 'Sheila Atkinson', 2);
