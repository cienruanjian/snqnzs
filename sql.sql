-- -----------------------------------------------------
-- Schema sql_snqnzs
--
-- 思南亲年之声
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sql_snqnzs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sql_snqnzs` ;

-- -----------------------------------------------------
-- Table `sql_snqnzs`.`cns_admin`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `cns_admin` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `login` VARCHAR(32) NOT NULL  DEFAULT '' COMMENT '登陆名',
  `password` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '密码',
  `last_login_time` INT(11) NOT NULL DEFAULT 0 COMMENT '上次登陆时间',
  `last_login_ip` BIGINT NOT NULL DEFAULT 0 COMMENT '上次登陆ip',
  `status` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '用户状态：0=锁定，1=正常',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login` (`login`) COMMENT '管理员表'
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- 初始化管理员账号
-- -----------------------------------------------------
# INSERT INTO cns_admin SET `login` = 'cns', `password` = md5('flzx3qc'), `status` = 1;


-- -----------------------------------------------------
-- Table `sql_snqnzs`.`cns_ad`广告位管理
-- -----------------------------------------------------
CREATE TABLE `cns_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '网页地址',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `desc` varchar(500) NOT NULL DEFAULT '' COMMENT '相关描述',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '广告位图片',
  `number` tinyint(1) NOT NULL DEFAULT 0 COMMENT '广告位编号',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1=正常，0=关闭',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

-- -----------------------------------------------------
-- Table `sql_snqnzs`.`cns_article`文章
-- -----------------------------------------------------
CREATE TABLE `cns_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `type` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '类别',
  `title` varchar(120) NOT NULL DEFAULT '' COMMENT '标题',
  `desc` varchar(500) NOT NULL DEFAULT '' COMMENT '相关描述',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `content` text comment '文章内容',
  `hot` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '推荐',
  `create_at` INT(11) NOT NULL DEFAULT 0 COMMENT '发布时间',
  `click` INT(11) NOT NULL DEFAULT 0 COMMENT '点击数',
  `editor` VARCHAR(30) NOT NULL DEFAULT '' COMMENT '编辑',
  `from` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '文章来源',
  `status` tinyint(1) unsigned NOT NULL DEFAULT 1 COMMENT '1=正常，0=删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

-- -----------------------------------------------------
-- Table `sql_snqnzs`.`cns_service`服务联盟
-- -----------------------------------------------------
CREATE TABLE `cns_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `intro` text COMMENT '简介',
  `phone` char(15) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `weixin` varchar(100) NOT NULL DEFAULT '' COMMENT '微信号',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '二维码缩略图',
  `addr` varchar(200) NOT NULL DEFAULT '' COMMENT '地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

-- -----------------------------------------------------
-- Table `sql_snqnzs`.`cns_service_photo`服务联盟图片
-- -----------------------------------------------------
CREATE TABLE `cns_service_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '照片路径',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

-- -----------------------------------------------------
-- Table `sql_snqnzs`.`cns_micro_circle` 微圈
-- -----------------------------------------------------
CREATE TABLE `cns_micro_circle` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `title` varchar(120) NOT NULL DEFAULT '' COMMENT '标题',
  `nickname` varchar(32) NOT NULL DEFAULT '' COMMENT '昵称',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '邮箱',
  `content` text comment '内容',
  `create_at` INT(11) NOT NULL DEFAULT 0 COMMENT '发布时间',
  `click` INT(11) NOT NULL DEFAULT 0 COMMENT '点击数',
  `status` tinyint(1) unsigned NOT NULL DEFAULT 1 COMMENT '1=正常，0=待审核',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

-- -----------------------------------------------------
-- Table `sql_snqnzs`.`cns_comment` 微圈
-- -----------------------------------------------------
CREATE TABLE `cns_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `nickname` varchar(32) NOT NULL DEFAULT '' COMMENT '昵称',
  `content` text comment '内容',
  `comment_for` int(11) not null DEFAULT 0 COMMENT '评论',
  `create_at` INT(11) NOT NULL DEFAULT 0 COMMENT '发布时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT 1 COMMENT '1=正常，0=待审核',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8


