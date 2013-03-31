<?php include 'header.php' ?>
  <body>     
    <?php include 'navbar.php' ?>
    <div id="body-content" class="container">

        <header>
            <div class="row">
                <span class="span2">
                    <img src="img/bookstore.png">
                </span>
                <span class="span10">
                    <h1>Find Books and Courses</h1>
                <p class="muted">All of your books and the books you want, on one campus, in one place.</p>
                <p class="lead">To get started, find books using the search box below, whether these are books you want to buy, sell, or both!</p>
                </span>
            </div>
        </header>
        
        <section class="box">
        <div class="row">

            <section class="span5 selection">
                <div class="find-nav tabbable"> <!-- Only required for left/right tabs -->
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Search by Course</a></li>
                    <li><a href="#tab2" data-toggle="tab">Search by Book</a></li>
                  </ul>
                  <div class="tab-content">

                    <div class="tab-pane active" id="tab1">
                    	<li class="nav-header">Pick your department</li>

						<section class="department-box" class="span5">
							<div class="scrollbox">
								<ul class="nav nav-list">
									<li><a href="">Arabic</a></li>
									<li><a href="">Art History</a></li>
									<li><a href="">American Studies</a></li>
									<li><a href="">College of Social Studies</a></li>
									<li><a href="">Economics</a></li>
									<li><a href="">Arabic</a></li>
									<li><a href="">Art History</a></li>
									<li><a href="">American Studies</a></li>
									<li><a href="">College of Social Studies</a></li>
									<li><a href="">Economics</a></li>
									<li><a href="">Arabic</a></li>
									<li><a href="">Art History</a></li>
									<li><a href="">American Studies</a></li>
									<li><a href="">College of Social Studies</a></li>
									<li><a href="">Economics</a></li>
								</ul>
							</div>						
						</section>

					<section class="select-box">
						<li class="nav-header">Pick your courses</li>
						<div class="scrollbox">
							<ul class="nav nav-list course-listing">
								<li class="back"><a href=""><i class="icon-chevron-left"></i> Back</a></li>
								<li><a href="">AMST 105 <i class="icon-chevron-right pull-right"></i></a></li>
								<li><a href="">AMST 225 <i class="icon-chevron-right pull-right"></i></a></li>
								<li><a href="">AMST 285 <i class="icon-chevron-right pull-right"></i></a></li>
								<li><a href="">AMST 295 <i class="icon-chevron-right pull-right"></i></a></li>
								<li><a href="">AMST 305 <i class="icon-chevron-right pull-right"></i></a></li>
								<li><a href="">AMST 385 <i class="icon-chevron-right pull-right"></i></a></li>
							</ul>
						
						
							<ul class="nav nav-list book-listing">
								<li class="list-book-asset row">
									<a href="">
										<div class="book-asset-block">
											<div class="book-thumb span1"><img src="img/mc-example.jpg"></div>
											<div class="book-description pull-right span3">
												<h5>Modern China: A Very Short Introduction</h5>
												<p>Rana Mitter</p>
												<em>*Required for EAST 248</em>
												<a href="" class="add-asset"><i class="icon-plus-sign pull-right"></i></a>
											</div>
										</div>
									</a>
								</li>
								<li class="list-book-asset row">
									<a href="">
										<div class="book-asset-block">
											<div class="book-thumb span1"><img src="img/foucault-example.jpg"></div>
											<div class="book-description pull-right span3">
												<h5>The History of Sexuality, Vol. 1: An Introduction</h5>
												<p>Rana Mitter</p>
												<em>*Required for EAST 248</em>
												<a href="" class="add-asset"><i class="icon-plus pull-right"></i></a>
											</div>
										</div>
									</a>
								</li>
								<li class="list-book-asset row">
									<a href="">
										<div class="book-asset-block">
											<div class="book-thumb span1"><img src="img/wild.jpg"></div>
											<div class="book-description pull-right span3">
												<h5>Wild: From Lost to Found on the Pacific Crest Trail</h5>
												<p>Cheryl Strayed</p>
												<a href="" class="add-asset"><i class="icon-plus pull-right"></i></a>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</section>
                    </div>

                    <div class="tab-pane" id="tab2">
						<div class="span4">
							<form class="form-search">
							  <div class="input-append">
							    <input type="text" class="input-xlarge search-query" placeholder="Enter title, ISBN, etc...">
							    <button type="submit" class="btn">Search</button>
							  </div>
							</form>
						</div>
                    </div>

                  </div>
                </div>
            </section>

            <section class="span5 offset1 added">
				<div class="added-asset">
					<h3>Added 2 Books:</h3>
					<ul>
						<li class="row selected-book-asset well">
							<button class="close">&times;</button>
							<div class="span1"><img src="img/mc-example.jpg"></div>
							<div class="span3">
								<h5>Modern China: A Very Short Introduction</h5>
								<p>Rana Mitter</p>
								<p>Oxford University Press (2008)</p>
								<em>*Required for EAST 248</em>
							</div>
						</li>
						<li class="row selected-book-asset well">
							<button class="close">&times;</button>
							<div class="span1"><img src="img/foucault-example.jpg"></div>
							<div class="span3">
								<h5>The History of Sexuality, Vol. 1: An Introduction </h5>
								<p>Michel Foucault</p>
								<p>Vintage; Fifth or Later Edition edition (1990)</p>
								<em>*Required for COL 308</em>
							</div>
						</li>
					</ul>
					<a href="library.php"><button class="btn btn-success btn-large pull-right">Continue <i class="icon-chevron-right icon-white"></i></button></a>
				</div>
            </section>


        </div>
    </section>
    </div>
<?php include 'footer.php' ?>    
<?php include 'javascript.php' ?>
    
  </body>
</html>