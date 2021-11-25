CREATE TABLE php_member (
    memNo INT AUTO_INCREMENT,
    memId VARCHAR(30) NOT NULL,
    memPw VARCHAR(65) NOT NULL,
    memNm VARCHAR(30) NOT NULL,
    cellPhone VARCHAR(11),
	regDt DATETIME DEFAULT NOW(),
    UNIQUE(memId),
    PRIMARY KEY(memNo)
 );