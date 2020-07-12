/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 5.5.20-log : Database - mahallu_ management
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mahallu_ management` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mahallu_ management`;

/*Table structure for table `adminfamilymember` */

DROP TABLE IF EXISTS `adminfamilymember`;

CREATE TABLE `adminfamilymember` (
  `family_mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `hs_no` varchar(50) DEFAULT NULL,
  `mem_nm` varchar(22) DEFAULT NULL,
  `gender` varchar(22) DEFAULT NULL,
  `relation` varchar(22) DEFAULT NULL,
  `blood` varchar(22) DEFAULT NULL,
  `mob` bigint(12) DEFAULT NULL,
  `email` varchar(22) DEFAULT NULL,
  `father_nm` varchar(22) DEFAULT NULL,
  `mother_nm` varchar(22) DEFAULT NULL,
  `mrrg` varchar(22) DEFAULT NULL,
  `adhaar` varchar(22) DEFAULT NULL,
  `v_id` varchar(22) DEFAULT NULL,
  `passport` varchar(22) DEFAULT NULL,
  `r_edu` varchar(22) DEFAULT NULL,
  `edu` varchar(22) DEFAULT NULL,
  `job` varchar(22) DEFAULT NULL,
  `mem_d_date` date DEFAULT NULL,
  `mem_d_place` varchar(50) DEFAULT NULL,
  `mem_d_reason` varchar(50) DEFAULT NULL,
  `mem_d_informer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`family_mem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `adminfamilymember` */

insert  into `adminfamilymember`(`family_mem_id`,`hs_no`,`mem_nm`,`gender`,`relation`,`blood`,`mob`,`email`,`father_nm`,`mother_nm`,`mrrg`,`adhaar`,`v_id`,`passport`,`r_edu`,`edu`,`job`,`mem_d_date`,`mem_d_place`,`mem_d_reason`,`mem_d_informer`) values 
(1,',djfk',',kj','male','mnk','mn',0,' mn','mnm','bvn',' bng','nbjh','nm','mhn','nhj','mhk',' nbn','2020-03-02','bgh','hj','jm'),
(2,'bnb','hgjh',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'not',NULL,NULL),
(3,'133','abc','male','qq','a',9090909090,'qq@mg.com','aa','oo','a','098767564121','1213123123','pp','yu','uyti','jio','0000-00-00','not','not','not');

/*Table structure for table `asset_collection` */

DROP TABLE IF EXISTS `asset_collection`;

CREATE TABLE `asset_collection` (
  `ascoll_id` int(11) NOT NULL AUTO_INCREMENT,
  `ast_id` int(11) DEFAULT NULL,
  `coll_date` date DEFAULT NULL,
  `ast_t_amt` varchar(30) DEFAULT NULL,
  `R_L` varchar(22) DEFAULT NULL,
  `st_date` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `rent_amt` varchar(22) DEFAULT NULL,
  `hldr_nm` varchar(22) DEFAULT NULL,
  `hldr_ph` bigint(12) DEFAULT NULL,
  `hldr_house` varchar(22) DEFAULT NULL,
  `advance` varchar(22) DEFAULT NULL,
  `hldr_place` varchar(22) DEFAULT NULL,
  `hldr_pin` bigint(11) DEFAULT NULL,
  `hldr_district` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`ascoll_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `asset_collection` */

insert  into `asset_collection`(`ascoll_id`,`ast_id`,`coll_date`,`ast_t_amt`,`R_L`,`st_date`,`exp_date`,`rent_amt`,`hldr_nm`,`hldr_ph`,`hldr_house`,`advance`,`hldr_place`,`hldr_pin`,`hldr_district`) values 
(2,0,'0000-00-00','ssh','rent','2020-02-19','2020-02-20','222','xx',22,'x','111','ggggg',1,'Calicut'),
(3,0,'0000-00-00','fdhf','Lease','2020-03-03','2020-03-12','7668','bgfbf',64699,'vfdng','5466','hjsdhv',233,'Wayanad'),
(4,2,'2020-05-02','1500','Rent','2020-05-01','2020-05-31','1500','abc',9090909090,'app','1000','kozhikode',909090,'Kozhikode'),
(5,2,'2020-05-28','100','Rent','2020-05-01','2020-05-31','100','abu',9099891232,'pu','50','calicut',121212,'Kozhikode'),
(6,2,'2020-05-28','1000','Rent','2020-05-01','2020-05-31','1000','abc',9090909809,'p','1000','calicut',677545,'Kozhikode'),
(7,2,'2020-05-28','1000','Rent','2020-05-10','2020-05-31','1000','anu',9089089891,'pa','500','calicut',89089,'Kozhikode');

/*Table structure for table `asset_registration` */

DROP TABLE IF EXISTS `asset_registration`;

CREATE TABLE `asset_registration` (
  `ast_id` int(11) NOT NULL AUTO_INCREMENT,
  `ast_nm` varchar(30) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `status` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`ast_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `asset_registration` */

insert  into `asset_registration`(`ast_id`,`ast_nm`,`category`,`place`,`description`,`status`) values 
(2,'ahg','ahg','ssh','sfghh','pending'),
(3,'fdjg','dgdth','fdhf','fghfg','vdfbd');

/*Table structure for table `committee` */

DROP TABLE IF EXISTS `committee`;

CREATE TABLE `committee` (
  `cm_id` int(11) NOT NULL AUTO_INCREMENT,
  `cm_nm` varchar(22) DEFAULT NULL,
  `type` varchar(22) DEFAULT NULL,
  `status` varchar(22) DEFAULT NULL,
  `esb_date` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `committee` */

insert  into `committee`(`cm_id`,`cm_nm`,`type`,`status`,`esb_date`,`exp_date`,`login_id`) values 
(1,'vjhg','$type','pending','0000-00-00','0000-00-00',2),
(3,'aff','aaa','pending','2020-02-25','2022-02-25',NULL),
(4,'ag','aaa','pending','2020-02-26','0000-00-00',NULL),
(5,'aju','att','pending','1999-12-12','2023-12-12',17);

/*Table structure for table `committee_member` */

DROP TABLE IF EXISTS `committee_member`;

CREATE TABLE `committee_member` (
  `cmm_mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `cm_id` int(11) DEFAULT NULL,
  `cmm_post` varchar(22) DEFAULT NULL,
  `cmm_m_nm` varchar(22) DEFAULT NULL,
  `cmm_status` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`cmm_mem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `committee_member` */

insert  into `committee_member`(`cmm_mem_id`,`cm_id`,`cmm_post`,`cmm_m_nm`,`cmm_status`) values 
(1,1,'ff','ff','cc'),
(2,1,'ff','faisanarhin','cc');

/*Table structure for table `divorce_registration` */

DROP TABLE IF EXISTS `divorce_registration`;

CREATE TABLE `divorce_registration` (
  `dvc_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) DEFAULT NULL,
  `hs_no` varchar(50) DEFAULT NULL,
  `dvc_hus_nm` varchar(22) DEFAULT NULL,
  `dvc_hus_hs` varchar(22) DEFAULT NULL,
  `dvc_wife_nm` varchar(22) DEFAULT NULL,
  `dvc_wife_hs` varchar(22) DEFAULT NULL,
  `dvc_mrg_date` date DEFAULT NULL,
  `dvc_date` date DEFAULT NULL,
  `dvc_type` varchar(22) DEFAULT NULL,
  `dvc_reason` varchar(22) DEFAULT NULL,
  `dvc_v_person` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`dvc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `divorce_registration` */

insert  into `divorce_registration`(`dvc_id`,`m_id`,`hs_no`,`dvc_hus_nm`,`dvc_hus_hs`,`dvc_wife_nm`,`dvc_wife_hs`,`dvc_mrg_date`,`dvc_date`,`dvc_type`,`dvc_reason`,`dvc_v_person`) values 
(2,1,'FDFG','sde','def','sdwefrw','DWRGRTH','2020-03-03','2020-03-05','KKK','LLLL','MM');

/*Table structure for table `family_member_reg` */

DROP TABLE IF EXISTS `family_member_reg`;

CREATE TABLE `family_member_reg` (
  `family_mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `hs_no` varchar(50) DEFAULT NULL,
  `mem_nm` varchar(22) DEFAULT NULL,
  `gender` varchar(22) DEFAULT NULL,
  `relation` varchar(22) DEFAULT NULL,
  `blood` varchar(22) DEFAULT NULL,
  `mob` bigint(12) DEFAULT NULL,
  `email` varchar(22) DEFAULT NULL,
  `job` varchar(22) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`family_mem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `family_member_reg` */

insert  into `family_member_reg`(`family_mem_id`,`hs_no`,`mem_nm`,`gender`,`relation`,`blood`,`mob`,`email`,`job`,`login_id`) values 
(1,'vfg','fdf','Male','fdf','dd',1546,'a@gmail.com','vgh',12),
(2,'cx','fdf','Male','fdf','dd',1546,'a@gmail.com','vgh',13),
(3,'gfd','','','','',0,'','',15);

/*Table structure for table `family_reg` */

DROP TABLE IF EXISTS `family_reg`;

CREATE TABLE `family_reg` (
  `family_reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `hs_no` varchar(22) DEFAULT NULL,
  `hs_nm` varchar(22) DEFAULT NULL,
  `place` varchar(22) DEFAULT NULL,
  `post` varchar(22) DEFAULT NULL,
  `pincode` bigint(10) DEFAULT NULL,
  `phno` bigint(12) DEFAULT NULL,
  `division` varchar(22) DEFAULT NULL,
  `division_nm` varchar(22) DEFAULT NULL,
  `ward_no` int(11) DEFAULT NULL,
  `ml_block` varchar(22) DEFAULT NULL,
  `hs_osp` varchar(22) DEFAULT NULL,
  `hs_type` varchar(22) DEFAULT NULL,
  `vehicles` varchar(22) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `lid` int(11) DEFAULT NULL,
  PRIMARY KEY (`family_reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `family_reg` */

insert  into `family_reg`(`family_reg_id`,`hs_no`,`hs_nm`,`place`,`post`,`pincode`,`phno`,`division`,`division_nm`,`ward_no`,`ml_block`,`hs_osp`,`hs_type`,`vehicles`,`reg_date`,`lid`) values 
(1,'121','aa','kpkp','sdfs',899889,9878231243,'1','aa',12,'2','a','qw','1','1994-12-12',NULL),
(2,'133','put','kod','kaa',909090,9090909090,'8','anna',8,'9','uu','a','2020-02-01','2020-02-01',NULL),
(3,'454','pa','pla','pos',988989,9090909090,'3','amm',2,'1','app','aa','2020-05-28','2020-05-28',18);

/*Table structure for table `institution_reg` */

DROP TABLE IF EXISTS `institution_reg`;

CREATE TABLE `institution_reg` (
  `inst_id` int(11) NOT NULL AUTO_INCREMENT,
  `inst_type` varchar(22) DEFAULT NULL,
  `inst_reg_no` varchar(22) DEFAULT NULL,
  `inst_nm` varchar(22) DEFAULT NULL,
  `inst_es_date` date DEFAULT NULL,
  `inst_place` varchar(22) DEFAULT NULL,
  `inst_email` varchar(22) DEFAULT NULL,
  `inst_ph` bigint(12) DEFAULT NULL,
  `inst_post` varchar(22) DEFAULT NULL,
  `inst_pin` bigint(11) DEFAULT NULL,
  PRIMARY KEY (`inst_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `institution_reg` */

insert  into `institution_reg`(`inst_id`,`inst_type`,`inst_reg_no`,`inst_nm`,`inst_es_date`,`inst_place`,`inst_email`,`inst_ph`,`inst_post`,`inst_pin`) values 
(2,'fdfghr','xzcfdgh','gdgd','2020-03-03','zfdfgrth','adfaerg',45212692,'csdggnfh',0),
(3,'mjgdjsfy','jgcsuf','bcgvfud','2020-03-10','nhcdsufy','nmcjsd',256868,'ftywetywer',668),
(6,'','','','2020-04-17','','',0,'',0),
(7,'','','','2020-04-30','','',0,'',0);

/*Table structure for table `ledger_account_reg` */

DROP TABLE IF EXISTS `ledger_account_reg`;

CREATE TABLE `ledger_account_reg` (
  `lg_id` int(11) NOT NULL AUTO_INCREMENT,
  `lg_nm` varchar(30) DEFAULT NULL,
  `lg_group` varchar(22) DEFAULT NULL,
  `lg_cu` varchar(100) DEFAULT NULL,
  `lg_des` varchar(100) DEFAULT NULL,
  `lg_op` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`lg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `ledger_account_reg` */

insert  into `ledger_account_reg`(`lg_id`,`lg_nm`,`lg_group`,`lg_cu`,`lg_des`,`lg_op`) values 
(9,'nvh','hj','200','b','800/2020-03-09'),
(10,'ahg','Rent','1500','abc,kozhikode','1500/2020-05-02'),
(11,'ahg','Rent','100','abu,calicut','100/2020-05-28'),
(12,'ahg','Rent','1000','abc,calicut','1000/2020-05-28'),
(13,'ahg','Rent','2000','anu,calicut','1000/2020-05-28');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(22) DEFAULT NULL,
  `password` varchar(22) DEFAULT NULL,
  `type` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`type`) values 
(1,'mahallu','mahallu','mahallu'),
(2,'c','c','committee'),
(3,'f','f','family'),
(4,'123','','pending'),
(5,'aff','323','pending'),
(6,'ag','ag123','pending'),
(7,'','bb','family'),
(8,'','','pending'),
(9,'','','pending'),
(10,'kk','ll','pending'),
(11,' nbM','mbzxj','committee'),
(12,'a@gmail.com','jhj','family'),
(13,'a@gmail.com','jhj','pending'),
(14,'','','committee'),
(15,'','','pending'),
(16,'','9090909090','family'),
(17,'aju@gmail.com','123123','committee'),
(18,'454','9090909090','family');

/*Table structure for table `mahallu_block_reg` */

DROP TABLE IF EXISTS `mahallu_block_reg`;

CREATE TABLE `mahallu_block_reg` (
  `mlb_id` int(11) NOT NULL AUTO_INCREMENT,
  `mlb_nm` varchar(22) DEFAULT NULL,
  `mlb_date` date DEFAULT NULL,
  `mlb_des` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mlb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mahallu_block_reg` */

insert  into `mahallu_block_reg`(`mlb_id`,`mlb_nm`,`mlb_date`,`mlb_des`) values 
(2,'bgdh','2020-03-04','aaaaaaaaaa');

/*Table structure for table `mahallu_reg` */

DROP TABLE IF EXISTS `mahallu_reg`;

CREATE TABLE `mahallu_reg` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `ml_nm` varchar(22) DEFAULT NULL,
  `place` varchar(22) DEFAULT NULL,
  `post` varchar(22) DEFAULT NULL,
  `pincode` bigint(11) DEFAULT NULL,
  `phno` bigint(11) DEFAULT NULL,
  `wakf_reg` varchar(22) DEFAULT NULL,
  `es_date` date DEFAULT NULL,
  `area` varchar(22) DEFAULT NULL,
  `des` varchar(22) DEFAULT NULL,
  `path` varchar(22) DEFAULT NULL,
  `email` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `mahallu_reg` */

insert  into `mahallu_reg`(`m_id`,`ml_nm`,`place`,`post`,`pincode`,`phno`,`wakf_reg`,`es_date`,`area`,`des`,`path`,`email`) values 
(1,'fhg','jkf','urhfu',774,882,'124','2020-02-17','fgxbgc','bnvbn','bvb','af'),
(3,'bhjfekf','bjs','jhfdkf',66,56,' bvh','2020-03-04','vbnj','mbmnnm','chjgj','lll');

/*Table structure for table `marriage_reg` */

DROP TABLE IF EXISTS `marriage_reg`;

CREATE TABLE `marriage_reg` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `registration_no` varchar(50) DEFAULT NULL,
  `mem_id` int(11) DEFAULT NULL,
  `mrg_nm_m` varchar(22) DEFAULT NULL,
  `mrg_nm_f` varchar(22) DEFAULT NULL,
  `hs_no` varchar(50) DEFAULT NULL,
  `mrg_father` varchar(22) DEFAULT NULL,
  `mrg_mother` varchar(22) DEFAULT NULL,
  `mrg_guardian` varchar(22) DEFAULT NULL,
  `mrg_add` varchar(22) DEFAULT NULL,
  `mrg_nik_date` date DEFAULT NULL,
  `mrg_mahar` varchar(22) DEFAULT NULL,
  `mrg_v_person` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `marriage_reg` */

insert  into `marriage_reg`(`m_id`,`registration_no`,`mem_id`,`mrg_nm_m`,`mrg_nm_f`,`hs_no`,`mrg_father`,`mrg_mother`,`mrg_guardian`,`mrg_add`,`mrg_nik_date`,`mrg_mahar`,`mrg_v_person`) values 
(1,'cmdhfj',2,'nm',' m',' mn',' n','n',' nmm','nhj','2020-03-23',' mn',' m');

/*Table structure for table `masjid_reg` */

DROP TABLE IF EXISTS `masjid_reg`;

CREATE TABLE `masjid_reg` (
  `msgd_reg_no` int(11) NOT NULL AUTO_INCREMENT,
  `msgd_nm` varchar(22) DEFAULT NULL,
  `msgd_type` varchar(22) DEFAULT NULL,
  `msgd_add` varchar(22) DEFAULT NULL,
  `msgd_place` varchar(22) DEFAULT NULL,
  `msgd_ph` bigint(12) DEFAULT NULL,
  `msgd_email` varchar(22) DEFAULT NULL,
  `msgd_es_date` date DEFAULT NULL,
  PRIMARY KEY (`msgd_reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `masjid_reg` */

insert  into `masjid_reg`(`msgd_reg_no`,`msgd_nm`,`msgd_type`,`msgd_add`,`msgd_place`,`msgd_ph`,`msgd_email`,`msgd_es_date`) values 
(1,'zfdg','sf','vcv','zvcv',12,'xac','2020-03-25');

/*Table structure for table `mnoc` */

DROP TABLE IF EXISTS `mnoc`;

CREATE TABLE `mnoc` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `family` varchar(50) DEFAULT NULL,
  `mem_id` int(11) DEFAULT NULL,
  `mrg_father` varchar(22) DEFAULT NULL,
  `mrg_mother` varchar(22) DEFAULT NULL,
  `mrg_guardian` varchar(22) DEFAULT NULL,
  `mrg_add` varchar(22) DEFAULT NULL,
  `education` varchar(50) DEFAULT NULL,
  `religiouseduc` varchar(22) DEFAULT NULL,
  `nocregno` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mnoc` */

insert  into `mnoc`(`n_id`,`family`,`mem_id`,`mrg_father`,`mrg_mother`,`mrg_guardian`,`mrg_add`,`education`,`religiouseduc`,`nocregno`) values 
(2,'cvfgfd',2,'cds','xzffdg','cds','cds','cd','zxdsd','cx');

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `notifications` */

insert  into `notifications`(`no_id`,`notification`,`date`) values 
(1,'ff','2020-02-29'),
(2,'gdfghd','2020-03-02');

/*Table structure for table `program_reg` */

DROP TABLE IF EXISTS `program_reg`;

CREATE TABLE `program_reg` (
  `prgm_id` int(11) NOT NULL AUTO_INCREMENT,
  `prgm_nm` varchar(22) DEFAULT NULL,
  `prgm_type` varchar(22) DEFAULT NULL,
  `prgm_s_date` date DEFAULT NULL,
  `prgm_e_date` date DEFAULT NULL,
  `prgm_place` varchar(22) DEFAULT NULL,
  `prgm_status` varchar(22) DEFAULT NULL,
  `prgm_des` varchar(22) DEFAULT NULL,
  `pgm_reg_no` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`prgm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `program_reg` */

insert  into `program_reg`(`prgm_id`,`prgm_nm`,`prgm_type`,`prgm_s_date`,`prgm_e_date`,`prgm_place`,`prgm_status`,`prgm_des`,`pgm_reg_no`) values 
(1,'kk','lllllll','2020-02-11','2020-02-17','mm','civil','ll','mkkh'),
(2,'kk','kk','2020-02-11','2020-02-21','ll','ll','pp','ghg');

/*Table structure for table `reports` */

DROP TABLE IF EXISTS `reports`;

CREATE TABLE `reports` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `report` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `institute` varchar(100) DEFAULT NULL,
  `marriage` varchar(100) DEFAULT NULL,
  `divorce` varchar(100) DEFAULT NULL,
  `program` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `reports` */

insert  into `reports`(`r_id`,`report`,`date`,`institute`,`marriage`,`divorce`,`program`) values 
(9,'cxv','2020-03-19','jgcsuf','none','none','none'),
(10,'athira k','2020-04-23','xzcfdgh','cmdhfj','cmdhfj','ghg');

/*Table structure for table `staff_reg` */

DROP TABLE IF EXISTS `staff_reg`;

CREATE TABLE `staff_reg` (
  `staf_id` int(11) NOT NULL AUTO_INCREMENT,
  `inst_id` int(22) DEFAULT NULL,
  `st_nm` varchar(22) DEFAULT NULL,
  `st_hs_nm` varchar(22) DEFAULT NULL,
  `st_gender` varchar(22) DEFAULT NULL,
  `st_mob` bigint(12) DEFAULT NULL,
  `st_dob` date DEFAULT NULL,
  `st_email` varchar(22) DEFAULT NULL,
  `st_add` varchar(22) DEFAULT NULL,
  `st_mgins` varchar(22) DEFAULT NULL,
  `st_post` varchar(22) DEFAULT NULL,
  `st_join_date` date DEFAULT NULL,
  `st_basic_sal` double DEFAULT NULL,
  `status` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`staf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `staff_reg` */

insert  into `staff_reg`(`staf_id`,`inst_id`,`st_nm`,`st_hs_nm`,`st_gender`,`st_mob`,`st_dob`,`st_email`,`st_add`,`st_mgins`,`st_post`,`st_join_date`,`st_basic_sal`,`status`) values 
(2,2,'ffdg','bjsds','male',778,'2020-03-06','bjh','nmn','nmj','h','2020-03-06',5435,'nbh');

/*Table structure for table `staff_salary` */

DROP TABLE IF EXISTS `staff_salary`;

CREATE TABLE `staff_salary` (
  `staff_salary_id` int(11) NOT NULL AUTO_INCREMENT,
  `stf_id` int(11) DEFAULT NULL,
  `stf_date` date DEFAULT NULL,
  `stf_advance` varchar(100) DEFAULT NULL,
  `stf_bonus` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`staff_salary_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `staff_salary` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
