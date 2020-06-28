<?php include ROOT.'/views/layout/adminHeader.php';?>
<style>
    input {
        width: 200%;
    }
</style>
<section>
    <div class="container pt-3">
            <h4 style="font-weight: 400;">Добавить курс</h4>
            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">
                        <div class="pt-2 pb-2">name</div>
                        <input type="text" name="name" placeholder="" value="">
                        <div class="pt-2 pb-2">name_uz</div>
                        <input type="text" name="name_uz" placeholder="" value="">
                        <div class="pt-2 pb-2">title</div>
                        <input type="text" name="title" placeholder="" value="">
                        <div class="pt-2 pb-2">title_uz</div>
                        <input type="text" name="title_uz" placeholder="" value="">
                        <div class="pt-2 pb-2">for_who</div>
                        <input type="text" name="for_who" placeholder="" value=""> 
                        <div class="pt-2 pb-2">for_who_uz</div>
                        <input type="text" name="for_who_uz" placeholder="" value=""> 
                        <div class="pt-2 pb-2">short_content</div>
                        <textarea cols="100" type="text" name="short_content" placeholder="" value=""></textarea>   
                        <div class="pt-2 pb-2">short_content_uz</div>
                        <textarea cols="100" type="text" name="short_content_uz" placeholder="" value=""></textarea>   
                        <div class="pt-2 pb-2">result</div>
                        <textarea cols="100" type="text" name="result"></textarea> 
                        <div class="pt-2 pb-2">result_uz</div>
                        <textarea cols="100" type="text" name="result_uz"></textarea>    
                        <div class="pt-2 pb-2">content</div>
                        <textarea cols="100" type="text" name="content"></textarea> 
                        <div class="pt-2 pb-2">content_uz</div>
                        <textarea cols="100" type="text" name="content_uz"></textarea> 
                        <div class="pt-2 pb-2">res</div>
                        <textarea cols="100" type="text" name="res"></textarea>
                        <div class="pt-2 pb-2">res_uz</div>
                        <textarea cols="100" type="text" name="res_uz"></textarea>
                        <div class="pt-2 pb-2">plan</div>
                        <textarea cols="100" type="text" name="plan"></textarea>
                        <div class="pt-2 pb-2">plan_uz</div>
                        <textarea cols="100" type="text" name="plan_uz"></textarea>
                        <div class="pt-4">Image</div>
                        <input type="file">
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