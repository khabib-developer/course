<?php include ROOT.'/views/layout/adminHeader.php';?>
<section>
<div class="container">
	<div class="pt-4 pl-4">
		<a href="/blog/create">Добавить Блог</a>
	</div>
	<div class="row pt-3">
		
		Ru
		<table class="table-bordered table-striped table mt-3">
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>short_content</th>
				<th>content</th>
				<th></th>
				<th></th>
			</tr>
			<?php foreach ($blogList as $blog): ?>
				<tr>
					<td><?php echo $blog['id']; ?></td>
					<td><?php echo $blog['title']; ?></td>
					<td><?php echo $blog['short_content']; ?></td>
					<td><?php echo $blog['content']; ?></td>
					<td>
						<a href="/blog/update/<?php echo $blog['id']; ?>" title="update"><i class="fa fa-pencil"></i></a>
					</td>
					<td>
						<a href="/blog/delete/<?php echo $blog['id']; ?>" title="delete"><i class="fa fa-times"></i></a>
					</td>
				</tr>
			<?php endforeach; ?>
			<tr>
				<th>ID_uz</th>
				<th>Title_uz</th>
				<th>short_content_uz</th>
				<th>content_uz</th>
				<th></th>
				<th></th>
			</tr>
			<?php foreach ($blogList as $blog): ?>
				<tr>
					<td><?php echo $blog['id']; ?></td>
					<td><?php echo $blog['title_uz']; ?></td>
					<td><?php echo $blog['short_content_uz']; ?></td>
					<td><?php echo $blog['content_uz']; ?></td>
					<td>
						<a href="/blog/update/<?php echo $blog['id']; ?>" title="update"><i class="fa fa-pencil"></i></a>
					</td>
					<td>
						<a href="/blog/delete/<?php echo $blog['id']; ?>" title="delete"><i class="fa fa-times"></i></a>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
	
</div>	





</section>

<?php include ROOT.'/views/layout/adminFooter.php'; ?>	