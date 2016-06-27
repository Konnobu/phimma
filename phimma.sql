-- すでにphimheoデータベースがある場合は
drop database phimheo;

-- ない場合はここから

create database phimheo;

use phimheo;

create table users (
  id int auto_increment primary key,
  name varchar(32) not null,
  email varchar(255) not null,
  password_hash varchar(32) not null,
  student_number int not null,
  faculty_id int not null,
  department_id int not null,
  admission_year year not null
)CHARSET=utf8;

create table faculties (
  id int auto_increment primary key,
  faculty_name varchar(32) not null
)CHARSET=utf8;

create table departments (
  id int auto_increment primary key,
  faculty_id int not null,
  department_name varchar(32) not null
)CHARSET=utf8;

create table exhibits (
  id int auto_increment primary key,
  user_id int not null,
  exhibit_category_id int,
  image varchar(255),
  title varchar(255) not null,
  price int not null,
  start_exhibit_date datetime not null,
  book_status int not null default 0,
  exhibit_status int not null default 0,
  created datetime,
  modified datetime
)CHARSET=utf8;

create table exhibit_categories (
  id int auto_increment primary key,
  category_name int not null
)CHARSET=utf8;

create table user_reviews (
  id int auto_increment primary key,
  user_id int not null,
  exhibit_id int not null,
  rank int
)CHARSET=utf8;

create table purchases (
  id int auto_increment primary key,
  user_id int not null,
  exhibit_id int not null,
  status int not null,
  price int not null,
  created datetime,
  modified datetime
)CHARSET=utf8;


-- リレーションを作る（追加）
ALTER TABLE `departments` ADD INDEX(`faculty_id`);
ALTER TABLE `departments` ADD FOREIGN KEY (`faculty_id`) REFERENCES `phimma`.`faculties`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `users` ADD INDEX(`faculty_id`);
ALTER TABLE `users` ADD INDEX(`department_id`);
ALTER TABLE `users` ADD FOREIGN KEY (`faculty_id`) REFERENCES `phimma`.`faculties`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `users` ADD FOREIGN KEY (`department_id`) REFERENCES `phimma`.`departments`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `exhibits` ADD INDEX(`user_id`);
ALTER TABLE `exhibits` ADD INDEX(`exhibit_category_id`);
ALTER TABLE `exhibits` ADD FOREIGN KEY (`user_id`) REFERENCES `phimma`.`users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `exhibits` ADD FOREIGN KEY (`exhibit_category_id`) REFERENCES `phimma`.`exhibit_categories`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `purchases` ADD INDEX(`user_id`);
ALTER TABLE `purchases` ADD INDEX(`exhibit_id`);
ALTER TABLE `purchases` ADD FOREIGN KEY (`user_id`) REFERENCES `phimma`.`users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `purchases` ADD FOREIGN KEY (`exhibit_id`) REFERENCES `phimma`.`exhibits`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;


-- 初期データを入れる

insert into faculties (faculty_name) values
('ソフトウェア情報学部'),
('看護学部'),
('総合政策学部'),
('盛岡短期大学部'),
('宮古短期大学部'),
('社会福祉学部');


insert into departments (faculty_id, department_name) values
(1, 'ソフトウェア情報学科'),
(2, '看護学科'),
(3, '総合政策学科'),
(4, '生活科学科'),
(4, '国際文化学科'),
(5, '経営情報学科'),
(6, '社会福祉学科'),
(6, '人間福祉学科');

insert into exhibit_categories (category_name) values
('文学・評論'),
('人文・思想'),
('社会・政治'),
('ノンフィクション'),
('歴史・地理'),
('ビジネス・経済'),
('投資・金融・会社経営'),
('科学・テクノロジー'),
('医学・薬学'),
('コンピュータ・IT'),
('アート・建築・デザイン'),
('趣味・実用'),
('スポーツ・アウトドア'),
('資格・検定・就職'),
('暮らし・健康・子育て'),
('語学・辞事典・年鑑'),
('教育・学参・受験'),
('楽譜・スコア・音楽書'),
('その他');


INSERT INTO `phimma`.`users` (`id`, `name`, `email`, `password_hash`, `student_number`, `faculty_id`, `department_id`, `admission_year`) VALUES (NULL, '今野遼太', 'dra.mixx.nico@gmail.com', 'password', '0312014068', '1', '1', '2014');



