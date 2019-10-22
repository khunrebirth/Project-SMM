<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/prismjs/themes/prism.css'); ?> ">

<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Edit: <?php echo unserialize($service->title)['th']; ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item"><a href="<?php echo base_url($lang . '/backoffice/dashboard'); ?>">Dashboard</a></div>
				<div class="breadcrumb-item"><a href="#">Page: Services</a></div>
				<div class="breadcrumb-item"><a href="<?php echo base_url($lang . '/backoffice/page/services/list-services'); ?>">Services</a></div>
				<div class="breadcrumb-item active">Edit: <?php echo unserialize($service->title)['th']; ?></div>
			</div>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<?php if ($this->session->flashdata('success')) { ?>
								<div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
							<?php } ?>
							<?php if ($this->session->flashdata('error')) { ?>
								<div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
							<?php } ?>

							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#handleTh">TH</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#handleEn">EN</a></li>
							</ul>
							<!-- Tab panes -->
							<form class="form-horizontal" method="post" action="<?php echo base_url($lang . '/backoffice/page/services/list-services/update/' . $service->id); ?>" enctype="multipart/form-data">
								<div class="tab-content">
									<div class="tab-pane active" id="handleTh">
										<!-- Meta Tag -->
										<div style="padding-top: 20px;"><h4><i class="fa fa-tag"></i> Meta Tag (SEO)</h4></div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Meta Title</label>
											<div class="col-sm-10">
												<input class="form-control" name="meta_tag_title_th" placeholder="Meta Title" type="text" value="<?php echo unserialize($service->meta_tag_title)['th']; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Meta Description</label>
											<div class="col-sm-10">
												<input class="form-control" name="meta_tag_description_th" placeholder="Meta Description" type="text" value="<?php echo unserialize($service->meta_tag_description)['th']; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Meta Keywords</label>
											<div class="col-sm-10">
												<input class="form-control" name="meta_tag_keywords_th" placeholder="Meta Keywords" type="text" value="<?php echo unserialize($service->meta_tag_keywords)['th']; ?>">
											</div>
										</div>
										<!-- OG & Twitter -->
										<div style="padding-top: 20px;"><h4><i class="fa fa-tag"></i> Image OG &amp; Twitter</h4></div>
										<hr>
										<div class="form-group row">
											<div class="col-sm-2"></div>
											<div class="col-sm-10 text-danger">
												og:title และ og:description จะถูกดึงจาก meta title และ meta description
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Preview</label>
											<div class="col-sm-10">
												<img id="previewMetaOgImgTh" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->img_og_twitter)['th']); ?>" style="background-color: #fff;" width="18%" onerror="this.onerror=null;this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXz9Pa5vsq2u8jN0dnV2N/o6u7FydPi5Onw8fS+ws3f4ee6v8v29/jY2+Hu7/Ly9PbJztbQ1dxJagBAAAAC60lEQVR4nO3b2ZaCMBREUQbDJOP//2wbEGVIFCHKTa+zH7uVRVmBBJQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCpdOzvQQqaq2KmuSrOzQ02lSeRem8rpsQq/ozg72Kj4UkAxEev8awnzs7P1yiIadsfpQXjfZCHhUCzbfmeurdNz6bDRsBWRsB+k0cXxdHjpa0wkTBn3hKnjzRZyEgYk3IeEv2RKWCt1cN9EJ0zjfm7Mq/rAVgUnbLpwnK/zA2tnuQmzJHquuqJq91blJuwmAW8rHbV3q2ITFrOAt7Xz3l2UmrBMlpcHe9fOUhOqRYVhFO/cqtSEy0H6bh/tJ1uhCctqlTB/NSnG9pOt1ISXjxLq825laVFowo9GaRPrF9talJqw3n6macaZ09yi1ISG2cLyriwePwxzi1ITru4s2naxma59TC2KTRjE83FqmQ6yeDaUDS3KTRhMV96h5TTSLD4HQ4uCE9bxePUU5pYL/3mD5o9CcMKgTONc39NNLrV5iK4aNLUoOWHQ38RQtW3nsm6db92i8ISvGBtct+hvwqyzBFxE9DehrcHlQPU1YWNvcNGirwlfNThv0ZOE9eJG1OsGZy36kVBdczU9e7RvAz5b9CFhqfIwSp4XwG+OwUWLPiRUV/33Z4tbGtTvGK635CfUDfb/SO5rt20N9t8m65fLT9g3GD5abDY2qC+lvEg4NjhEvLW4tUFvEj4a7OXq3TzoW8Jpg0PEzfk8SThv8EMeJFw1+O8SHmrQg4QHG/Qg4cEGxSc83KD4hIcblJ6w3L508TXh+vtDEpLw3GwDEpKQhOdznVD2fRr9tdpRw/1HqQndIeEvkXCXUlDC+1NBndsnge/fwyVnp9PGH3p95dm1WMKza4/fI37j+UPXR/c+2X9/hjQI0uO3LsyuMioM9A8Sjy/W1iIhY7Sn2tzpUahdWyXiNDNSxcWtSlCBAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCn+AEXGNosxDBhFAAAAAElFTkSuQmCC';">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right"><span class="text-danger">*</span> File Upload</label>
											<div class="col-sm-10">
												<div class="custom-file input-file-w-30">
													<input type="file" name="meta_og_image_th" class="custom-file-input" onchange="PreviewImage(this, 'previewMetaOgImgTh');">
													<label class="custom-file-label">Choose file (.gif | .jpg | .png)</label>
												</div>
											</div>
										</div>
										<!-- Information -->
										<div style="padding-top: 20px;"><h4><i class="fa fa-tag"></i> Information</h4></div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Preview</label>
											<div class="col-sm-10">
												<img id="previewIconTh" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->icon)['th']); ?>" style="background-color: #fff;" width="40px;" onerror="this.onerror=null;this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXz9Pa5vsq2u8jN0dnV2N/o6u7FydPi5Onw8fS+ws3f4ee6v8v29/jY2+Hu7/Ly9PbJztbQ1dxJagBAAAAC60lEQVR4nO3b2ZaCMBREUQbDJOP//2wbEGVIFCHKTa+zH7uVRVmBBJQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCpdOzvQQqaq2KmuSrOzQ02lSeRem8rpsQq/ozg72Kj4UkAxEev8awnzs7P1yiIadsfpQXjfZCHhUCzbfmeurdNz6bDRsBWRsB+k0cXxdHjpa0wkTBn3hKnjzRZyEgYk3IeEv2RKWCt1cN9EJ0zjfm7Mq/rAVgUnbLpwnK/zA2tnuQmzJHquuqJq91blJuwmAW8rHbV3q2ITFrOAt7Xz3l2UmrBMlpcHe9fOUhOqRYVhFO/cqtSEy0H6bh/tJ1uhCctqlTB/NSnG9pOt1ISXjxLq825laVFowo9GaRPrF9talJqw3n6macaZ09yi1ISG2cLyriwePwxzi1ITru4s2naxma59TC2KTRjE83FqmQ6yeDaUDS3KTRhMV96h5TTSLD4HQ4uCE9bxePUU5pYL/3mD5o9CcMKgTONc39NNLrV5iK4aNLUoOWHQ38RQtW3nsm6db92i8ISvGBtct+hvwqyzBFxE9DehrcHlQPU1YWNvcNGirwlfNThv0ZOE9eJG1OsGZy36kVBdczU9e7RvAz5b9CFhqfIwSp4XwG+OwUWLPiRUV/33Z4tbGtTvGK635CfUDfb/SO5rt20N9t8m65fLT9g3GD5abDY2qC+lvEg4NjhEvLW4tUFvEj4a7OXq3TzoW8Jpg0PEzfk8SThv8EMeJFw1+O8SHmrQg4QHG/Qg4cEGxSc83KD4hIcblJ6w3L508TXh+vtDEpLw3GwDEpKQhOdznVD2fRr9tdpRw/1HqQndIeEvkXCXUlDC+1NBndsnge/fwyVnp9PGH3p95dm1WMKza4/fI37j+UPXR/c+2X9/hjQI0uO3LsyuMioM9A8Sjy/W1iIhY7Sn2tzpUahdWyXiNDNSxcWtSlCBAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCn+AEXGNosxDBhFAAAAAElFTkSuQmCC';">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right"><span class="text-danger">*</span> Icon</label>
											<div class="col-sm-10">
												<div class="custom-file input-file-w-30">
													<input type="file" name="icon_th" class="custom-file-input" onchange="PreviewImage(this, 'previewIconTh');">
													<label class="custom-file-label">Choose file (.gif | .jpg | .png)</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Preview</label>
											<div class="col-sm-10">
												<img id="previewImgOnNavBarTh" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->img_on_navbar)['th']); ?>" style="background-color: #fff;" width="200px;" onerror="this.onerror=null;this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXz9Pa5vsq2u8jN0dnV2N/o6u7FydPi5Onw8fS+ws3f4ee6v8v29/jY2+Hu7/Ly9PbJztbQ1dxJagBAAAAC60lEQVR4nO3b2ZaCMBREUQbDJOP//2wbEGVIFCHKTa+zH7uVRVmBBJQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCpdOzvQQqaq2KmuSrOzQ02lSeRem8rpsQq/ozg72Kj4UkAxEev8awnzs7P1yiIadsfpQXjfZCHhUCzbfmeurdNz6bDRsBWRsB+k0cXxdHjpa0wkTBn3hKnjzRZyEgYk3IeEv2RKWCt1cN9EJ0zjfm7Mq/rAVgUnbLpwnK/zA2tnuQmzJHquuqJq91blJuwmAW8rHbV3q2ITFrOAt7Xz3l2UmrBMlpcHe9fOUhOqRYVhFO/cqtSEy0H6bh/tJ1uhCctqlTB/NSnG9pOt1ISXjxLq825laVFowo9GaRPrF9talJqw3n6macaZ09yi1ISG2cLyriwePwxzi1ITru4s2naxma59TC2KTRjE83FqmQ6yeDaUDS3KTRhMV96h5TTSLD4HQ4uCE9bxePUU5pYL/3mD5o9CcMKgTONc39NNLrV5iK4aNLUoOWHQ38RQtW3nsm6db92i8ISvGBtct+hvwqyzBFxE9DehrcHlQPU1YWNvcNGirwlfNThv0ZOE9eJG1OsGZy36kVBdczU9e7RvAz5b9CFhqfIwSp4XwG+OwUWLPiRUV/33Z4tbGtTvGK635CfUDfb/SO5rt20N9t8m65fLT9g3GD5abDY2qC+lvEg4NjhEvLW4tUFvEj4a7OXq3TzoW8Jpg0PEzfk8SThv8EMeJFw1+O8SHmrQg4QHG/Qg4cEGxSc83KD4hIcblJ6w3L508TXh+vtDEpLw3GwDEpKQhOdznVD2fRr9tdpRw/1HqQndIeEvkXCXUlDC+1NBndsnge/fwyVnp9PGH3p95dm1WMKza4/fI37j+UPXR/c+2X9/hjQI0uO3LsyuMioM9A8Sjy/W1iIhY7Sn2tzpUahdWyXiNDNSxcWtSlCBAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCn+AEXGNosxDBhFAAAAAElFTkSuQmCC';">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Image on Navbar</label>
											<div class="col-sm-10">
												<div class="custom-file input-file-w-30">
													<input type="file" name="img_on_navbar_th" class="custom-file-input" onchange="PreviewImage(this, 'previewImgOnNavBarTh');">
													<label class="custom-file-label">Choose file (.gif | .jpg | .png)</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right"><span class="text-danger">*</span>  Title</label>
											<div class="col-sm-10">
												<input class="form-control" name="title_th" placeholder="Title" type="text" value="<?php echo unserialize($service->title)['th']; ?>" required>
											</div>
										</div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Content Top Title</label>
											<div class="col-sm-10">
												<input class="form-control" name="content_top_title_th" placeholder="Title" type="text" value="<?php echo unserialize($service->content_top_title)['th']; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Preview</label>
											<div class="col-sm-10">
												<img id="previewContentTopImgTh" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->content_top_img)['th']); ?>" style="background-color: #fff;" width="18%;" onerror="this.onerror=null;this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXz9Pa5vsq2u8jN0dnV2N/o6u7FydPi5Onw8fS+ws3f4ee6v8v29/jY2+Hu7/Ly9PbJztbQ1dxJagBAAAAC60lEQVR4nO3b2ZaCMBREUQbDJOP//2wbEGVIFCHKTa+zH7uVRVmBBJQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCpdOzvQQqaq2KmuSrOzQ02lSeRem8rpsQq/ozg72Kj4UkAxEev8awnzs7P1yiIadsfpQXjfZCHhUCzbfmeurdNz6bDRsBWRsB+k0cXxdHjpa0wkTBn3hKnjzRZyEgYk3IeEv2RKWCt1cN9EJ0zjfm7Mq/rAVgUnbLpwnK/zA2tnuQmzJHquuqJq91blJuwmAW8rHbV3q2ITFrOAt7Xz3l2UmrBMlpcHe9fOUhOqRYVhFO/cqtSEy0H6bh/tJ1uhCctqlTB/NSnG9pOt1ISXjxLq825laVFowo9GaRPrF9talJqw3n6macaZ09yi1ISG2cLyriwePwxzi1ITru4s2naxma59TC2KTRjE83FqmQ6yeDaUDS3KTRhMV96h5TTSLD4HQ4uCE9bxePUU5pYL/3mD5o9CcMKgTONc39NNLrV5iK4aNLUoOWHQ38RQtW3nsm6db92i8ISvGBtct+hvwqyzBFxE9DehrcHlQPU1YWNvcNGirwlfNThv0ZOE9eJG1OsGZy36kVBdczU9e7RvAz5b9CFhqfIwSp4XwG+OwUWLPiRUV/33Z4tbGtTvGK635CfUDfb/SO5rt20N9t8m65fLT9g3GD5abDY2qC+lvEg4NjhEvLW4tUFvEj4a7OXq3TzoW8Jpg0PEzfk8SThv8EMeJFw1+O8SHmrQg4QHG/Qg4cEGxSc83KD4hIcblJ6w3L508TXh+vtDEpLw3GwDEpKQhOdznVD2fRr9tdpRw/1HqQndIeEvkXCXUlDC+1NBndsnge/fwyVnp9PGH3p95dm1WMKza4/fI37j+UPXR/c+2X9/hjQI0uO3LsyuMioM9A8Sjy/W1iIhY7Sn2tzpUahdWyXiNDNSxcWtSlCBAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCn+AEXGNosxDBhFAAAAAElFTkSuQmCC';">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right"><span class="text-danger">*</span> Content Top Image</label>
											<div class="col-sm-10">
												<div class="custom-file input-file-w-30">
													<input type="file" name="content_top_img_th" class="custom-file-input" onchange="PreviewImage(this, 'previewContentTopImgTh');">
													<label class="custom-file-label">Choose file (.gif | .jpg | .png)</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Content Top Body</label>
											<div class="col-sm-10">
												<textarea class="summernote" name="content_top_body_th"><?php echo unserialize($service->content_top_body)['th']; ?></textarea>
											</div>
										</div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Content Bottom Title</label>
											<div class="col-sm-10">
												<input class="form-control" name="content_bottom_title_th" placeholder="Title" type="text" value="<?php echo unserialize($service->content_bottom_title)['th']; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Preview</label>
											<div class="col-sm-10">
												<img id="previewContentBottomImgTh" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->content_bottom_img)['th']); ?>" style="background-color: #fff;" width="18%" onerror="this.onerror=null;this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXz9Pa5vsq2u8jN0dnV2N/o6u7FydPi5Onw8fS+ws3f4ee6v8v29/jY2+Hu7/Ly9PbJztbQ1dxJagBAAAAC60lEQVR4nO3b2ZaCMBREUQbDJOP//2wbEGVIFCHKTa+zH7uVRVmBBJQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCpdOzvQQqaq2KmuSrOzQ02lSeRem8rpsQq/ozg72Kj4UkAxEev8awnzs7P1yiIadsfpQXjfZCHhUCzbfmeurdNz6bDRsBWRsB+k0cXxdHjpa0wkTBn3hKnjzRZyEgYk3IeEv2RKWCt1cN9EJ0zjfm7Mq/rAVgUnbLpwnK/zA2tnuQmzJHquuqJq91blJuwmAW8rHbV3q2ITFrOAt7Xz3l2UmrBMlpcHe9fOUhOqRYVhFO/cqtSEy0H6bh/tJ1uhCctqlTB/NSnG9pOt1ISXjxLq825laVFowo9GaRPrF9talJqw3n6macaZ09yi1ISG2cLyriwePwxzi1ITru4s2naxma59TC2KTRjE83FqmQ6yeDaUDS3KTRhMV96h5TTSLD4HQ4uCE9bxePUU5pYL/3mD5o9CcMKgTONc39NNLrV5iK4aNLUoOWHQ38RQtW3nsm6db92i8ISvGBtct+hvwqyzBFxE9DehrcHlQPU1YWNvcNGirwlfNThv0ZOE9eJG1OsGZy36kVBdczU9e7RvAz5b9CFhqfIwSp4XwG+OwUWLPiRUV/33Z4tbGtTvGK635CfUDfb/SO5rt20N9t8m65fLT9g3GD5abDY2qC+lvEg4NjhEvLW4tUFvEj4a7OXq3TzoW8Jpg0PEzfk8SThv8EMeJFw1+O8SHmrQg4QHG/Qg4cEGxSc83KD4hIcblJ6w3L508TXh+vtDEpLw3GwDEpKQhOdznVD2fRr9tdpRw/1HqQndIeEvkXCXUlDC+1NBndsnge/fwyVnp9PGH3p95dm1WMKza4/fI37j+UPXR/c+2X9/hjQI0uO3LsyuMioM9A8Sjy/W1iIhY7Sn2tzpUahdWyXiNDNSxcWtSlCBAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCn+AEXGNosxDBhFAAAAAElFTkSuQmCC';">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right"><span class="text-danger">*</span> Content Bottom Image</label>
											<div class="col-sm-10">
												<div class="custom-file input-file-w-30">
													<input type="file" name="content_bottom_img_th" class="custom-file-input" onchange="PreviewImage(this, 'previewContentBottomImgTh');">
													<label class="custom-file-label">Choose file (.gif | .jpg | .png)</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Content Bottom Body</label>
											<div class="col-sm-10">
												<textarea class="summernote" name="content_bottom_body_th"><?php echo unserialize($service->content_bottom_body)['th']; ?></textarea>
											</div>
										</div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Text Button</label>
											<div class="col-sm-10">
												<input class="form-control" name="text_button_th" placeholder="Title" type="text" value="<?php echo unserialize($service->text_button)['th']; ?>">
											</div>
										</div>
										<hr>
									</div>
									<div class="tab-pane fade" id="handleEn">
										<!-- Meta Tag -->
										<div style="padding-top: 20px;"><h4><i class="fa fa-tag"></i> Meta Tag (SEO)</h4></div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Meta Title</label>
											<div class="col-sm-10">
												<input class="form-control" name="meta_tag_title_en" placeholder="Meta Title" type="text" value="<?php echo unserialize($service->meta_tag_title)['en']; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Meta Description</label>
											<div class="col-sm-10">
												<input class="form-control" name="meta_tag_description_en" placeholder="Meta Description" type="text" value="<?php echo unserialize($service->meta_tag_description)['en']; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Meta Keywords</label>
											<div class="col-sm-10">
												<input class="form-control" name="meta_tag_keywords_en" placeholder="Meta Keywords" type="text" value="<?php echo unserialize($service->meta_tag_keywords)['en']; ?>">
											</div>
										</div>
										<!-- OG & Twitter -->
										<div style="padding-top: 20px;"><h4><i class="fa fa-tag"></i> Image OG &amp; Twitter</h4></div>
										<hr>
										<div class="form-group row">
											<div class="col-sm-2"></div>
											<div class="col-sm-10 text-danger">
												og:title และ og:description จะถูกดึงจาก meta title และ meta description
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Preview</label>
											<div class="col-sm-10">
												<img id="previewMetaOgImgEn" style="background-color: #fff;" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->img_og_twitter)['en']); ?>" width="18%" onerror="this.onerror=null;this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXz9Pa5vsq2u8jN0dnV2N/o6u7FydPi5Onw8fS+ws3f4ee6v8v29/jY2+Hu7/Ly9PbJztbQ1dxJagBAAAAC60lEQVR4nO3b2ZaCMBREUQbDJOP//2wbEGVIFCHKTa+zH7uVRVmBBJQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCpdOzvQQqaq2KmuSrOzQ02lSeRem8rpsQq/ozg72Kj4UkAxEev8awnzs7P1yiIadsfpQXjfZCHhUCzbfmeurdNz6bDRsBWRsB+k0cXxdHjpa0wkTBn3hKnjzRZyEgYk3IeEv2RKWCt1cN9EJ0zjfm7Mq/rAVgUnbLpwnK/zA2tnuQmzJHquuqJq91blJuwmAW8rHbV3q2ITFrOAt7Xz3l2UmrBMlpcHe9fOUhOqRYVhFO/cqtSEy0H6bh/tJ1uhCctqlTB/NSnG9pOt1ISXjxLq825laVFowo9GaRPrF9talJqw3n6macaZ09yi1ISG2cLyriwePwxzi1ITru4s2naxma59TC2KTRjE83FqmQ6yeDaUDS3KTRhMV96h5TTSLD4HQ4uCE9bxePUU5pYL/3mD5o9CcMKgTONc39NNLrV5iK4aNLUoOWHQ38RQtW3nsm6db92i8ISvGBtct+hvwqyzBFxE9DehrcHlQPU1YWNvcNGirwlfNThv0ZOE9eJG1OsGZy36kVBdczU9e7RvAz5b9CFhqfIwSp4XwG+OwUWLPiRUV/33Z4tbGtTvGK635CfUDfb/SO5rt20N9t8m65fLT9g3GD5abDY2qC+lvEg4NjhEvLW4tUFvEj4a7OXq3TzoW8Jpg0PEzfk8SThv8EMeJFw1+O8SHmrQg4QHG/Qg4cEGxSc83KD4hIcblJ6w3L508TXh+vtDEpLw3GwDEpKQhOdznVD2fRr9tdpRw/1HqQndIeEvkXCXUlDC+1NBndsnge/fwyVnp9PGH3p95dm1WMKza4/fI37j+UPXR/c+2X9/hjQI0uO3LsyuMioM9A8Sjy/W1iIhY7Sn2tzpUahdWyXiNDNSxcWtSlCBAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCn+AEXGNosxDBhFAAAAAElFTkSuQmCC';">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">File Upload</label>
											<div class="col-sm-10">
												<div class="custom-file input-file-w-30">
													<input type="file" name="meta_og_image_en" class="custom-file-input" onchange="PreviewImage(this, 'previewMetaOgImgEn');">
													<label class="custom-file-label">Choose file (.gif | .jpg | .png)</label>
												</div>
											</div>
										</div>
										<!-- Information -->
										<div style="padding-top: 20px;"><h4><i class="fa fa-tag"></i> Information</h4></div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Preview</label>
											<div class="col-sm-10">
												<img id="previewIconEn" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->icon)['en']); ?>" style="background-color: #fff;" width="40px;" onerror="this.onerror=null;this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXz9Pa5vsq2u8jN0dnV2N/o6u7FydPi5Onw8fS+ws3f4ee6v8v29/jY2+Hu7/Ly9PbJztbQ1dxJagBAAAAC60lEQVR4nO3b2ZaCMBREUQbDJOP//2wbEGVIFCHKTa+zH7uVRVmBBJQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCpdOzvQQqaq2KmuSrOzQ02lSeRem8rpsQq/ozg72Kj4UkAxEev8awnzs7P1yiIadsfpQXjfZCHhUCzbfmeurdNz6bDRsBWRsB+k0cXxdHjpa0wkTBn3hKnjzRZyEgYk3IeEv2RKWCt1cN9EJ0zjfm7Mq/rAVgUnbLpwnK/zA2tnuQmzJHquuqJq91blJuwmAW8rHbV3q2ITFrOAt7Xz3l2UmrBMlpcHe9fOUhOqRYVhFO/cqtSEy0H6bh/tJ1uhCctqlTB/NSnG9pOt1ISXjxLq825laVFowo9GaRPrF9talJqw3n6macaZ09yi1ISG2cLyriwePwxzi1ITru4s2naxma59TC2KTRjE83FqmQ6yeDaUDS3KTRhMV96h5TTSLD4HQ4uCE9bxePUU5pYL/3mD5o9CcMKgTONc39NNLrV5iK4aNLUoOWHQ38RQtW3nsm6db92i8ISvGBtct+hvwqyzBFxE9DehrcHlQPU1YWNvcNGirwlfNThv0ZOE9eJG1OsGZy36kVBdczU9e7RvAz5b9CFhqfIwSp4XwG+OwUWLPiRUV/33Z4tbGtTvGK635CfUDfb/SO5rt20N9t8m65fLT9g3GD5abDY2qC+lvEg4NjhEvLW4tUFvEj4a7OXq3TzoW8Jpg0PEzfk8SThv8EMeJFw1+O8SHmrQg4QHG/Qg4cEGxSc83KD4hIcblJ6w3L508TXh+vtDEpLw3GwDEpKQhOdznVD2fRr9tdpRw/1HqQndIeEvkXCXUlDC+1NBndsnge/fwyVnp9PGH3p95dm1WMKza4/fI37j+UPXR/c+2X9/hjQI0uO3LsyuMioM9A8Sjy/W1iIhY7Sn2tzpUahdWyXiNDNSxcWtSlCBAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCn+AEXGNosxDBhFAAAAAElFTkSuQmCC';">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Icon</label>
											<div class="col-sm-10">
												<div class="custom-file input-file-w-30">
													<input type="file" name="icon_en" class="custom-file-input" onchange="PreviewImage(this, 'previewIconEn');">
													<label class="custom-file-label">Choose file (.gif | .jpg | .png)</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Preview</label>
											<div class="col-sm-10">
												<img id="previewImgOnNavBarEn" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->img_on_navbar)['en']); ?>" style="background-color: #fff;" width="200px;" onerror="this.onerror=null;this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXz9Pa5vsq2u8jN0dnV2N/o6u7FydPi5Onw8fS+ws3f4ee6v8v29/jY2+Hu7/Ly9PbJztbQ1dxJagBAAAAC60lEQVR4nO3b2ZaCMBREUQbDJOP//2wbEGVIFCHKTa+zH7uVRVmBBJQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCpdOzvQQqaq2KmuSrOzQ02lSeRem8rpsQq/ozg72Kj4UkAxEev8awnzs7P1yiIadsfpQXjfZCHhUCzbfmeurdNz6bDRsBWRsB+k0cXxdHjpa0wkTBn3hKnjzRZyEgYk3IeEv2RKWCt1cN9EJ0zjfm7Mq/rAVgUnbLpwnK/zA2tnuQmzJHquuqJq91blJuwmAW8rHbV3q2ITFrOAt7Xz3l2UmrBMlpcHe9fOUhOqRYVhFO/cqtSEy0H6bh/tJ1uhCctqlTB/NSnG9pOt1ISXjxLq825laVFowo9GaRPrF9talJqw3n6macaZ09yi1ISG2cLyriwePwxzi1ITru4s2naxma59TC2KTRjE83FqmQ6yeDaUDS3KTRhMV96h5TTSLD4HQ4uCE9bxePUU5pYL/3mD5o9CcMKgTONc39NNLrV5iK4aNLUoOWHQ38RQtW3nsm6db92i8ISvGBtct+hvwqyzBFxE9DehrcHlQPU1YWNvcNGirwlfNThv0ZOE9eJG1OsGZy36kVBdczU9e7RvAz5b9CFhqfIwSp4XwG+OwUWLPiRUV/33Z4tbGtTvGK635CfUDfb/SO5rt20N9t8m65fLT9g3GD5abDY2qC+lvEg4NjhEvLW4tUFvEj4a7OXq3TzoW8Jpg0PEzfk8SThv8EMeJFw1+O8SHmrQg4QHG/Qg4cEGxSc83KD4hIcblJ6w3L508TXh+vtDEpLw3GwDEpKQhOdznVD2fRr9tdpRw/1HqQndIeEvkXCXUlDC+1NBndsnge/fwyVnp9PGH3p95dm1WMKza4/fI37j+UPXR/c+2X9/hjQI0uO3LsyuMioM9A8Sjy/W1iIhY7Sn2tzpUahdWyXiNDNSxcWtSlCBAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCn+AEXGNosxDBhFAAAAAElFTkSuQmCC';">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Image on Navbar</label>
											<div class="col-sm-10">
												<div class="custom-file input-file-w-30">
													<input type="file" name="img_on_navbar_en" class="custom-file-input" onchange="PreviewImage(this, 'previewImgOnNavBarEn');">
													<label class="custom-file-label">Choose file (.gif | .jpg | .png)</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right"><span class="text-danger">*</span> Title</label>
											<div class="col-sm-10">
												<input class="form-control" name="title_en" placeholder="Title" type="text" value="<?php echo unserialize($service->title)['en']; ?>" required>
											</div>
										</div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Content Top Title</label>
											<div class="col-sm-10">
												<input class="form-control" name="content_top_title_en" placeholder="Title" type="text" value="<?php echo unserialize($service->content_top_title)['en']; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Preview</label>
											<div class="col-sm-10">
												<img id="previewContentTopImgEn" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->content_top_img)['en']); ?>" style="background-color: #fff;" width="18%;" onerror="this.onerror=null;this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXz9Pa5vsq2u8jN0dnV2N/o6u7FydPi5Onw8fS+ws3f4ee6v8v29/jY2+Hu7/Ly9PbJztbQ1dxJagBAAAAC60lEQVR4nO3b2ZaCMBREUQbDJOP//2wbEGVIFCHKTa+zH7uVRVmBBJQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCpdOzvQQqaq2KmuSrOzQ02lSeRem8rpsQq/ozg72Kj4UkAxEev8awnzs7P1yiIadsfpQXjfZCHhUCzbfmeurdNz6bDRsBWRsB+k0cXxdHjpa0wkTBn3hKnjzRZyEgYk3IeEv2RKWCt1cN9EJ0zjfm7Mq/rAVgUnbLpwnK/zA2tnuQmzJHquuqJq91blJuwmAW8rHbV3q2ITFrOAt7Xz3l2UmrBMlpcHe9fOUhOqRYVhFO/cqtSEy0H6bh/tJ1uhCctqlTB/NSnG9pOt1ISXjxLq825laVFowo9GaRPrF9talJqw3n6macaZ09yi1ISG2cLyriwePwxzi1ITru4s2naxma59TC2KTRjE83FqmQ6yeDaUDS3KTRhMV96h5TTSLD4HQ4uCE9bxePUU5pYL/3mD5o9CcMKgTONc39NNLrV5iK4aNLUoOWHQ38RQtW3nsm6db92i8ISvGBtct+hvwqyzBFxE9DehrcHlQPU1YWNvcNGirwlfNThv0ZOE9eJG1OsGZy36kVBdczU9e7RvAz5b9CFhqfIwSp4XwG+OwUWLPiRUV/33Z4tbGtTvGK635CfUDfb/SO5rt20N9t8m65fLT9g3GD5abDY2qC+lvEg4NjhEvLW4tUFvEj4a7OXq3TzoW8Jpg0PEzfk8SThv8EMeJFw1+O8SHmrQg4QHG/Qg4cEGxSc83KD4hIcblJ6w3L508TXh+vtDEpLw3GwDEpKQhOdznVD2fRr9tdpRw/1HqQndIeEvkXCXUlDC+1NBndsnge/fwyVnp9PGH3p95dm1WMKza4/fI37j+UPXR/c+2X9/hjQI0uO3LsyuMioM9A8Sjy/W1iIhY7Sn2tzpUahdWyXiNDNSxcWtSlCBAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCn+AEXGNosxDBhFAAAAAElFTkSuQmCC';">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Content Top Image</label>
											<div class="col-sm-10">
												<div class="custom-file input-file-w-30">
													<input type="file" name="content_top_img_en" class="custom-file-input" onchange="PreviewImage(this, 'previewContentTopImgEn');">
													<label class="custom-file-label">Choose file (.gif | .jpg | .png)</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Content Top Body</label>
											<div class="col-sm-10">
												<textarea class="summernote" name="content_top_body_en"><?php echo unserialize($service->content_top_body)['en']; ?></textarea>
											</div>
										</div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Content Bottom Title</label>
											<div class="col-sm-10">
												<input class="form-control" name="content_bottom_title_en" placeholder="Title" type="text" value="<?php echo unserialize($service->content_bottom_title)['en']; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Preview</label>
											<div class="col-sm-10">
												<img id="previewContentBottomImgEn" src="<?php echo base_url('storage/uploads/images/services/' . unserialize($service->content_bottom_img)['en']); ?>" style="background-color: #fff;" width="18%" onerror="this.onerror=null;this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXz9Pa5vsq2u8jN0dnV2N/o6u7FydPi5Onw8fS+ws3f4ee6v8v29/jY2+Hu7/Ly9PbJztbQ1dxJagBAAAAC60lEQVR4nO3b2ZaCMBREUQbDJOP//2wbEGVIFCHKTa+zH7uVRVmBBJQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCpdOzvQQqaq2KmuSrOzQ02lSeRem8rpsQq/ozg72Kj4UkAxEev8awnzs7P1yiIadsfpQXjfZCHhUCzbfmeurdNz6bDRsBWRsB+k0cXxdHjpa0wkTBn3hKnjzRZyEgYk3IeEv2RKWCt1cN9EJ0zjfm7Mq/rAVgUnbLpwnK/zA2tnuQmzJHquuqJq91blJuwmAW8rHbV3q2ITFrOAt7Xz3l2UmrBMlpcHe9fOUhOqRYVhFO/cqtSEy0H6bh/tJ1uhCctqlTB/NSnG9pOt1ISXjxLq825laVFowo9GaRPrF9talJqw3n6macaZ09yi1ISG2cLyriwePwxzi1ITru4s2naxma59TC2KTRjE83FqmQ6yeDaUDS3KTRhMV96h5TTSLD4HQ4uCE9bxePUU5pYL/3mD5o9CcMKgTONc39NNLrV5iK4aNLUoOWHQ38RQtW3nsm6db92i8ISvGBtct+hvwqyzBFxE9DehrcHlQPU1YWNvcNGirwlfNThv0ZOE9eJG1OsGZy36kVBdczU9e7RvAz5b9CFhqfIwSp4XwG+OwUWLPiRUV/33Z4tbGtTvGK635CfUDfb/SO5rt20N9t8m65fLT9g3GD5abDY2qC+lvEg4NjhEvLW4tUFvEj4a7OXq3TzoW8Jpg0PEzfk8SThv8EMeJFw1+O8SHmrQg4QHG/Qg4cEGxSc83KD4hIcblJ6w3L508TXh+vtDEpLw3GwDEpKQhOdznVD2fRr9tdpRw/1HqQndIeEvkXCXUlDC+1NBndsnge/fwyVnp9PGH3p95dm1WMKza4/fI37j+UPXR/c+2X9/hjQI0uO3LsyuMioM9A8Sjy/W1iIhY7Sn2tzpUahdWyXiNDNSxcWtSlCBAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCn+AEXGNosxDBhFAAAAAElFTkSuQmCC';">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Content Bottom Image</label>
											<div class="col-sm-10">
												<div class="custom-file input-file-w-30">
													<input type="file" name="content_bottom_img_en" class="custom-file-input" onchange="PreviewImage(this, 'previewContentBottomImgEn');">
													<label class="custom-file-label">Choose file (.gif | .jpg | .png)</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Content Bottom Body</label>
											<div class="col-sm-10">
												<textarea class="summernote" name="content_bottom_body_en"><?php echo unserialize($service->content_bottom_body)['en']; ?></textarea>
											</div>
										</div>
										<hr>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label text-left text-md-right">Text Button</label>
											<div class="col-sm-10">
												<input class="form-control" name="text_button_en" placeholder="Title" type="text" value="<?php echo unserialize($service->text_button)['en']; ?>">
											</div>
										</div>
										<hr>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12 text-left text-md-right">
										<button type="submit" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- JS Libraies -->
<script src="<?php echo base_url('resources/back_end/node_modules/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js'); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('resources/back_end/assets/js/page/modules-datatables.js'); ?>"></script>

<script>
    function PreviewImage(input, previewImage) {
        if (input.files && input.files[0]) {
            var reader = new FileReader()

            reader.onload = function (e) {
                $('#' + previewImage).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
