<?php
?>
<?php $this->load->view('alert'); ?>

<div class="col-md-12">
	<div class="col-md-12 row">
		<div class="col-md-3">
			<button class="btn btn-secondary" type="button" id="addFile">New file</button>
			<button class="btn btn-secondary" type="button" id="addDirectory">New folder</button>
		</div>
		<div class="col-md-9">
			<h3>contenu</h3>
		</div>
	</div>
	<div class="col-md-12">
		<div class="modal" tabindex="-1" role="dialog" id="uploadFile">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title form-signin-heading">Upload a file</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<?php echo form_open_multipart('Home/uploadFile', array('class' => 'form-horizontal')); ?>
								<div style="text-align: center" class="modal-body form-horizontal lead">
									<div class="form-group" style="text-align: center">
										<label class="btn btn-default btn-file">
											<input name="file" id="file" type="file"
												   class="form-control-file">
										</label>
										<br>
										<br>
										<button class="btn btn-success" type="submit">Upload</button>
									</div>
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</main>
</div>
