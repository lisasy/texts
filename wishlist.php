<?php include 'header.php' ?>
<body>     
<?php include 'navbar.php' ?>


<div class="body-content">

<?php include 'profile-snapshot.php' ?>

</div>

<div id="the-body" class="container">
    <div id="profile-body" class="row">
        <?php include 'profile-sidebar.php' ?>
        <section id="profile-content" class="span9">
            <header class="row">
                <div class="span3"><h2>My Wishlist</h2></div>
                <div class="span6">
                    <a class="btn btn-green pull-right">Add books to buy</a>
                </div>
            </header>
            <article class="row">
                <ul>
                    <div class="span2">
                        <li class="book-asset">
                            <a class="close" href="#">&times;</a>
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <em>*Required for EAST 248</em>
                            </div>
                        <!-- trigger modal-->
                        <a class="xbook btn btn-medium btn-green" data-toggle="modal" href="#myModal">Buy
                        </a>
                        <!-- actual modal -->
                        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h3 id="myModalLabel">Buy (insert title dynamically)</h3>
                          </div>
                          <div class="modal-body">


                        <section class="primary-view row">

                            <table class="table span8">
                                <caption>
                                    <h4>Your peers at Wesleyan selling this book:</h4>
                                    <ul class="nav nav-pills">
                                      <li class="active">
                                        <a href="#">Price</a>
                                      </li>
                                      <li><a href="#">Most Mutual Friends</a></li>
                                      <li><a href="#">Condition</a></li>
                                    </ul>
                                </caption>
                                <thead>
                                <tr>
                                  <th>Price</th>
                                  <th>Seller</th>
                                  <th>Condition</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>$13.09</td>
                                    <td><a href="">Peter Frank</a> (144 mutual friends)</td> 
                                    <td>Excellent</td>
                                    <td><button class="btn btn-small btn-primary" data-loading-text="Loading...">Buy</button></td>
                                    
                                </tr>
                                <tr>
                                    <td>$6.00</td>
                                    <td><a href="">Ben Halpern</a> (120 mutual friends)</td> 
                                    <td>Used - Like New</td>
                                    <td><button class="btn btn-small btn-primary" data-toggle="button">Buy</button></td>
                                </tr>
                             </tbody>
                            </table>
                        </section>

                        <section class="secondary-view row">
                                
                            <table class="table span8">
                            <caption>
                                <h4>Other sellers:</h4>
                            </caption>
                            <thead>
                            <tr>
                              <th>Price</th>
                              <th>Seller</th>
                              <th>Affordability</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>$13.09</td>
                                <td><a href="">Amazon (used)</td> 
                                <td>
                                    <div class="progress progress-success">
                                      <div class="bar" style="width: 20%"></div>
                                    </div>
                                </td>
                                <td><button class="btn btn-small btn-primary" data-loading-text="Loading...">Buy</button></td>
                                
                            </tr>
                            <tr>
                                <td>$20.00</td>
                                <td><a href="">Amazon (new)</a></td> 
                                <td>
                                    <div class="progress progress-success">
                                      <div class="bar" style="width: 30%"></div>
                                    </div>
                                </td>
                                <td><button class="btn btn-small btn-primary" data-toggle="button">Buy</button></td>
                            </tr>
                            <tr>
                                <td>$21.09</td>
                                <td><a href="">Chegg (rental)</td> 
                                <td>
                                    <div class="progress progress-success">
                                      <div class="bar" style="width: 40%"></div>
                                    </div>
                                </td>
                                <td><button class="btn btn-small btn-primary" data-loading-text="Loading...">Buy</button></td>
                                
                            </tr>
                            <tr>
                                <td>$21.22</td>
                                <td><a href="">Broad Street (used)</a></td> 
                                <td>
                                    <div class="progress progress-warning">
                                      <div class="bar" style="width: 60%"></div>
                                    </div>
                                 </td>                                        
                                <td><button class="btn btn-small btn-primary" data-toggle="button">Buy</button></td>
                            </tr>
                            <tr>
                                <td>$39.99</td>
                                <td><a href="">Broad Street (new)</a></td> 
                                <td>
                                    <div class="progress progress-danger">
                                    <div class="bar" style="width: 80%"></div>
                                    </div>
                                </td>
                                <td><button class="btn btn-small btn-primary" data-toggle="button">Buy</button></td>
                            </tr>
                         </tbody>
                        </table>

                        </section>



                          </div>

                        </div>

                        <a class="xbook btn btn-medium btn" data-toggle="button">Mark as owned
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