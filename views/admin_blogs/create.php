<?php include ROOT.'/views/layout/adminHeader.php';?>
<section>
    <div class="container pt-4">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li class="active">Редактировать товар</li>
            </ol>
        </div>
            <h4>Добавить новый товар</h4>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-md-4">
                <div class="login-form">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="pt-2 pb-2">title</div>
                        <input type="text" name="title" placeholder="" value="">
                        <div class="pt-2 pb-2">title_uz</div>
                        <input type="text" name="title_uz" placeholder="" value="">
                        <div class="pt-3 pb-3">short_content</div>
                        <textarea cols="70" rows="8" type="" name="short_content" placeholder="" value=""></textarea>
                        <div class="pt-3 pb-3">short_content_uz</div>
                        <textarea cols="70" rows="8" type="" name="short_content_uz" placeholder="" value=""></textarea>
                        <div class="pt-2 pb-2">Content</div>
                        <textarea cols="70" rows="8" name="content"></textarea>
                        <div class="pt-2 pb-2">Content_uz</div>
                        <textarea cols="70" rows="8" name="content_uz"></textarea>
                        <div class="pt-2 pb-2">Picture</div>
                        <input type="file" name="image" class="pb-4">
                        <input type="submit" name="submit" class="btn btn-primary" value="Сохранить">
                        </div>
                    </form>
                </div>
            </div>
    </div>
</section>
<?php include ROOT.'/views/layout/adminFooter.php'; ?>  