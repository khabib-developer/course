<?php include ROOT.'/views/layout/adminHeader.php';?>
<style>
    input {
        width: 150%;
    }
</style>
<section>
    <div class="container pt-4">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="active">Редактировать товар</li>
                </ol>
            </div>
            <h4>Редактировать блог #<?php echo $id; ?></h4>
            <div class="col-lg-4">
                <div class="login-form mb-4">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="pt-2 pb-2">title</div>
                        <input type="text" name="title" placeholder="" value="<?php echo $blog['title']; 
                        ?>">
                        <div class="pt-2 pb-2">title_uz</div>
                        <input type="text" name="title_uz" placeholder="" value="<?php echo $blog['title_uz']; 
                        ?>">
                        <div class="pt-3 pb-3">short_content</div>
                        <textarea name="short_content" rows="8" cols="70"><?php echo $blog['short_content']; ?></textarea>
                        <div class="pt-3 pb-3">short_content_uz</div>
                        <textarea name="short_content_uz" rows="8" cols="70"><?php echo $blog['short_content_uz']; ?></textarea>
                        <div class="pt-2 pb-2">Content</div>
                        <textarea cols="100" rows="30" name="content" value = ""><?php echo $blog['content']; ?></textarea>
                        <div class="pt-2 pb-2">Content_uz</div>
                        <textarea cols="100" rows="30" name="content_uz" value = ""><?php echo $blog['content_uz']; ?></textarea>
                        <div class="pt-2 pb-2">Picture</div>
                        <img src="<?php echo One::getImage($id); ?>" class="pb-3" alt="">
                        <input type="file" name="image" class="pb-4">
                        <input type="submit" name="submit" class="btn btn-primary" value="Сохранить">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT.'/views/layout/adminFooter.php'; ?>  