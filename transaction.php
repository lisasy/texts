<?php include 'header.php' ?>
<body>     
<?php include 'navbar.php' ?>


<div class="body-content pull-up">

<div class="container">
    <div class="row">
        <section id="transaction-body" class="span8">
            <header class="row">
                <div class="span1">    
                    <img src="img/lisa.jpg">
                </div>
                <div class="span7">
                    <h5>You want to buy from</h5>
                    <h1>Lisa Sy.</h1>
                </div>
            </header>
            <article id="message-input" class="row">
                <div class="chat-user span1">
                    <img src="img/lisa.jpg">
                    <h5>You</h5>
                </div>
                <div class="span5">
                    <div class="arrow-left"></div>
                    <textarea placeholder="Send a message"></textarea>
                </div>
                <div class="textarea-control span2 pull-right">
                    <button type="submit" class="btn btn-green">Send message</button>
                    <button type="submit" class="btn btn-green">Clear message</button>
                </div>
            </article>
            <article id="message-chat"class="row">
                <div class="span8">
                    <section class="message-box">
                        `<ul>
                        <li class="user-me row">
                            <div class="chat-user">
                                <h5>You</h5>
                                <small>9:47pm</small>
                            </div>
                            <div class="message-content">
                                <p>Yeah, I think that is a good place for us to meet up.</p>
                            </div>
                        </li>
                        <li class="user-other row">
                            <div class="chat-user">
                                <h5>Lisa Sy</h5>
                                <small>12:00pm</small>
                            </div>
                            <div class="message-content">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            </div>
                        </li>
                        <li class="user-other row">
                            <div class="chat-user">
                                <h5>Lisa Sy</h5>
                                <small>12:00pm</small>
                            </div>
                            <div class="message-content">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            </div>
                        </li>
                        <li class="user-me row">
                            <div class="chat-user">
                                <h5>You</h5>
                                <small>9:47pm</small>
                            </div>
                            <div class="message-content">
                                <p>Yeah, I think that is a good place for us to meet up.</p>
                            </div>
                        </li>
                        <li class="user-other row">
                            <div class="chat-user">
                                <h5>Lisa Sy</h5>
                                <small>12:00pm</small>
                            </div>
                            <div class="message-content">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            </div>
                        </li>
                        <li class="user-me row">
                            <div class="chat-user">
                                <h5>You</h5>
                                <small>9:47pm</small>
                            </div>
                            <div class="message-content">
                                <p>Yeah, I think that is a good place for us to meet up.</p>
                            </div>
                        </li>
                        <li class="user-other row">
                            <div class="chat-user">
                                <h5>Justin Timberlake</h5>
                                <small>12:00pm</small>
                            </div>
                            <div class="message-content">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            </div>
                        </li>
                        <li class="user-me row">
                            <div class="chat-user">
                                <h5>You</h5>
                                <small>9:47pm</small>
                            </div>
                            <div class="message-content">
                                <p>Yeah, I think that is a good place for us to meet up.</p>
                            </div>
                        </li>
                        </ul>
                    </section>
                </div>
            </article>
        </section>

        <aside id="transaction-sidebar" class="span4">
            <article class="book-list">
                <h3>Selected Books (3)</h3>
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
                <a class="xbook btn btn-medium add-more-books" data-toggle="modal" href="#addMoreBooks">Add more books!</a>
                <!-- actual modal -->
                <div id="addMoreBooks" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
</html>