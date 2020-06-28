<?php include ROOT.'/views/layout/adminHeader.php';?>
<section>
    <div class="container pt-4">
            <h5>Client</h5>
            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>yourself</th>
                    <th>theme</th>
                    <th>message</th>
                </tr>
                    <tr>
                        <td><?php echo $orders['id']; ?></td>
                        <td><?php echo $orders['name']; ?></td>
                        <td><?php echo $orders['phone']; ?></td>
                        <td>$<?php echo $orders['email']; ?></td>
                        <td><?php echo $orders['yourself']; ?></td>
                        <td><?php echo $orders['theme']; ?></td>
                        <td>$<?php echo $orders['message']; ?></td>
                    </tr>

            </table>
             <img src="<?php echo One::getClientImage($orders['id']); ?>" alt="<?php echo One::getClientImage($orders[$id]); ?>">
            <a href="/admin/clients" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
        </div>
</section>
<?php include ROOT.'/views/layout/adminFooter.php'; ?> 