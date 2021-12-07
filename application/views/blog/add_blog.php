<div id="container">
	<h1>Add Blog</h1>
	<?php if($this->session->flashdata('upload_image_error') != 'null'){ ?>
		<p class="text-danger"><?php echo $this->session->flashdata('upload_image_error'); ?></p>
	<?php } ?>
	<form action="<?php echo base_url().'index.php/blog/addBlog'?>" method="POST" id="blog-form" class="form-wrapper" enctype="multipart/form-data">
		<div class="form-group">
			<input type="text" name="title" placeholder="Title" class="form-control" />
			<p class="error-msg text-danger" id="error_title">Please enter title</p>	
		</div>
		<div class="form-group">
			<textarea name="desc" placeholder="Description"></textarea>
			<p class="error-msg text-danger" id="error_desc">Please enter description</p>	
		</div>
		<div class="form-group">
			<input type="text" name="tags" placeholder="Tags" class="form-control" />
			<p class="error-msg text-danger" id="error_tags">Please enter tag</p>	
		</div>
		<div class="form-group">
			<input type="file" name="blog_img" placeholder="Upload image" class="form-control" />
			<p class="error-msg text-danger" id="error_img">Please select image</p>	
		</div>
		<div class="form-group">
			<input type="submit" name="add_blog" value="Add Blog" class="btn btn-primary add-blog-btn" class="form-control" />
		</div>
	</form>
</div>
<style type="text/css">
#blog-form .form-group,#register-form .form-group{
	margin-bottom: 10px !important;
}
</style>
</body>
</html>