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
	profileActivities    VARCHAR(2000)
		UNIQUE (email)
);
CREATE TABLE review (
	reviewId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	Tittle VARCHAR(32) NOT NULL
)