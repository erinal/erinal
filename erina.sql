CREATE TABLE IF NOT EXISTS `eri_admin` (
  `adminid` mediumint unsigned not null auto_increment,
  `adminuser` varchar(60) not null default '',
  `adminpass` char(32) not null default '',
  `adminemail` varchar(50) not null default '',
  `logintime` int unsigned not null default 0,
  `createtime` int unsigned not null default 0,
  `islock` tinyint not null default 0,
  PRIMARY KEY (`adminid`),
  UNIQUE eri_admin_adminuser_adminpass(`adminuser`, `adminpass`),
  UNIQUE eri_admin_adminuser_adminemail(`adminuser`, `adminemail`)
)auto_increment=1000 engine=innodb default charset=utf8;

CREATE TABLE IF NOT EXISTS `eri_user` (
  `userid` bigint unsigned not null auto_increment,
  `username` varchar(60) not null default '',
  `userpass` char(32) not null default '',
  `useremail` varchar(50) not null default '',
  `level` tinyint not null default 0,
  UNIQUE eri_user_username_userpass(`username`,`userpass`),
  UNIQUE eri_user_useremail_userpass(`useremail`,`userpass`),
  PRIMARY KEY(`userid`)
)engine=innodb default charset=utf8;

CREATE  TABLE IF NOT EXISTS `eri_profile` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `truename` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `age` TINYINT UNSIGNED NOT NULL DEFAULT '0' COMMENT '年龄',
  `sex` ENUM('0','1','2') NOT NULL DEFAULT '0' COMMENT '性别',
  `address` varchar(60) not null default '' comment '地址',
  `birthday` date NOT NULL DEFAULT '2016-01-01' COMMENT '生日',
  `nickname` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '昵称',
  `company` VARCHAR(100) NOT NULL DEFAULT '' COMMENT '公司',
  `userid` BIGINT UNSIGNED NOT NULL DEFAULT '0' COMMENT '用户的ID',
  `createtime` INT UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY(`id`),
  UNIQUE shop_profile_userid(`userid`)
)engine=innodb default charset=utf8;

CREATE TABLE IF NOT EXISTS `eri_category` (
  `cateid` int unsigned not null auto_increment,
  `catename` varchar(40) not null default '',
  PRIMARY KEY(`cateid`)
)engine = innodb default charset=utf8;

CREATE TABLE IF NOT EXISTS `eri_articles` (
  `articleid` bigint unsigned not null auto_increment,
  `title` varchar(30) not null default '',
  `summary` varchar(255) not null default '',
  `content` text not null default '',
  `createtime` int unsigned not null default '0',
  `click` int unsiged not null default '0',
  `ishot` tinyint not null default '0' comment '是否热门',
  `isrecommond` tinyint not null default '0' comment '是否推荐',
  `userid` bigint unsigned not null default '0',
  PRIMARY KEY(`articleid`),
  key eri_articles_articleid_userid(`articleid`,`userid`)
)engine=innodb default charset=utf8;

CREATE TABLE IF NOT EXISTS `eri_comments` (
  `commentid` int unsigned not null auto_increment,
  `articleid` bigint unsigned not null,
  `userid` bigint unsigned not null,
  `content` varchar(255) not null default '',
  `createtime` int unsigned not null default '0',
  PRIMARY KEY(`commentid`),
  key eri_comments_commentid_articleid_userid(`commentid`,`articleid`,`userid`)
)engine=innodb default charset=utf8;
