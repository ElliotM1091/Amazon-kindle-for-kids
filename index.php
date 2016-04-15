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
			<ul>
				<li>Use case 1: Kimberly wants to write a review for a product she likes</li>
					<ol>
					<li>Kimberly opens browser on her Laptop and goes to Amazon.com</li>
					<li>the browswer then opens Amazon.com</li>
					<li>Kimberly then logs into her Amazon account</li>
					<li></li>
					</ol>
				<li>Use case 2: User reviews reviews by searching product interested in, finding and reading reviews, then selecting rather they were helpful or not via a thumbs up or down button.  </li>
			</ul>

			<hr/>
		<h2>Entities</h2>
			<h3>profile</h3>
				<ul>
					<li>Name</li>
					<li>Reviews</li>
					<li>helpful votes</li>
			</ul>
		<hr/>
		<h1>Conceptual Model</h1>
			<p><strong>relationships</strong></p>
				<ul>
					<li><em>one</em> <strong>User</strong> can post a<strong>Review</strong> for <em>many</em> products</li>
					<li><em>one</em> <strong>User</strong> can give <strong>star ratings</strong>to <em>many</em>products</li>
					<li><em></em></li>
				</ul>
	</body>
</html>