<?php include 'header.php' ?>
<body>     
<?php include 'navbar.php' ?>

<div class="body-content pull-up">

	<div class="container">
		<header class="row">
			<div class="span12">
				<h1>Find your books and courses.</h1>
				<p class="muted">All of your books and the books you want, on one campus, in one place.</p>
				<p class="lead">To get started, find books using the search box below, whether these are books you want to buy, sell, or both!</p>
			</div>
		</header>
	</div>

	<div class="container">
		<div class="row">
			<section class="span4">
				<h3>1. Search for courses and books</h3>

                <div class="find-nav tabbable"> <!-- Only required for left/right tabs -->
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Search by Course</a></li>
                    <li><a href="#tab2" data-toggle="tab">Search by Book</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab1">

                    	<!-- PICK THE DEPARTMENT -->
						<section class="department-box">
							<li class="nav-header">Pick your department</li>
							<div class="scrollbox">
								<ul class="nav nav-list">
									<li><a href="">Arabic <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">Art History <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">American Studies <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">College of Social Studies <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">Economics <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">Arabic <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">Art History <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">American Studies <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">Arabic <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">Art History <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">American Studies <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">College of Social Studies <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">Economics <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">Arabic <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">Art History <i class="icon-chevron-right pull-right"></i></a></li>
									<li><a href="">American Studies <i class="icon-chevron-right pull-right"></i></a></li>

								</ul>
							</div>	
	
							<!-- PICK THE COURSE -->
							<section class="course-box">
								<li class="nav-header">Pick your courses</li>
								<div class="scrollbox">	
									<ul class="nav nav-list course-listing">
										<li class="back"><a href=""><i class="icon-chevron-left"></i> Back to Departments</a></li>
										<li><a href="">AMST 105 <i class="icon-chevron-right pull-right"></i></a></li>
										<li><a href="">AMST 225 <i class="icon-chevron-right pull-right"></i></a></li>
										<li><a href="">AMST 285 <i class="icon-chevron-right pull-right"></i></a></li>
										<li><a href="">AMST 295 <i class="icon-chevron-right pull-right"></i></a></li>
										<li><a href="">AMST 305 <i class="icon-chevron-right pull-right"></i></a></li>
										<li><a href="">AMST 385 <i class="icon-chevron-right pull-right"></i></a></li>
										<li><a href="">AMST 105 <i class="icon-chevron-right pull-right"></i></a></li>
										<li><a href="">AMST 225 <i class="icon-chevron-right pull-right"></i></a></li>
										<li><a href="">AMST 285 <i class="icon-chevron-right pull-right"></i></a></li>
										<li><a href="">AMST 295 <i class="icon-chevron-right pull-right"></i></a></li>
										<li><a href="">AMST 305 <i class="icon-chevron-right pull-right"></i></a></li>
										<li><a href="">AMST 385 <i class="icon-chevron-right pull-right"></i></a></li>

									</ul>	
								</div>	
							</section>			

						</section>
                    </div>

                    <div class="tab-pane" id="tab2">
							<form class="find-books-form form-search">
							  <div class="input-append">
							    <input type="text" class="input-large search-query" placeholder="Enter title, ISBN, etc...">
							    <button type="submit" class="btn">Search</button>
							  </div>
							</form>
                    </div>

                  </div>
                </div>
			</section>

			<section class="span4">
					<h3>2. Select your books</h3>
					<section class="select-box">
					<ul class="nav nav-list book-listing">
                        <li class="book-asset-hor">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>Required for EAST 248</em>
                            </div>
                            <div class="icon">
                            	<i class="icon-plus-sign"></i>
                            	<p><small>Add</small></p>
                            </div>
                        </li>
                        <li class="book-asset-hor">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                            </div>
                            <div class="icon">
                            	<i class="icon-plus-sign"></i>
                            	<p><small>Add</small></p>
                            </div>
                        </li>
					</ul>
					</section>
			</section>

			<section class="span4">
				<h3>3. Your (3) books are added!</h3>
				<section class="added-asset">
					<ul class="nav nav-list book-listing">
                        <li class="book-asset-hor">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>Required for EAST 248</em>
                            </div>
                            <div class="icon">
                            	<i class="icon-minus-sign"></i>
                            	<small>Remove</small>
                            </div>
                        </li>
                        <li class="book-asset-hor">
                            <div class="book-thumb"><img src="img/wild.jpg"></div>
                            <div class="book-description">
                                <h5>Wild</h5>
                                <p>Cheryl Strayed</p>
                                <p><small>Vintage Press (2013)</small></p>
                            </div>
                            <div class="icon">
                            	<i class="icon-minus-sign"></i>
                            	<small>Remove</small>
                            </div>
                        </li>
					</ul>
				</section>
				<a class="btn btn-large pull-right" href="library.php">Continue <i class="icon-chevron-right"></i></a>
			</section>
		</div>
	</div>
</div>

<?php include 'footer.php' ?>
<?php include 'javascript.php' ?>

</body>

</html>