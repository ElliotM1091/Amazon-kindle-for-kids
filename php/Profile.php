<?php
namespace Edu\Cnm\emurrey\Datadesign;

/**
 * Typical Profile for doing an Amazon review
 *
 * This profile is a short example of data that is needed to review an Amazon product.
 * This can also include email, names, activities, and more.
 *
 * @author Elliot Murrey <emurrey@cnm.edu?
 **/
class Profile implements \JsonSerializeable {
	/**
	 * id for this Profile; this is the primary key
	 * @var int $profileId
	 **/
	private $profileId;
	/**
	 * id for the Review written by Profile; this is a foreign key
	 * @var int $reviewId
	 **/
	private $reviewId;
	/**
	 * the activities for this profile
	 * @var string $activities
	 **/
	private $activities;
	/**
	 * email for user
	 * @var string $email
	 **/
	private $email;
	/**
	 * people this profile is following
	 * @var int $following ;
	 **/
	private $following;
	/**
	 * a counter of helpful votes this profile has
	 * @var int $helpfulVotes
	 **/
	private $helpfulVotes;
	/**
	 * name for this profile
	 * @var string $name
	 **/
	private $name;
	/**
	 * avatar for profile
	 * @var string $avatar
	 **/
	private $avatar;

	/**
	 * accessor method for profile id
	 *
	 * $return int value profileId
	 **/
	public function getprofileId() {
		return($this ->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int $newProfileId new value of profile id
	 * @throws \UnexpectedValueException if $newProfileId is not an interger
	 **/
	public function setProfileId($newProfileID) {
		//verify the profile id is valid
		$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
		if($newProfileId === false) {
			throw(new \UnexpectedValueException("profile id is not a valid integer"));
		}
		//convert and store the profile id
		$this->profileId = intval($newProfileId);
	}
	/**
	 * accessor method for activities
	 *
	 * @return string value of activities
	 **/
	public function getActivities() {
		return($this->activities);
	}
	/**
	 * mutator method for activities
	 *
	 * @param string $newActivities new value of activities
	 * @throws \InvalidArgumentException if $newactivities is not a string
	 * @throws \TypeError if $newActivities is not a string
	 **/
	public function setActivities(string $newactivities) {
		//verify the activities content is secure
		$newActivities = trim($newActivities);
		$newActivities = filter_var($newActivities, FILTER_SANITIZE_STRING);
		//store the activities content
		$this->activities = $newActivities;
	}
	/**
	 * accessor method for email
	 *
	 * @return string value of email
	 **/
	public function getemail() {
		return($this->email);
	}
	/**
	 * mutator method for email
	 * @param sting $newEmail new
	 * @thows \UnexpectedValueException if $newEmail is not valid
	 **/
	public function setEmail($newEmail) {
		// verify that the email is valid
		$newEmail = filter_var($newEmail, FILTER_SANITIZE_STRING);
		if($newEmail ===false) {
			throw(new \UnexpectedValueException("Email is not valid"));
		}
		//store the emial
		$this->email = $newEmail;
	}
	/**
	 * accessor method following
	 * @return 
	 **/
}
?>