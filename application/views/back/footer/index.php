<div class="row">
	<div class="col-xl-12">
		<div>
			<!-- <h4 class="header-title m-t-0 m-b-30">Gedung</h4> -->
			<div id="input">
				<form class="form-horizontal" role="form" id="form1" enctype="multipart/form-data">
					<button type="button" id="btn-edit" class="btn btn-info mb-4">
						<i class="fa fa-pencil"></i> Edit Kontent Footer
					</button>
					<div class="row">
						<div class="col-md-12">
							<div class="card-box">
								<h4 class="m-t-0 header-title">Input Header & Deskripsi Footer</h4>
								<hr>
								<div class="row">
									<div class="col-12">
										<div class="p-20">
											<div class="form-group row">
												<label class="col-2 col-form-label">ID</label>
												<div class="col-10">
													<input type="text" id="id" readonly="" class="form-control" placeholder="Auto Generate">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-2 col-form-label">Title *</label>
												<div class="col-10">
													<input required="" id="i_header" name="header" type="text" class="form-control head"
														placeholder="Please fill header......">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-2 col-form-label">Deskripsi *</label>
												<div class="col-10">
													<textarea type="text" id="i_description" class="form-control head" name="description" rows="8"
														placeholder="Please fill description here..."></textarea>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-2 col-form-label">Link Instagram *</label>
												<div class="col-10">
													<input type="text" id="i_link_instagram" class="form-control head" name="link_instagram" rows="8"
														placeholder="Please fill link your instagram here...">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-2 col-form-label">Link Whatsapp *</label>
												<div class="col-10">
													<input type="text" id="i_link_whatsapp" class="form-control head" name="link_whatsapp" rows="8"
														placeholder="Please fill link your whatsapp here...">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-2 col-form-label">Copy right text *</label>
												<div class="col-10">
													<input type="text" id="i_copyrights_text" class="form-control head" name="copyrights_text" rows="8"
														placeholder="Please fill link your copy right text here...">
												</div>
											</div>

											<hr>

											<div class="col-4 offset-8">

												<button onclick="edit_process()" style="display:none;" type="button" id="btn-save"
													class="btn btn-info">
													<i class="fa fa-pencil"></i> Simpan Perubahan
												</button>
											</div>

										</div>
									</div>
								</div>

							</div>
							<!-- end row -->

						</div>
					</div>
			</div>
			</form>
		</div>
	</div>
</div>
</div>

<?php $this->load->view('back/footer/js_footer') ?>