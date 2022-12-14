<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>University</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- bootstrap js  -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<!-- main css -->
	<link rel="stylesheet" href="style.css">
    <style>
       
</style>
</head>

<body>
	<header>
		<div class="main-content">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="logo navbar-brand" href="#"><img src="{{asset('./img/logo.png')}}"
						alt="logo">University</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Historical Outlion</a>
								<a class="dropdown-item" href="#">Vision and Mission</a>
								<a class="dropdown-item" href="#">Authority</a>
								<a class="dropdown-item" href="#">Achievements</a>
								<a class="dropdown-item" href="#">Campus</a>
								<a class="dropdown-item" href="#">Syndicate member</a>
								<a class="dropdown-item" href="#">Finace committee</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academic</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Faculty of Engineering and technology</a>
								<a class="dropdown-item" href="#">Faculty of Arts</a>
								<a class="dropdown-item" href="#">Faculty of Science</a>
								<a class="dropdown-item" href="#">Faculty of law</a>
								<a class="dropdown-item" href="#">Faculty of Business Studies</a>
								<a class="dropdown-item" href="#">Faculty of Social Science</a>
								<a class="dropdown-item" href="#">Faculty of Pharmacy</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrative</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Administrative offices</a>
								<a class="dropdown-item" href="#">Head of departments</a>
								<a class="dropdown-item" href="#">Deans of the faculties</a>
								<a class="dropdown-item" href="#">Faculty of Business Studies</a>
								<a class="dropdown-item" href="#">Chairman of Departments</a>
								<a class="dropdown-item" href="#">University Syndicate</a>
								<a class="dropdown-item" href="#">Section</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admission</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Undergraduate Graduate</a>
								<a class="dropdown-item" href="#">Diploma</a>
								<a class="dropdown-item" href="#">Financial Aid</a>
								<a class="dropdown-item" href="#">Faculty of Arts</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Research</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Administrative offices</a>
								<a class="dropdown-item" href="#">Head of departments</a>
								<a class="dropdown-item" href="#">Deans of the faculties</a>
								<a class="dropdown-item" href="#">Faculty of Business Studies</a>
								<a class="dropdown-item" href="#">Chairman of Departments</a>
								<a class="dropdown-item" href="#">University Syndicate</a>
								<a class="dropdown-item" href="#">Section</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Registration</a>
								<a class="dropdown-item" href="#">Online Service</a>
								<a class="dropdown-item" href="#">Alamni</a>
							</div>
						</li>
					</ul>
					<form action="login/login.php" class="form-inline my-2 my-lg-0">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
					</form>
				</div>
			</nav>
		</div>
	</header>
	<!-- course section -->
	<section class="course" id="course">

		<h1 class="heading">University Management System</h1>
		<div class="box-container">

			<div class="box">
				<img src="{{asset('img/graduation_web.jpg')}}" alt=""/>

				<div class="content">
					
					<a href="#" class="title">University Graduation</a>
					<p>Commencement is a ceremony held once a year that honors students who just have or will soon
						graduate, which means completing all requirements of their degree program</p>
					<div class="info">

					</div>
				</div>
			</div>


			<div class="box">
				<img src="img/photo-1606761568499-6d2451b23c66.jpg" alt="">

				<div class="content">
					<a href="#" class="title">University Classroom</a>
					<p>Classroom climate refers to the prevailing mood, attitudes, standards, and tone that you and
						your students feel when they are in your classroom. A negative classroom climate can feel
						hostile, chaotic, and out of control</p>
					<div class="info">

					</div>
				</div>
			</div>

			<div class="box">
				<img src="img/202108-pcs-library-fl-luckey-1___09153833273.webp" alt="">

				<div class="content">
					 
					<a href="#" class="title">University Library</a>
					<p>An academic library is a library that is attached to a higher education institution and
						serves two complementary purposes: to support the curriculum and the research of the
						university faculty and students..</p>
					<div class="info">

					</div>
				</div>
			</div>
			<div class="box">
				<img src="img/763.jpg" alt="">

				<div class="content">
					
					<a href="#" class="title">University student</a>
					<p>Google's Kotlin for Android training courses can help you advance your skills. Looking to
						gain experience with Android app development? Begin Your Development. Learn Coding In
						Kotlin.</p>
					<div class="info">

					</div>
				</div>
			</div>
			<div class="box">
				<img src="img/images.jpg" alt="">

				<div class="content">
					
					<a href="#" class="title">University Faculty</a>
					<p> A faculty is a division within a university or college comprising one subject area or a
						group of related subject areas, possibly also delimited by level (e.g. undergraduate Learn
						Coding In Kotlin.</p>
					<div class="info">

					</div>
				</div>
			</div>
			<div class="box">
				<img src="img/EYES4818-390x205.jpg" alt="">

				<div class="content">
					
					<a href="#" class="title">University Alumni</a>
					<p>What is meant by alumni in university?
						An alumnus or alumna is a former student or pupil of a university. Commonly, but not always,
						the word refers to a graduate of the educational institution in question</p>
					<div class="info">

					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
	<!-- contact section -->
    <section class="contact pb-5">
        <div class="container">
            <h1 class="heading">Contact Us</h1>
            <form class="row">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Your name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter name">
                </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter number">
                </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                </div>
                <div class="form-group col-6">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-6">
                </div>  
            </form>
        </div>

    </section>
    <!-- footer section -->
    <div class="footer p-4 text-center" >
        <div class="box-container">
            <div class="box">
                <h3>Contact Info</h3>
                <p> <i class="fas fa-map-marker-alt"> </i>Mirpur, Dhaka 1216</p>
                <p>
                    <a href="mailto:19202103311@cse.bubt.edu.bd" target="_blank">university12@gmail.com</a>
                </p>
                <p>
                    <a href="tel:+13115552368" target="_blank">(311) 555-2368</a>
                </p>
            </div>
        </div>
    </div>
    <footer>
        <h1 class="credit text-center">Created by Group-06 Members. All rights Reserved.</h1>
    </footer>
</body>

</html>
