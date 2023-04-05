<?php require_once "partials/head.php" ?>
<?php 
if(isset($_SESSION['id'])){
    $oglasi = get_all_user_ads($_SESSION['id']);
    
}else{
    header("Location: index.php");
}
?>
<?php require_once "partials/navbar.php" ?>
<div class="container">
    <div class="row">
        <div class="col-10 offser-1">
            <div class="row">
                <div class="col-6 offset-3 mt-3 mb-5">
                    <a href="new.add.view.php" class="btn btn-info form-control">Novi Oglas</a>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <?php foreach($oglasi as $oglas): ?>
        <div class="col-4">
                            <div class="card mb-2 mt-2">
                                <div class="card-header">
                                    <a href="" class="btn btn-secondary btn-sm"><?php echo $oglas['category'];?></a>
                                </div>
                                <div class="card-body text-center">
                                    <h5><?php echo $oglas['title']; ?></h5>
                                    
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-warning btn-sm float-left"><?php echo $oglas['name'];?></a>
                                    <a href="" class="btn btn-danger btn-sm float-right"><?php echo $oglas['price'];?></a>
                                </div>
                            </div>
                        </div>
    <?php endforeach ?>    
</div>

<?php require_once "partials/footer.php" ?>
    