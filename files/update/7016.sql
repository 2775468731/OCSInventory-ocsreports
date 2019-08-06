-- Create saas table
CREATE TABLE IF NOT EXISTS `saas` (
    `SAAS_EXP_ID` INT(6) NOT NULL,
    `HARDWARE_ID` INT(11) NOT NULL,
    `ENTRY` varchar(255) NOT NULL,
    `DATA` varchar(255) NOT NULL,
    `TTL` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- Create saas_exp table
CREATE TABLE IF NOT EXISTS `saas_exp` (
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `NAME` varchar(255) NOT NULL,
    `DNS_EXP` varchar(255) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;