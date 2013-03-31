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
              <li><a href="#">Activity</a></li>
              <li><a href="inventory.php">My Inventory</a></li>
              <li><a href="wishlist.php">My Wishlist</a></li>
            </ul>
            <ul class="nav nav-list">
              <li class="nav-header">Other</li>
              <li class="active"><a href="settings.php">Settings</a></li>
              <li><a href="help.php">Help</a></li>
              <li><a href="#">Sign Out</a></li>
            </ul>
            
        </nav>
        <section id="profile-content" class="span9">
            <header class="row">
                <div class="span9"><h2>Settings</h2></div>
            </header>
            <article class="row">
                <table class="activity table span9">
                    <tr class="sell-to">
                        <td><a href="">Peter Frank</a> wants to buy <a href="">Modern China</a> from you.</td> <td><button class="btn btn-small">View Transaction</button></td>
                        <td><p class="muted pull-right"><small>2:44pm</small></p></td>
                    </tr>
                    <tr class="buy-from">
                        <td><a href="">Ben Halpern</a> listed <a href="">European History and the Modern World</a>.</td> <td><button class="btn btn-small">View Transaction</button></td>
                        <td><p class="muted pull-right"><small>Yesterday, 1:44pm</small></p></td>
                    </tr>
                    <tr class="sell-to">
                        <td><a href="">Peter Frank</a> wants to buy <a href="">Modern China</a> from you.</td> <td><button class="btn btn-small">View Transaction</button></td>
                        <td><p class="muted pull-right"><small>2:44pm</small></p></td>
                    </tr>
                    <tr class="message">
                        <td><a href="">Jane Doe</a> sent you a <a href="">message</a>.</td> <td><button class="btn btn-small">View Transaction</button></td>
                        <td><p class="muted pull-right"><small>2:44pm</small></p></td>
                    </tr>
                </table>
            </article>
        </section>
    </div>
</div>

</div>

<?php include 'javascript.php' ?>

</body>

</body>
</html>