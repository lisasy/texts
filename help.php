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
                <div class="span9"><h2>Help</h2></div>
            </header>
            <article class="row">
                <div class="span9">
                    <p>Got any questions that are not answered here? Contact us at information@texts.com.</p>
                </div>
            </article>
            <article class="row">
                <div class="accordion span9" id="accordion2">
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                        What is Texts.com?
                      </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                      <div class="accordion-inner span6 offset1">
                        <p>
                        <strong>Texts.com</strong> was founded and created by recent college grads and college student Peter Frank (CEO, Wesleyan University '12'), Ben Halpern (CTO, '12'), and Lisa Sy (Lead Designer, Wesleyan University '13).
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        How does this work?
                      </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Anim pariatur cliche...
                      </div>
                    </div>
                  </div>
                </div>
            </article>
        </section>
    </div>
</div>

</div>

<?php include 'javascript.php' ?>

</body>

</body>
</html>