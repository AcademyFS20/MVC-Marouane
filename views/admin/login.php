<?php ob_start(); ?>

    <section class="container">
        <div class="home">
          <h1 class="title"> Let's chat together</h1>
          <p class="text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus erat nec ante scelerisque, ac ultricies ante sagittis. Nulla in mollis neque. Donec posuere euismod nisl iaculis tristique. In at ante fermentum, malesuada turpis a, pharetra lacus. Pellentesque ac interdum turpis, a consequat lectus. </p>
        </div>

        <?php if ($data['status']): ?>
        <p class="error" style='color:red'>
                <?=$data['error']?>
        </p>
        <?php else: ?>
           <?='';?>
        <?php endif;?>
      
        <form class="formd" method="POST" action="">
        <h1> Login </h1>

              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" id="email" value="<?php if (isset($data['email'])): echo $data['email'];endif;?>" placeholder="Enter your email" />
                </div>
              </div>
              <br>
              <div class="mb-3 row"> 
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" id="password" value="<?php if (isset($data['password'])): echo $data['password'];endif;?>" placeholder="Enter your password" />

                </div>
              </div>   
              <br>
              
              <div class="col-auto">
                <input type="submit" class="btn btn-primary mb-3" name="login" id="login" value="Login"> LOGIN </input>
              </div>
              <br>
              <div class="account__group">
                <i class="fas fa-user-edit"></i><a href="<?=\Provider\Request::route('signup')?>" class="account__group--item">Create an Account ?</a>
              </div>
        </form>    
    </section>
    

<?php

$content = ob_get_clean();

require dirname(__DIR__).DIRECTORY_SEPARATOR . 'templates/template.php';

