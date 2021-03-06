
CREATE TABLE `avatars` (
  `avatar-id` varchar(32) NOT NULL DEFAULT '',
  `source` enum('gravatar','upload','unknown') NOT NULL DEFAULT 'unknown',
  `instances` int(18) NOT NULL DEFAULT '0',
  `original-path` varchar(150) DEFAULT '',
  `original-image` varchar(150) DEFAULT '',
  `original-width` int(5) DEFAULT '0',
  `original-height` int(5) DEFAULT '0',
  `original-format` enum('jpg','gif','png') DEFAULT 'jpg',
  `small-path` varchar(150) DEFAULT '',
  `small-image` varchar(150) DEFAULT '',
  `small-width` int(5) DEFAULT '0',
  `small-height` int(5) DEFAULT '0',
  `small-format` enum('jpg','gif','png') DEFAULT 'jpg',
  `medium-path` varchar(150) DEFAULT '',
  `medium-image` varchar(150) DEFAULT '',
  `medium-width` int(5) DEFAULT '0',
  `medium-height` int(5) DEFAULT '0',
  `medium-format` enum('jpg','gif','png') DEFAULT 'jpg',
  `large-path` varchar(150) DEFAULT '',
  `large-image` varchar(150) DEFAULT '',
  `large-width` int(5) DEFAULT '0',
  `large-height` int(5) DEFAULT '0',
  `large-format` enum('jpg','gif','png') DEFAULT 'jpg',
  `created` int(12) DEFAULT '0',
  `edited` int(12) DEFAULT '0',
  `offlined` int(12) DEFAULT '0',
  PRIMARY KEY (`avatar-id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
