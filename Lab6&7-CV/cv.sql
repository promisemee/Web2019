CREATE TABLE tbleducation(
	eduID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	eduSchool VARCHAR(50) NOT NULL,
	eduDegree VARCHAR(50) NOT NULL DEFAULT 'Not Relevant',
	eduGrade VARCHAR(50) NOT NULL DEFAULT 'Not Relevant',
	eduStartYear INT(4) NOT NULL,
	eduEndYear INT(4) NOT NULL,
	eduDateAdded TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	eduDateUpdated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
	) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO tbleducation(eduSchool, eduDegree, eduGrade, eduStartYear, eduEndYear) VALUES("TU Dublin","Bachelor of Computer Science","Year 3",2019, 2020);
INSERT INTO tbleducation(eduSchool, eduDegree, eduGrade, eduStartYear, eduEndYear) VALUES("HYU","Bachelor of Computer Science","Year 3",2017, 2021);