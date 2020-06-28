<?php include ROOT.'/views/layout/adminHeader.php';?>
<style>
    input {
        width: 200%;
    }
</style>
<section>
    <div class="container pt-3">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="active">Редактировать категорию</li>
                </ol>
            </div>
            <h4 style="font-weight: 400;">Редактировать категорию "<?php echo $course['name']; ?>"</h4>
            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">
                        <div class="pt-2 pb-2">name</div>
                        <input type="text" name="name" placeholder="" value="<?php echo $course['name']; ?>">
                        <div class="pt-2 pb-2">name_uz</div>
                        <input type="text" name="name_uz" placeholder="" value="<?php echo $course['name_uz']; ?>">
                        <div class="pt-2 pb-2">title</div>
                        <input type="text" name="title" placeholder="" value="<?php echo $course['title']; ?>">
                        <div class="pt-2 pb-2">title_uz</div>
                        <input type="text" name="title_uz" placeholder="" value="<?php echo $course['title_uz']; ?>">
                        <div class="pt-2 pb-2">for_who</div>
                        <input type="text" name="for_who" placeholder="" value="<?php echo $course['for_who']; ?>"> 
                        <div class="pt-2 pb-2">for_who_uz</div>
                        <input type="text" name="for_who_uz" placeholder="" value="<?php echo $course['for_who_uz']; ?>"> 
                        <div class="pt-2 pb-2">short_content</div>
                        <textarea cols="100" type="text" name="short_content" placeholder="" value=""><?php echo $course['short_content']; ?></textarea>   
                        <div class="pt-2 pb-2">short_content_uz</div>
                        <textarea cols="100" type="text" name="short_content_uz" placeholder="" value=""><?php echo $course['short_content_uz']; ?></textarea> 
                        <div class="pt-2 pb-2">result</div>
                        <textarea cols="100" type="text" name="result"><?php echo $course['result']; ?></textarea>
                        <div class="pt-2 pb-2">result_uz</div>
                        <textarea cols="100" type="text" name="result_uz"><?php echo $course['result_uz']; ?></textarea>        
                        <div class="pt-2 pb-2">content</div>
                        <textarea cols="100" type="text" name="content"><?php echo $course['content']; ?> </textarea> 
                        <div class="pt-2 pb-2">content_uz</div>
                        <textarea cols="100" type="text" name="content_uz"><?php echo $course['content_uz']; ?></textarea> 
                        <div class="pt-2 pb-2">res</div>
                        <textarea cols="100" type="text" name="res"><?php echo $course['res']; ?></textarea>
                        <div class="pt-2 pb-2">res_uz</div>
                        <textarea cols="100" type="text" name="res_uz"><?php echo $course['res_uz']; ?></textarea>
                        <div class="pt-2 pb-2">plan</div>
                        <textarea cols="100" type="text" name="plan"><?php echo $course['plan']; ?></textarea>
                        <div class="pt-2 pb-2">plan_uz</div>
                        <textarea cols="100" type="text" name="plan_uz"><?php echo $course['plan_uz']; ?></textarea>
                        <a href="/course/updateTheme/<?php echo $id; ?>" class="btn btn-default back mt-4 pl-0">themes</a></div>
                        <div class="">
                        <a href="/course/createTheme/<?php echo $id; ?>" class="btn btn-default back pb-2 pl-0">create new theme</a>
                        </div>
                        <div class="pt-4">
                            <input type="submit" name="submit" class="btn btn-primary mb-4" value="Сохранить">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT.'/views/layout/adminFooter.php'; ?>