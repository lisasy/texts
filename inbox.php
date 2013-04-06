<?php include 'header.php' ?>
<body>     
<?php include 'navbar.php' ?>


<div class="body-content">

<?php include 'profile-snapshot.php' ?>

</div>

<div class="container">
    <div id="profile-body" class="row">
        <?php include 'profile-sidebar.php' ?>
        <section id="profile-content" class="span9">
            <header class="row">
                <div class="span4"><h2>Inbox (3)</h2></div>
                <div class="span5"></div>
            </header>
            <article class="row">
                <ul class="inbox table span9">
                    <li class="message-row">
                        <img src="img/ben.png">
                        <div class="chat-preview">
                            <h5>Ben Halpern</h5>    
                            <a href=""><strong>Yeah, I am totally interested in buying that book...</strong></a>
                            <p><small>April 5</small></p>
                        </div>
                        <div class="books-in-queue">
                            <ul>
                                <li>Wild</li>
                                <li>Modern China</li>
                                <li>The Perks of Being a Wallflower</li>
                            </ul>
                        </div>
                        <div class="transaction-status">
                            <h5 class="pending">Pending</h5>
                        </div>
                    </li>
                    <li class="message-row">
                        <img src="img/ben.png">
                        <div class="chat-preview">
                            <h5>Ben Halpern</h5>    
                            <a href="">Yeah, I am totally interested in buying that book...</a>
                            <p><small>April 5</small></p>
                        </div>
                        <div class="books-in-queue">
                            <ul>
                                <li>Wild</li>
                                <li>Modern China</li>
                                <li>The Perks of Being a Wallflower</li>
                            </ul>
                        </div>
                        <div class="transaction-status">
                            <h5 class="pending">Pending</h5>
                        </div>
                    </li>
                    <li class="message-row">
                        <img src="img/ben.png">
                        <div class="chat-preview">
                            <h5>Ben Halpern</h5>    
                            <a href="">Thanks for the transaction!</a>
                            <p><small>April 5</small></p>
                        </div>
                        <div class="books-in-queue">
                            <ul>
                                <li>The Perks of Being a Wallflower</li>
                            </ul>
                        </div>
                        <div class="transaction-status">
                            <h5 class="completed">Completed</h5>
                        </div>
                    </li>
                </ul>
            </article>
        </section>
    </div>
</div>

</div>

<?php include 'javascript.php' ?>

</body>

</body>
</html>