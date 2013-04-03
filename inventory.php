<?php include 'header.php' ?>
<body>     
<?php include 'navbar.php' ?>


<div class="body-content">

<?php include 'profile-snapshot.php' ?>

</div>

<div class="container">
    <div id="profile-body" class="row">
        <nav id="profile-sidebar" class="span3">
            <ul class="nav nav-list">
              <li class="nav-header">My Profile</li>
              <li><a href="library.php">Activity</a></li>
              <li class="active"><a href="inventory.php">My Inventory</a></li>
              <li><a href="wishlist.php">My Wishlist</a></li>
            </ul>
            <ul class="nav nav-list">
              <li class="nav-header">Other</li>
              <li><a href="settings.php">Settings</a></li>
              <li><a href="help.php">Help</a></li>
              <li><a href="#">Sign Out</a></li>
            </ul>
            
        </nav>
        <section id="profile-content" class="span9">
            <header class="row">
                <div class="span3">
                    <h2>My Inventory</h2>
                </div>
                <div class="span6">
                    <a class="btn btn-green">Add books to sell</a>
                    <ul class="nav nav-pills pull-right">
                      <li class="active">
                        <a href="#">View All</a>
                      </li>
                      <li><a href="#">View Listed Books</a></li>
                      <li><a href="#">View Unlisted Books</a></li>
                    </ul>
                </div>
            </header>
            <article class="row">
                <ul>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>*Required for EAST 248</em>
                            </div>
                        <a class="xbook btn btn-medium btn-green" rel="popover" data-trigger="click" data-placement="left" data-title="Unlist Book" data-content='
<div class="control-group popover-confirm">
<h4>Are you sure?</h4>
<div class="controls">
<button type="submit" class="btn btn-danger popover-button">Confirm Unlisting</button> 
<p><a class="unlist" href="">or cancel.</a></p>
</div>
</div>' data-html="true">Listed!
                            </a>
                        </li>
                    </div>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>*Required for EAST 248</em>
                            </div>
                        <a class="xbook btn btn-medium btn-green" rel="popover" data-trigger="click" data-placement="left" data-title="Unlist Book" data-content='
<div class="control-group popover-confirm">
<h4>Are you sure?</h4>
<div class="controls">
<button type="submit" class="btn btn-danger popover-button">Confirm Unlisting</button> 
<p><a class="unlist" href="">or cancel.</a></p>
</div>
</div>' data-html="true">Listed!
                            </a>
                        </li>
                    </div>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>*Required for EAST 248</em>
                            </div>
                        <a class="xbook btn btn-medium btn-green" rel="popover" data-trigger="click" data-placement="left" data-title="Unlist Book" data-content='
<div class="control-group popover-confirm">
<h4>Are you sure?</h4>
<div class="controls">
<button type="submit" class="btn btn-danger popover-button">Confirm Unlisting</button> 
<p><a class="unlist" href="">or cancel.</a></p>
</div>
</div>' data-html="true">Listed!
                            </a>
                        </li>
                    </div>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/wild.jpg"></div>
                            <div class="book-description">
                                <h5>Wild: From Lost to Found on the Pacific Crest Trail</h5>
                                <p>Cheryl Strayed</p>
                                <p><small>Vintage (2013)</small></p>
                            </div>
                        <a class="xbook btn btn-medium" rel="popover" data-trigger="click" data-placement="left" data-title="List Book" data-content='<form class="form">
<div class="control-group">
<label class="control-label" for="inputEmail">Describe the condition.</label>
<div class="controls">
<select>
  <option>New</option>
  <option>Used - Like New</option>
  <option>Used - Very Good</option>
  <option>Used - Acceptable</option>
  <option>Used </option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="inputPassword">List your price</label>
<div class="controls">
<input type="password" id="inputPassword" placeholder="$00.00">
</div>
</div>
<div class="control-group popover-confirm">
<div class="controls">
<button type="submit" class="btn btn-green popover-button">Confirm Listing</button> 
<p><a href="">or cancel.</a></p>
</div>
</div>
</form>' data-html="true">Unlisted
                            </a>
                        </li>
                    </div>
                </ul>
            </article>
            <article class="row">
                <ul>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>*Required for EAST 248</em>
                            </div>
                        <a class="xbook btn btn-medium btn-green" rel="popover" data-trigger="click" data-placement="left" data-title="Unlist Book" data-content='
<div class="control-group popover-confirm">
<h4>Are you sure?</h4>
<div class="controls">
<button type="submit" class="btn btn-danger popover-button">Confirm Unlisting</button> 
<p><a class="unlist" href="">or cancel.</a></p>
</div>
</div>' data-html="true">Listed!
                            </a>
                        </li>
                    </div>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>*Required for EAST 248</em>
                            </div>
                        <a class="xbook btn btn-medium btn-green" rel="popover" data-trigger="click" data-placement="left" data-title="Unlist Book" data-content='
