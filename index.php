<?php
   session_start();
   
   require_once 'helpers/security.php';
   
   $errors = isset($_SESSION['fieldErrors']) ? $_SESSION['fieldErrors'] : [];
   $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
   $fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LaFashionista Marche.</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/''">
  </head>
  <body>
    <header class="topFrame">
      <div class="row pageNav">
        <div class="columns eight iconLogo"></div>
        <div class="columns one home"><strong>Home</strong></div>
        <div class="columns one about"><strong>About</strong></div>
        <div class="columns one posts"><strong>Posts</strong></div>
        <div class="columns one contact"><strong>Contact</strong></div>
      </div>
    </header>
    <section class="viewWindow">
      <div class="backImage"></div>
      <div class="logo"></div>
      <div class="foreImage"></div>
    </section>
    
    <section class="rotateImg">
      <article>
        <h1>The La_Marche</h1>
        <p class="men">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
        <div class="row rot">
          <fig class="columns three">
            <!--img(src="/images/model1.jpg")--><img src="https://unsplash.it/300/500/?random">
            <figcaption>
              The Confident 
              <strong>Posture</strong>
            </figcaption>
          </fig>
          <fig class="columns three">
            <!--img(src="/images/model2.jpg")--><img src="https://unsplash.it/300/500/?random">
            <figcaption>
              A Step to 
              <strong>Greatness</strong>
            </figcaption>
          </fig>
          <fig class="columns three">
            <!--img(src="/images/model3.jpg")--><img src="https://unsplash.it/300/500/?random">
            <figcaption>
              So Silent it 
              <strong>Whispers</strong>
            </figcaption>
          </fig>
          <fig class="columns three">
            <!--img(src="/images/57.jpg")--><img src="https://unsplash.it/300/500/?random">
            <figcaption>
              It Inspires
              <strong>Believe!</strong>
            </figcaption>
          </fig>
        </div>
      </article>
    </section>
    <section class="content">
      <article>
        <h1>Unique Style</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
        <hr>
        <div class="peekWindow">		
          <div class="shade">
            <div class="videoLink">A <strong>Peek?</strong><a href="https://goo.gl/H4aijY" class="linkText">Right Now     </a></div>
          </div>
        </div>
        <h1>The Runway</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
        <hr>
        <div class="blogPosts row">
          <div class="post columns four post1">
            <h4>Title</h4><img src="https://unsplash.it/400/300/?random">
            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
            <p id="blurb1"><a href="#blog" class="button" >Read More</a></p>
          </div>
          <div class="post columns four post2">
            <h4>Title</h4><img src="https://unsplash.it/400/300/?random">
            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
            <p><a href="#blog1" class="button">Read More</a></p>
          </div>
          <div class="post columns four post3">
            <h4>Title</h4>
            <!--img(src="/images/posts/")--><img src="https://unsplash.it/400/300/?random">
            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
            <p><a href="#blog2" class="button">Read More</a></p>
          </div>
        </div>
      </article>
    </section>
    
    
    <section class="blog">
      <article>
        <div class="row log">
          <div class="columns eight">
            <h1>Fashion Exhibition</h1>
            <hr>
            <!--img(src="/images/model1.jpg")--><img src="https://unsplash.it/700/300/?random">
            <p class="main">
              <strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
              <strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
              <strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
              </p>
            <hr>
          </div>
          <div class="columns four">
            <h5>Related </h5>
            <p class="related"><strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
          </div>
        </div>
        <hr>
        <div class="row log two">
          <div class="columns eight">
            <h1>Fashion Walk</h1>
            <hr>
            <!--img(src="/images/model1.jpg")--><img src="https://unsplash.it/700/300/?random">
            <p class="main">
              <strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
              <strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
              <strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
              </p>
            <hr>
          </div>
          <div class="columns four">
            <h5>Related </h5>
            <p class="related"><strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
          </div>
        </div>
        <hr>
        <div class="row log three">
          <div class="columns eight">
            <h1>Fashion Sales</h1>
            <hr>
            <!--img(src="/images/model1.jpg")--><img src="https://unsplash.it/700/300/?random">
            <p class="main">
              <strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
              <strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
              <strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.
              </p>
            <hr>
          </div>
          <div class="columns four">
            <h5>Related </h5>
            <p class="related"><strong>Fashion Designs</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
          </div>
        </div>
      </article>      
    </section>
    
    <section class="contactPage" >
      
      <div class="row contactUs">
         <?php if(!empty($errors)): ?>
                <div class="panel">
                   <ul><li><?php echo implode('</li><li>', $errors); ?></li></ul>
                </div>
              <?php endif; ?>
         
         <div class="column eight">
           
           <form action="contact.php" method="post" class="form">
              
              <label>
                 Your Name *
                 <input type="text" placeholder="Your Name:" name="name" autocomplete="off" <?php echo isset($fields['name']) ? ' value="' . e($fields['userName']) . '"' : '' ?>>
              </label>
              <label>
                 Your Email Address *
                 <input type="text" name="email" autocomplete="off" <?php echo isset($fields['email']) ? ' value="' . e($fields['userEmail']) . '"' : '' ?>>
              </label>
              <label>
                 Your Phone Number *
                 <input type="text" name="number" autocomplete="off" <?php echo isset($fields['numbr']) ? ' value="' . e($fields['userNumber']) . '"' : '' ?>>
              </label>
              <label>
                 Your Message *
                 <textarea name="message" rows="10"><?php echo isset($fields['message']) ? e($fields['userMessage']) : '' ?></textarea>
              </label>
              
              <input type="submit" value="Send">
              <p class="muted">* means a required field</p>
           </form>
         </div>
      </div>
    </section>
    
    <footer id="footer">
      <div class="row footer-inside">
        <div class="columns three"><strong><span>About Us</span></strong>
          <ul>
            <li><a href="">Page</a></li>
            <li><a href="">Twitter</a></li>
            <li><a href="">linkedln</a></li>  
          </ul>
          
        </div>
        <div class="columns three"><strong><span>Contact Us</span></strong>
          <ul>
            <li><a href="">Facebook</a></li>
            <li><a href="">Twitter</a></li>
            <li><a href="">linkedln</a></li>
            <li><a href="">Instagram</a></li>
            <li><a href="">Contact Page</a></li>
          </ul>
        </div>
        <div class="columns six con">
          
          <div class="contact">
             <span>Sign-up for our Fashion tips!</span>
             
             
             <form action="//formspree.io/monydey@yahoo.com" method="post" class = "row">
                
                <label>              
                   <input type="text" placeholder="Your Email *" name="email" autocomplete="off" <?php echo isset($fields['email']) ? ' value="' . e($fields['email']) . '"' : '' ?>>
                </label>
                
                <!--<input type="submit" class="button-primary">-->
                <input type="submit" value="Send">
                <input type="hidden" name="_next" value="//site.io/thanks.html">
                
               
             </form>
             
             
          </div>
          
        </div>
        
      </div>
      <div class="copyright">Hello!</div>
      
    </footer>
    
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/parallax.js"></script>
   
    
  </body>
</html>

<?php
   unset($_SESSION['fieldErrors']);
   unset($_SESSION['errors']);
   unset($_SESSION['fields']);
?>