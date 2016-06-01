<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="utf-8"/>
		<title> data design for Amazon review</title>
	</head>
	<body>
		<h2>Persona</h2>
		<img src="images/imgres.jpg" alt="pic of a mom" border="2px"/>
			<p> <strong>Personal</strong></p>
				<ul>
					<li>name: Kimberly Bacon</li>
					<li>Age: 35 years old</li>
					<li>Gender: Female</li>
					<li>highest level of education: Highschool deploma</li>
					<li>tech savvy</li>
					<li>blogger</li>
					<li>loves writing reviews</li>
					<li>loves fitness (mainly yoga)</li>
				</ul>
			<p> <strong> Professional life</strong></p>
				<ul>
					<li>profession:stay at home mom</li>
					<li>why will user come to site: to write a review for product</li>
					<li>when will user access site: after a purchase to list review</li>
				</ul>
			<p> <strong>Technical</strong></p>
				<ul>
					<li>Tech devices used: Tablet, cellphone, Laptop</li>
					<li>time spent browsing web: a lot more than 8 hours a day</li>
					<li>Softwares & apps used: <strong>WINDOWS</strong>, Android, Google Maps, Etsy </li>
				</ul>
			<p><strong>Motivations</strong></p>
				<ul>
					<li>Child needs and happiness, wanting child to be smart </li>
					<li>Looking for: Tech and ways to make things faster and easier for busy mom</li>
				</ul>
				<hr/>
		<h2>Use Casees</h2>
				<p>Use case 1: Kimberly wants to write a review for a product she likes</p>
					<ol>
						<li>Kimberly opens browser on her Laptop and goes to Amazon.com</li>
						<li>the browswer then opens Amazon.com</li>
						<li>Kimberly then logs into her Amazon account.</li>
						<li>Amazon.com loads Kimberly's home page, showing her her recent products.</li>
						<li>Kimberly then selects product she wishes to submit a review.</li>
						<li>Amazon.com loads a black review for her choosen product.</li>
						<li>Kimberly then writes her review and selects a rating of 1-5 and clicks submit.</li>
						<li>Amazon then posts the review for all to see.</li>
					</ol>

			<hr/>
		<h1>Entities</h1>
			<h2>profile</h2>
				<ul>
					<li>Name</li>
					<li>profileId</li>
					<li>e-mail(PK)</li>
					<li>helpful votes</li>
					<li>profile picture</li>
					<li>following</li>
					<li>Activities</li>
			</ul>
			<h2>Review</h2>
				<ul>
					<li>ReviewId(PK)</li>
					<li>review content</li>
					<li>Title</li>
					<li>Date</li>
					<li>item description</li>
					<li>useful or not field</li>
				</ul>
			<h2>Star ratings</h2>
				<ul>
					<li>avera</li>
					<li>e-mail(FK)</li>
					<li>ReviewId(FK)</li>
				</ul>

		<hr/>
		<h2>
			Model</h2>
			<p><strong>relationships</strong></p>
				<ul>
					<li><em>one</em> <strong>profileId</strong> can <strong>Review</strong> <em>many</em> products</li>
					<li><em>many</em> <strong>profileIds</strong> can give <strong>star ratings</strong> to <em>many</em>Reviews</li>
					<li><em>many</em> <stront>Reviews</stront> can have <em>many</em> <stront>star ratings</stront></li>
					<li><em></em></li>
				</ul>
	</body>
</html>