<div class="control-group popover-confirm">
<h4>Are you sure?</h4>
<div class="controls">
<button type="submit" class="btn btn-danger popover-button">Confirm Unlisting</button> 
<p><a class="unlist" href="">or cancel.</a></p>
</div>
</div>' data-html="true">Listed!
                            </a>
                        </li>
                    </div>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>*Required for EAST 248</em>
                            </div>
                        <a class="xbook btn btn-medium btn-green" rel="popover" data-trigger="click" data-placement="left" data-title="Unlist Book" data-content='
<div class="control-group popover-confirm">
<h4>Are you sure?</h4>
<div class="controls">
<button type="submit" class="btn btn-danger popover-button">Confirm Unlisting</button> 
<p><a class="unlist" href="">or cancel.</a></p>
</div>
</div>' data-html="true">Listed!
                            </a>
                        </li>
                    </div>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/wild.jpg"></div>
                            <div class="book-description">
                                <h5>Wild: From Lost to Found on the Pacific Crest Trail</h5>
                                <p>Cheryl Strayed</p>
                                <p><small>Vintage (2013)</small></p>
                            </div>
                        <a class="xbook btn btn-medium" rel="popover" data-trigger="click" data-placement="left" data-title="List Book" data-content='<form class="form">
<div class="control-group">
<label class="control-label" for="inputEmail">Describe the condition.</label>
<div class="controls">
<input type="text" id="inputEmail" placeholder="Excellent, Good, Bad...">
</div>
</div>
<div class="control-group">
<label class="control-label" for="inputPassword">List your price</label>
<div class="controls">
<input type="password" id="inputPassword" placeholder="$00.00">
</div>
</div>
<div class="control-group popover-confirm">
<div class="controls">
<button type="submit" class="btn btn-green popover-button">Confirm Listing</button> 
<p><a href="">or cancel.</a></p>
</div>
</div>
</form>' data-html="true">Unlisted
                            </a>
                        </li>
                    </div>
                </ul>
            </article>
            <article class="row">
                <ul>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>*Required for EAST 248</em>
                            </div>
                        <a class="xbook btn btn-medium btn-green" rel="popover" data-trigger="click" data-placement="left" data-title="Unlist Book" data-content='
<div class="control-group popover-confirm">
<h4>Are you sure?</h4>
<div class="controls">
<button type="submit" class="btn btn-danger popover-button">Confirm Unlisting</button> 
<p><a class="unlist" href="">or cancel.</a></p>
</div>
</div>' data-html="true">Listed!
                            </a>
                        </li>
                    </div>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>*Required for EAST 248</em>
                            </div>
                        <a class="xbook btn btn-medium btn-green" rel="popover" data-trigger="click" data-placement="left" data-title="Unlist Book" data-content='
<div class="control-group popover-confirm">
<h4>Are you sure?</h4>
<div class="controls">
<button type="submit" class="btn btn-danger popover-button">Confirm Unlisting</button> 
<p><a class="unlist" href="">or cancel.</a></p>
</div>
</div>' data-html="true">Listed!
                            </a>
                        </li>
                    </div>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>*Required for EAST 248</em>
                            </div>
                        <a class="xbook btn btn-medium btn-green" rel="popover" data-trigger="click" data-placement="left" data-title="Unlist Book" data-content='
<div class="control-group popover-confirm">
<h4>Are you sure?</h4>
<div class="controls">
<button type="submit" class="btn btn-danger popover-button">Confirm Unlisting</button> 
<p><a class="unlist" href="">or cancel.</a></p>
</div>
</div>' data-html="true">Listed!
                            </a>
                        </li>
                    </div>
                    <div class="span2">
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/wild.jpg"></div>
                            <div class="book-description">
                                <h5>Wild: From Lost to Found on the Pacific Crest Trail</h5>
                                <p>Cheryl Strayed</p>
                                <p><small>Vintage (2013)</small></p>
                            </div>
                        <a class="xbook btn btn-medium" rel="popover" data-trigger="click" data-placement="left" data-title="List Book" data-content='<form class="form">
<div class="control-group">
<label class="control-label" for="inputEmail">Describe the condition.</label>
<div class="controls">
<input type="text" id="inputEmail" placeholder="Excellent, Good, Bad...">
</div>
</div>
<div class="control-group">
<label class="control-label" for="inputPassword">List your price</label>
<div class="controls">
<input type="password" id="inputPassword" placeholder="$00.00">
</div>
</div>
<div class="control-group popover-confirm">
<div class="controls">
<button type="submit" class="btn btn-green popover-button">Confirm Listing</button> 
<p><a href="">or cancel.</a></p>
</div>
</div>
</form>' data-html="true">Unlisted
                            </a>
                        </li>
                    </div>
                </ul>
            </article>
        </section>
    </div>
</div>

</div>

<?php include 'footer.php' ?>
<?php include 'javascript.php' ?>

</body>

</body>
</html>