<!DOCTYPEhtml>
<html>
    <head>
        <metacharset="utf-8"/>
        <title>Le blogdel’AVBN</title>
        <linkhref="style.css"rel="stylesheet" />
    </head>
    <body>
        <h1>Lesuperblogde l’AVBN!</h1>
        <p>Derniers billetsdu blog:</p>
        <?php
        foreach($posts as $post){
        ?>
            <divclass="news">
                <h3>
                    <?php echo htmlspecialchars($post['title']);?>
                    <em>le <?php echo $post['french_creation_date'];?></em>
                </h3>
            <p>
        <?php
        //We displaythe postcontent.
        echo nl2br(htmlspecialchars($post['content']));
        ?>
        <br/>
        <em><a href="#">Commentaires</a></em>
    </p>
</div>
<?php
} //The endof theposts loop.
?>
</body>
</html>