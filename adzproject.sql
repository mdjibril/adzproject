-- Essa Elite DB

drop table if exists `admintb`;
create table `admintb` (
	`adminId` int(11) not null primary key auto_increment,
	`fullname` varchar(100) not null,
	`email` varchar(50) not null,
	`phone` varchar(15) not null,
	`password` varchar(50) not null
);


drop table if exists `housetb`;
create table `housetb` (
	`houseId` int(11) not null primary key auto_increment,
	`profile_image` varchar(255) not null,
	`rent` varchar(50) not null,
	`squareft` varchar(50),
	`room` varchar(50) not null,
	`available` varchar(15) not null,
	`state` varchar(50) not null,
	`address` text not null,
	`additionalinfo` text not null
);
