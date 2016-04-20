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
	 * @param int new value of profile id
	 * @throws UnexpectedValueException if $newProfileId is not an interger
	 **/
	public function setProfileId($newProfileID) {
		$newProfileId = filter var(newProfileId)

	}
}
?>