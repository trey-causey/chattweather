
--
-- Table structure for table `5kAdv`
--

DROP TABLE IF EXISTS `5kAdv`;
CREATE TABLE `5kAdv` (
  `WeekNum` int(10) unsigned NOT NULL auto_increment,
  `Monday` varchar(32) unsigned NOT NULL,
  `Tuesday` varchar(32) unsigned NOT NULL,
  `Wednesday` varchar(32) unsigned NOT NULL,
  `Thursday` varchar(32) unsigned NOT NULL,
  `Friday` varchar(32) unsigned NOT NULL,
  `Saturday` varchar(32) unsigned NOT NULL,
  `Sunday` varchar(32) unsigned NOT NULL,
  PRIMARY KEY  (`Weeknum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO '5kAdv'
VALUES
('1','3 mi run','5 x 400','Rest or easy run','30 min tempo','Rest','4 mi fast','60 min run'),
('2','3 mi run','8 x 200','Rest or easy run','30 min tempo','Rest','4 mi fast','65 min run'),
('3','3 mi run','6 x 400','Rest or easy run','35 min tempo','Rest','5 mi fast','70 min run'),
('4','3 mi run','9 x 200','Rest or easy run','35 min tempo','Rest or easy run','Rest','5K Test'),
('5','3 mi run','7 x 400','Rest or easy run','40 min tempo','Rest','5 mi fast','75 min run'),
('6','3 mi run','10 x 200','Rest or easy run','40 min tempo','Rest','6 mi fast','85 min run'),
('7','3 mi run','8 x 400','Rest or easy run','45 min tempo','Rest','6 mi fast','90 min run'),
('8','2 mi run','6 x 200','30 min tempo','Rest or easy run','Rest','Rest','5K Race');

