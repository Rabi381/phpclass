create table posts(
id int auto_increment primary key,
title varchar(255) not null,
body text not null,
created_at timestamp default current_timestamp

);
insert into posts(title,body) value ('post one','this is post one'),
('post two','this is post two'),
('post three','this is post three');
hi, so my account has been locked and i wanted to confirm that does it automatically unlock in 24 hours