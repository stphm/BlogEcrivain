<?php $title = "Modifier le chapitre :" ;  ?>
<?php ob_start(); ?>

<?php if (isset($_SESSION['successMsg'])) { ?>
    <div class="alert alert-success text-center"> <?= $_SESSION['successMsg'] ?> </div>
    <?php
    unset($_SESSION['successMsg']);
} ?>

<?php if (isset($_SESSION['errorMsg'])) { ?>
    <div class="alert alert-danger text-center"> <?= $_SESSION['errorMsg'] ?> </div>
    <?php
    unset($_SESSION['errorMsg']);
} ?>


<div class="global dashboard ">
    <h1>Modifier un article </h1>

    <a href="index.php?action=manageArticle"> Retour à la gestion des articles</a>


    <form action="index.php?action=edit&amp;id= <?= $article['id'] ?>" method="post">

        <div class="form-group">
            <label for="title">Titre du chapitre</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $article['title'] ?>">
        </div>
        
        <div class="form-group">
            <label for="content">Contenue du chapitre </label>
            <textarea id="default" class="form-control" name="content" id="content" rows="18"
                name="content"><?= $article['content'] ?></textarea>
        </div>

        <button class="btn btn-primary" type="submit" name="submit">Modifier</button>
        
    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php include 'view/template.php'; ?>