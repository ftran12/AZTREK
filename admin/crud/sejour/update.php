<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$sejour = getOneEntity("sejour",$id);
$liste_destinations = getAllEntities("destination");

require_once '../../layout/header.php';
?>

<h1>Modification d'un séjour</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" value="<?php echo $sejour["titre"]; ?>" class="form-control" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <?php if ($sejour["image"]) : ?>
            <img src="../../../uploads/<?php echo $sejour["image"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"><?php echo $sejour["description"]; ?></textarea>
    </div>
    <div class="form-group">
        <label>Destination</label>
        <select name="destination_id" class="form-control">
            <?php foreach ($liste_destinations as $destination) : ?>
                <?php $selected = ($destination["id"] == $sejour["destination_id"]) ? "selected" : ""; ?>
                <option value="<?php echo $destination["id"]; ?>" <?php echo $selected; ?>>
                    <?php echo $destination ["titre"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>