<?php include 'header.php' ?>
<body>     
<?php include 'navbar-unlogged.php' ?>


<div class="body-content">

<div class="container">
  <div class="row">
	<nav id="info" class="span3">
	    <ul class="nav nav-list">
	      <li class="nav-header">Texts.com</li>
	      <li><a href="info-about.php">About Us</a></li>
	      <li class="active"><a href="info-features.php">Features</a></li>
	      <li><a href="info-faqs.php">FAQs</a></li>
	      <li><a href="info-market.php">The Market</a></li>
	      <li><a href="info-contact.php">Contact</a></li>
	    </ul>
	</nav>
	<section id="feature-page" class="span8 offset1">
	<h1>Features</h1>
  <?php include 'features.php' ?>
		
	</section>
</div>
</div>

</div>

<?php include 'footer.php' ?>
<?php include 'javascript.php' ?>

</body>
</html>