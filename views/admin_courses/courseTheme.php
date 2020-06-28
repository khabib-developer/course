<?php include ROOT.'/views/layout/adminHeader.php';?>
<section>
    <div class="container pt-4">
    	<ol style="list-style: none;">
    	<?php if (isset($plan)): ?>
    		<form action="" method="post">
	    		<?php foreach ($plan as $plans): ?>
		    		<li>
		    			<div>Ru</div>
		    			<textarea cols="100" type="text" name="<?php echo "name_".$plans['id']; ?>"><?php echo $plans['title']; ?>
		    			</textarea><a class="pl-2" style="font-size: 1.5em; line-height: 2; position: absolute;color: red !important; text-decoration: none !important;" href="/course/deleteTheme/<?php echo $plans['id']; ?>">&times;</a>
		    		</li>
		    		<li>
		    			<div class="pb-2">Uz</div>
		    			<textarea cols="100" type="text" name="<?php echo "name_uz".$plans['id']; ?>"><?php echo $plans['title_uz']; ?>
		    			</textarea><a class="pl-2" style="font-size: 1.5em; line-height: 2; position: absolute;color: red !important; text-decoration: none !important;" href="/course/deleteTheme/<?php echo $plans['id']; ?>">&times;</a>
		    		</li>
	    		<?php endforeach; ?>
		    <input type="submit" name="submit" value="Изменит">
		    </form>
    	<?php endif ?>
    	</ol>
    </div>
</section>
<?php include ROOT.'/views/layout/adminFooter.php'; ?>  
