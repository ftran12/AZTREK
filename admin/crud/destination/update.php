<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$destination = getOneEntity("destination", $id);

require_once '../../layout/header.php';
?>

<h1>Modification d'une destination</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Libellé</label>
        <input type="text" name="titre" value="<?php echo $destination["titre"]; ?>" class="form-control" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control" value="<?php echo $destination["image"]; ?>">
        <img src="../../../uploads/<?= $destination["image"] ?>" alt="" width="100"><?php echo $destination["image"]; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>