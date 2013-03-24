<?php include 'header.php' ?>
  <body>     
    <?php include 'navbar.php' ?>
    <div id="body-content" class="container">

        <header>
            <div class="row">
                <span class="span12">
                <h1>Your</h1>
                <p class="lead">Buy and sell your textbooks on campus.</p>
                </span>
            </div>
        </header>
        
        <section class="box container">

        <div class="transaction-header row">
			<section class="span7">
                <div class="row">
                    <span class="span2"><img src="img/lisa.jpg" class="img-rounded"></span>
                    <span class="span5">
                        <h2>Lisa Sy</h2><br />
                        <p class="lead">is selling to you.</p>
                    </span>
                </div>
			</section>
			<aside class="span3 offset1">
				<ul>
					<li><h4>Help</h4></li>
                    <li><a class="popover-element" rel="popover" data-trigger="click" data-placement="left" data-title="How does this page work?" data-content="<ol><li>1. Make your book selections.</li><li>2. Enter the price.</li>
                    <li>3. Enter the location.</li><li>4. Confirm the transaction!</li></ol>" data-html="true">How does this page work?</a></li>
					<li><a class="popover-element" rel="popover" data-trigger="click" data-placement="left" data-title="How to pay or get paid" data-content="<p>Pay in person! We encourage cash transfers, as that is the easiest way to exchange books. However, if you prefer other forms of exchanges, that's cool, too!</p>" data-html="true">How do I pay or get paid?</a></li>
					<li><a class="popover-element" rel="popover" data-trigger="click" data-placement="left" data-title="Where should we meet" data-content="<p>Texts.com encourages you meet wherever is most convenient: the campus center, the libraries, your residence hall if you live on the same one. Whatever works for you two!</p>" data-html="true">Where should we meet?</a></li>
				</ul>
			</aside>
        </div>

        <div class="transaction-body row">

        	<section class="span7">
                <article class="enter-message row">
                    <form>
                        <div class="chat-user span1">
                            <img src="img/lisa.jpg">
                            <h5>You</h5>
                        </div>
                        <div class="span6">
                            <textarea rows="4" class="span6">Send a message here.
                            </textarea>
                            <button type="submit" class="btn btn-medium btn-primary">Send message</button>
                        </div>
                    </form>
                </article>
                <div class="message-chat">
                    <ul>
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
                </div>
        	</section>

        	<aside class="transaction-sidebar span4 offset1">
        		<section class="transaction-library">
                    <ul>
                        <li class="row selected-book-asset">
                            <div class="span1"><img src="img/mc-example.jpg"></div>
                            <div class="span3">
                                <h5>Modern China: A Very Short Introduction</h5>
                                <p>Rana Mitter</p>
                                <p>Oxford University Press (2008)</p>
                                <em>*Required for EAST 248</em>
                            </div>
                        </li>
                        <li class="row selected-book-asset">
                            <div class="span1"><img src="img/foucault-example.jpg"></div>
                            <div class="span3">
                                <h5>The History of Sexuality, Vol. 1: An Introduction </h5>
                                <p>Michel Foucault</p>
                                <p>Vintage; Fifth or Later Edition edition (1990)</p>
                                <em>*Required for COL 308</em>
                            </div>
                        </li>
                    </ul>
        		</section>
                <button class="btn">Add more books</button>
        		<section class="required-logistics">
					<form class="price">
					  <fieldset>
					    <legend>Legend</legend>
					    <label>Price</label>
					    <input type="text" placeholder="Type something…">
					    <button type="submit" class="btn">Set price</button>

                        <label>Location</label>
                        <input type="text" placeholder="Type something…">
                        <button type="submit" class="btn">Set location</button>
                        
                        <button type="submit" class="btn btn-large btn-primary">Confirm transaction</button>

					  </fieldset>
					</form>
        		</section>

        	</aside>
        </div>
    </section>
    </div>
<?php include 'footer.php' ?>    
<?php include 'javascript.php' ?>
    
  </body>
</html>