<?php include('head.php')?>
<body>
    <header>
        <div class="nav">
            <div class="logo">
                <h1>BLOG</h1>
            </div>
            <div class="bar">
                <div ><a href="indextp.php">Posts</a> </div>
                <div class="post"><a href="post.php">Post</a> </div>
                <div class="add"><a href="add.php">Add</a> </div>
                <div class="login"><a href="view.php">View</a> </div>
                <div ><a href="login.php">Login</a> </div>
            </div> 
        </div>
    </header>
  
    <div class="allv">
        <h1>All posts</h1>
        <table>
           <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Views</th>
           </tr>
           <tr>
               <td>Economy</td>
               <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
           </tr>
            
            
        </table>
        <?php echo $titrePost, $imagePost, $datePost, $nomPost,$commentairePost;?>
    </div>
   <?php include('footer.php')?>
</body>
</html>