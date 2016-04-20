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
	 * Name for this profile
	 * @var string $name
	 **/
	private $activities;
	/**
	 * email for user
	 * 
	 **/
}
?>