<div class="container">
	<a href="<?php echo base_url().'index.php/blog/addBlog'?>" class="btn btn-success">Add New</a>
	<table class="blog-list-wrapper" id="blog-list">
		<tr>
			<th>id</th>
			<th>Image</th>
			<th>Title</th>
			<th>Descriprion</th>
			<th>Tags</th>
			<th>Action</th>
		</tr>
		<?php if(isset($blogs)){?>
			<?php foreach($blogs as $blogDetail){ ?>
				<tr>
					<td><?php echo $blogDetail->id; ?></td>
					<td><img src="<?php echo base_url().'assets/uploads/'?><?php echo $blogDetail->image ?>" height="100" width="100"></td>
					<td><?php echo $blogDetail->title; ?></td>
					<td><?php echo $blogDetail->description; ?></td>
					<td><?php echo $blogDetail->tag_name; ?></td>
					<td><a href="<?php echo base_url('index.php/blog/editForm/'.$blogDetail->id)?>" class="btn btn-primary" style="margin-right: 10px">Edit</a><a href="<?php echo base_url('index.php/blog/deleteBlog/'.$blogDetail->id)?>" onclick='return confirm("Are you sure ?")' class="btn btn-danger">Delete</a></td>
				</tr>
			<?php } ?>
		<?php }else{ ?>
			<tr>
				<p>Blogs not available</p>
			</tr>
		<?php } ?>
	</table>
</div>