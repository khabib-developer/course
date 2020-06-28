  
<?php include ROOT.'/views/layout/adminHeader.php';?>

<section>
    <div class="container pt-3">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li class="active">Courses</li>
            </ol>
        </div>
        <a href="/course/create" class="btn btn-default back pb-2 pl-0"><i class="fas fa-plus"></i> Добавить курс</a>
        <h4 class="pb-3">Список курсов</h4>
        <table class="table-bordered table-striped table">
             <tr>
                <th>ID</th>
                <th>title</th>
                <th>for_who</th>
                <th>short_content</th>
                <th>result</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($coursesList as $course): ?>
                <tr>
                    <td><?php echo $course['id']; ?></td>
                    <td><?php echo $course['title']; ?></td>
                    <td><?php echo $course['for_who']; ?></td>
                    <td><?php echo $course['short_content']; ?></td>
                    <td><?php echo $course['result']; ?></td>
                    <td><a href="/course/update/<?php echo $course['id']; ?>" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="/course/delete/<?php echo $course['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <th>ID</th>
                <th>title_uz</th>
                <th>for_who_uz</th>
                <th>short_content_uz</th>
                <th>result_uz</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($coursesList as $course): ?>
                <tr>
                    <td><?php echo $course['id']; ?></td>
                    <td><?php echo $course['title_uz']; ?></td>
                    <td><?php echo $course['for_who_uz']; ?></td>
                    <td><?php echo $course['short_content_uz']; ?></td>
                    <td><?php echo $course['result_uz']; ?></td>
                    <td><a href="/course/update/<?php echo $course['id']; ?>" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="/course/delete/<?php echo $course['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>

<?php include ROOT.'/views/layout/adminFooter.php'; ?>  