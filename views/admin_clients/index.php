  
<?php include ROOT.'/views/layout/adminHeader.php';?>

<section>
    <div class="container pt-4">      
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="active">Управление заказами</li>
                </ol>
            </div>
            <h4 class="pt-2">Список заказов</h4>
            <table class="table-bordered table-striped table mt-4">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя покупателя</th>
                    <th>Телефон покупателя</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td>
                            <a href="/clients/view/<?php echo $order['id']; ?>">
                                <?php echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['name']; ?></td>
                        <td><?php echo $order['phone']; ?></td>  
                        <td><a href="/clients/view/<?php echo $order['id']; ?>" title="Смотреть"><i class="fa fa-eye"></i></a></td>
                        <td><a href="/clients/delete/<?php echo $order['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </div>
</section>

<?php include ROOT.'/views/layout/adminFooter.php'; ?>  