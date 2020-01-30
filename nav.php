<!-- ######################     Start of nav  ############################## -->
<nav id="nav">
    <ol>
        <li><figure class="logo">
                <img src="../image/logo.png" alt="logo"> <!-- the citation is on the image itself.-->
    </figure></li>
        <?php 
       
        print'<li class="';
        if($path_parts['filename'] == 'index'){
            print'activePage';
        }
        print'">';
        print'<a href="index.php">Home</a>';
        print'</li>';
        
        
        print'<li class="';
        if($path_parts['filename'] == 'technical-documentation'){
            print'activePage';
        }
        print'">';
        print'<a href="technical-documentation.php">Web Basics and Layout</a>';
        print'</li>';
        
        print'<li class="';
        if($path_parts['filename'] == 'html'){
            print'activePage';
        }
        print'">';
        print'<a href="html.php">Html Cheat Sheet</a>';
        print'</li>';
        
        
        
        print'<li class="';
        if($path_parts['filename'] == 'css'){
            print'activePage';
        }
        print'">';
        print'<a href="css.php">CSS Cheat Sheet</a>';
        print'</li>';
        
         print'<li class="';
        if($path_parts['filename'] == 'about-us'){
            print'activePage'; 
        }
        print'">';
        print'<a href="about-us.php">About us</a>';
        print'</li>';
        
         print'<li class="';
        if($path_parts['filename'] == 'form'){
            print'activePage';
        }
        print'">';
        print'<a href="form.php">Feedback Form</a>';
        print'</li>';
        
        
        
        
        
        ?>
    </ol>
</nav>
<!-- ######################     end of nav     ############################# -->