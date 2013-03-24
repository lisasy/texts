<?php include 'header.php'; ?>
  <body>     
    <?php include 'navbar.php'; ?>
    <div id="body-content" class="container">

        <header>
            <div class="row">
                <span class="span12">
                <h1>Putting students first.</h1>
                <p class="muted">Texts.com offers a student-first initiative to empower students to sell and buy textbooks from their peers.</p>
                </span>
            </div>
        </header>
        
        <div class="row">
          <form class="form-signin span6 box offset3">
            <h2 class="form-signin-heading">Please sign in</h2>
            <input type="text" class="input-block-level" placeholder="Email address">
            <input type="password" class="input-block-level" placeholder="Password">
            <label class="checkbox">
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button class="btn btn-large btn-primary" type="submit">Sign in</button>
          </form>
        </div>
    </div>
<?php include 'footer.php' ?>

    
<?php include 'javascript.php' ?>
    
  </body>
</html>