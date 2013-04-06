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
                <div class="span4"><h2>Inbox (5)</h2></div>
                <div class="span5"></div>
            </header>
            <article class="row">
                <table class="inbox table span9">
                    <tr class="message-to">
                        <td><a href="">Peter Frank</a> wants to buy <a href="">Modern China</a> from you.</td> <td><button class="btn btn-small">View Transaction</button></td>
                        <td><p class="muted pull-right"><small>2:44pm</small></p></td>
                    </tr>
                    <tr class="message-from">
                        <td><a href="">Ben Halpern</a> listed <a href="">European History and the Modern World</a>.</td> <td><button class="btn btn-small">View Transaction</button></td>
                        <td><p class="muted pull-right"><small>Yesterday, 1:44pm</small></p></td>
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