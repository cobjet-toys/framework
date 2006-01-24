-- 
-- Create module tables
-- 

CREATE TABLE IF NOT EXISTS `modules` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`modulename` VARCHAR( 50 ) NOT NULL ,
`version` VARCHAR( 20 ) NOT NULL ,
`enabled` TINYINT NOT NULL
) TYPE = MYISAM ;


--
-- Upgrade Devices table
--

ALTER TABLE `devices` ADD `emergency_cid` VARCHAR( 100 ) NULL

