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
                <div class="span4"><h2>Settings</h2></div>
                <div class="span5"><a href="" class="btn btn-green pull-right">View public profile</a></div>
            </header>
            <article class="row">
            <form id="settings" class="span7 offset1">
                <fieldset>
                    <legend>Email</legend>
                    <label>Your email address</label>
                    <input type="text" placeholder="lsy@wesleyan.edu"> <button type="submit" class="btn btn-small">Edit</button>
                    <label class="checkbox">
                      <input type="checkbox"> Enable email notifications
                    </label>
                </fieldset>
                <fieldset>
                    <legend>Privacy</legend>
                    <label class="checkbox">
                      <input type="checkbox"> Make your library and inventory public
                    </label>
                    <label for="" class="checkbox">
                        <input type="checkbox"> Set up automatic Facebook sharing
                    </label>
                </fieldset>
                <button type="submit" class="btn btn-green span3">Save</button>
            </form>
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