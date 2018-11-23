<nav class="navbar navbar-default">
    <div class="navbar-header navbar-left">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h1><a class="navbar-brand" href="index.php">Travel Agency</span></a></h1>
    </div>
    <?php
    try{
    $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
    $select=$con->prepare("SELECT * FROM add_category WHERE publication_Status=1");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    ?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <nav class="cl-effect-15" id="cl-effect-15">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <?php while($p=$select->fetch()){?>
                    <li><a href="tour.php?id=<?php echo $p['category_Name'];?>"><?php echo $p['category_Name']?></a></li>
                <?php }
                }
                catch(PDOException $e)
                {echo "error" . $e->getMessage();
                }
                ?>
                <li><a href="contact.php">Contact</a></li>
            </ul>

        </nav>
    </div>
</nav>