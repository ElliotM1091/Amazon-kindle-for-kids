DROP TABLE IF EXISTS rating;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS profile;

CREATE TABLE profile (
	profileId            INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileName          VARCHAR(32)                 NOT NULL,
	profileEmail         VARCHAR(128)                NOT NULL,
	profileAvatar        VARCHAR(32),
	profileFollow        VARCHAR(32),
	profileHelpfullVotes INT UNSIGNED,
	profileActivities    VARCHAR(2000),
	UNIQUE(email),
	PRIMARY KEY(profileId)
);
CREATE TABLE review (
	reviewId        INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileId       INT UNSIGNED                NOT NULL,
	tittle          VARCHAR(32)                 NOT NULL,
	reviewDate      DATETIME                    NOT NULL,
	itemDiscription VARCHAR(128),
	reveiwContent   VARCHAR(2000),
	usefulOrNot     INT UNSIGNED,
	INDEX(profileId),
	FOREIGN KEY (profileId) REFERENCES profile (profileId),
	PRIMARY KEY (reviewId)
);
CREATE TABLE rating  (
	profileId INT UNSIGNED NOT NULL,
	reviewId INT UNSIGNED NOT NULL,
	rating INT UNSIGNED NOT NULL,
	INDEX(profileId),
	INDEX(reviewId),
	FOREIGN KEY (profileId),
	FOREIGN KEY (reviewId),
	PRIMARY KEY (profileId, reviewId)
);