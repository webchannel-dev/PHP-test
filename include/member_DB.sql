
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;