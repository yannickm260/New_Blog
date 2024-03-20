<?php session_start();?>
<?php include('head.php')?>

<?php

$titrePost = "";
$imagePost = "";
$datePost = "";
$commentairePost = "";

$errTitre = $errImg = $errDate = $errAuth = $errContent = NULL;

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titrePost = $imagePost = $datePost = $nomPost = $commentairePost = "";

    if(!empty($_REQUEST['titre']))
    {
        $titrePost = htmlspecialchars($_REQUEST['titre']);
    }
    else
    {
        echo $errTitre = "Remplissez le champ titre svp !<br>";
    }
    if(!empty($_REQUEST['image']))
    {
        $imagePost = htmlspecialchars($_REQUEST['image']);
    }
    else
    {
        echo $errImg= "Veuillez ajouter une image !<br>";
    }
    if(!empty($_REQUEST['date']))
    {
        $datePost = htmlspecialchars($_REQUEST['date']);
    }
    else
    {
        echo $errDate= "Veuillez ajouter une date !<br>";
    }
    if(!empty($_REQUEST['nom']))
    {
        $nomPost = htmlspecialchars($_REQUEST['nom']);
    }
    else
    {
        echo $errAuth= "Veuillez ajouter votre nom !<br>";
    }
    if(!empty($_REQUEST['cmt']))
    {
        $commentairePost = htmlspecialchars($_REQUEST['cmt']);
    }
    else
    {
        echo $errContent= "Veuillez ajouter la description !";
    }
}


?>



    <header>
        <div class="nav">
            <div class="logo">
                <h1>BLOG</h1>
            </div>
            <div class="bar">
                <div ><a href="indextp.php">Posts</a> </div>
                <div class="post"><a href="post.php">Post</a> </div>
                <div class="login"><a href="add.php">Add</a> </div>
                <div class="views"><a href="view.php">View</a> </div>
                <div ><a href="login.php">Login</a> </div>
            </div> 
        </div>
    </header>
    <div class="addall">
        <h1>Add a new post</h1>

        <form action="view.php" method = "POST">
        <label for="titre">Title :</label><br>
        <input type="text" name="titre" placeholder="Titre du post"><br>
        <label for="image">Image :</label><br>
        <input type="texte" name="image" placeholder="Ajoutez une photo"><br>
        <label for="date">Date :</label><br>
        <input type="date" name="date" ><br>
        <label for="author">Author :</label><br>
        <input type="text" name="nom" placeholder="Nom de l'auteur"><br>
        <label for="content">Content :</label><br>
        <input class="commm" type="text" name="cmt" placeholder="Ajoutez un commentaire"> 
        <input type="submit" value="Add">
        </form>

    </div>

   

   <?php include('footer.php')?>
</body>
</html>