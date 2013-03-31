<?php include 'header.php' ?>
<body>     
<?php include 'navbar.php' ?>


<div class="body-content pull-up">

<div class="container">
    <div class="row">
        <section class="span8">
            <header class="row">
                <div class="span1">    
                    <img src="img/lisa.jpg">
                </div>
                <div class="span7">
                    <h6>You want to buy from</h6>
                    <h1>Lisa Sy</h1>
                </div>
            </header>
            <article id="message-input" class="row">
                <div class="span6 offset1">
                    <textarea placeholder="Send a message"></textarea>
                </div>
                <div class="span3 offset5">
                    <button type="submit" class="btn-tan btn center">Send message</button>
                </div>
            </article>
            <article id="message-chat"class="row">
                <div class="span8">
                    <section class="message-box">
                        `<ul>
                        <li class="user-me row">
                            <div class="chat-user span1">
                                <img src="img/lisa.jpg">
                                <h5>You</h5>
                                <small>9:47pm</small>
                            </div>
                            <div class="span6">
                                <p>Yeah, I think that is a good place for us to meet up.</p>
                            </div>
                        </li>
                        <li class="user-other row">
                            <div class="span4">
                                <p>Why don't we meet up in Usdan?</p>
                            </div>
                            <div class="chat-user span1">
                                <img src="img/lisa.jpg">
                                <h5>Ben</h5>
                                <small>12:00pm</small>
                            </div>
                        </li>
                        <li class="user-me row">
                            <div class="chat-user span1">
                                <img src="img/lisa.jpg">
                                <h5>You</h5>
                                <small>9:47pm</small>
                            </div>
                            <div class="span4">
                                <p>Yeah, I think that is a good place for us to meet up.</p>
                            </div>
                        </li>
                        <li class="user-other row">
                            <div class="span4">
                                <p>Why don't we meet up in Usdan?</p>
                            </div>
                            <div class="chat-user span1">
                                <img src="img/lisa.jpg">
                                <h5>Ben</h5>
                                <small>12:00pm</small>
                            </div>
                        </li>
                        <li class="user-me row">
                            <div class="chat-user span1">
                                <img src="img/lisa.jpg">
                                <h5>You</h5>
                                <small>9:47pm</small>
                            </div>
                            <div class="span4">
                                <p>Yeah, I think that is a good place for us to meet up.</p>
                            </div>
                        </li>
                        <li class="user-other row">
                            <div class="span4">
                                <p>Why don't we meet up in Usdan?</p>
                            </div>
                            <div class="chat-user span1">
                                <img src="img/lisa.jpg">
                                <h5>Ben</h5>
                                <small>12:00pm</small>
                            </div>
                        </li>
                        </ul>
                    </section>
                </div>
            </article>
        </section>

        <aside id="transaction-sidebar" class="span4">
            <article class="book-list">
                <h3>Selected Books</h3>
                <div class="box">
                    <ul>
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <strong>$9.48</strong>
                            </div>
                        </li>
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/wild.jpg"></div>
                            <div class="book-description">
                                <h5>Wild: From Lost to Found on the Pacific Crest Trail</h5>
                                <p>Cheryl Strayed</p>
                                <strong>$9.48</strong>
                            </div>
                        </li>
                        <li class="book-asset">
                            <div class="book-thumb"><img src="img/mc-example.jpg"></div>
                            <div class="book-description">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p><small>Oxford University Press (2008)</small></p>
                                <strong>$9.48</strong>
                            </div>
                        </li>
                    </ul>
                </div>
                <a class="xbook btn btn-medium add-more-books" data-toggle="modal" href="#myModal">Add more books!</a>
                <!-- actual modal -->
                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 id="myModalLabel">(Seller) is also selling the following:</h3>
                  </div>
                  <div class="modal-body">


                    <table class="table span8">
                    <thead>
                    <tr>
                      <th>Book</th>                                        
                      <th>Information</th>
                      <th>Price</th>
                      <th>Scale</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img src="img/wild.jpg" class="table-img"></td>
                        <td>
                            <strong>Wild: From Lost to Found on the Pacific Crest Trail</strong><br>
                            Cheryl Strayed<br>
                            Vintage
                        </td>
                        <td>$13.09</td>
                        <td><button class="btn btn-small btn-primary" data-loading-text="Loading...">Add to buy</button></td>
                        
                    </tr>
                    <tr>
                        <td><img src="img/mc-example.jpg" class="table-img"></td>
                        <td>
                            <strong>Modern China: A Very Short Introduction</strong><br>
                            Rana Mitter<br>
                            Oxford University Press (2008)
                        </td>
                        <td>$24.00</td>
                        <td><button class="btn btn-small btn-primary" data-loading-text="Loading...">Add to buy</button></td>
                        
                    </tr>
                    <tr>
                        <td><img src="img/wild.jpg" class="table-img"></td>
                        <td>
                            <strong>(insert book title)</strong><br>
                            (insert book author)<br>
                            (publisher)
                        </td>
                        <td>(price)</td>
                        <td><button class="btn btn-small btn-primary" data-loading-text="Loading...">Add to buy</button></td>
                        
                    </tr>
                    <tr>
                        <td><img src="img/mc-example.jpg" class="table-img"></td>
                        <td>
                            <strong>Modern China: A Very Short Introduction</strong><br>
                            Rana Mitter<br>
                            Oxford University Press (2008)
                        </td>
                        <td>$24.00</td>
                        <td><button class="btn btn-small btn-primary" data-loading-text="Loading...">Add to buy</button></td>
                        
                    </tr>
                 </tbody>
                </table>
                  </div>
<!-- 
                  <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary">Confirm purchase</button>
                  </div> -->

                </div>
            </article>
            <article class="logistics">
                <form>
                  <fieldset>
                    <label><h4>Total Price</h4></label>
                    <input type="text" placeholder="$19.09">

                    <label><h4>Location</h4></label>
                    <input type="text" placeholder="Pick a place">
                    <button type="submit" class="btn center">Set location</button>
                    
                    <button type="submit" class="center btn btn-large btn-green confirm">Confirm transaction</button>
                  </fieldset>
                </form>
            </article>
        </aside>
    </div>
</div>

<div class="container">
</div>

</div>

<?php include 'footer.php' ?>
<?php include 'javascript.php' ?>

</body>

</body>
</html>