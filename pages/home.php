<?php
$title = 'Beranda | Form Survey';
?>

<section class="section-top section-home">
	<div class="container">
		<div class="row">
			<h4 class="mt-5 mb-3 text-white mx-auto">Make your survey!</h4>
		</div>

		<form id="form-maker" method="post" action="index.php?pages=home">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="form-box  mt-5">
						<div class="container mt-4">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group form-group-survey">
										<label for="title">Judul Survey</label>
										<input type="text" class="form-control" id="title" name="title" required />
									</div>
									<div class="form-group form-group-survey">
										<label for="description">Description</label>
										<textarea class="form-control" id="description" name="description" required></textarea>
									</div>
									<div class="form-group form-group-survey">
										<label for="start_date">Start Date</label>
										<input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" id="start_date" name="start_date" required />
									</div>
									<div class="form-group form-group-survey">
										<label for="end_date">End Date</label>
										<input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" id="end_date" name="end_date" required />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="question-box mt-5">
						<div class="container mt-4">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12">
									<div class="question-item item-1">
										<div class="row">
											<div class="question-order">Pertanyaan 1</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-3 col-lg-3">
												<div class="form-group form-group-survey">
													<label for="question">Pertanyaan</label>
													<textarea class="form-control" id="question-1" name="question-1" rows="4" required></textarea>
												</div>
											</div>
											<div class="col-6 col-md-3 col-lg-3">
												<div class="form-group form-group-survey mb-4">
													<label for="question_type">Tipe Pertanyaan</label>
													<div class="select-survey-box">
														<select class=" js-select2" name="question_type-1" id="question_type-1" required>
															<option value=""></option>
															<option value="text">Text</option>
															<option value="pilihan_ganda">Pilihan Ganda</option>
															<option value="checklist">Checklist</option>
														</select>
													</div>
												</div>
												<div class="form-group form-group-survey form-switch-box">
													<label for="requirability" class="mr-3">Required</label>
													<label class="switch ">
														<input type="checkbox" name="requirability-1" id="requirability-1" required />
														<span class="switcher round"></span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-6 col-lg-6">
												<div class="form-group form-group-survey">
													<label for="end_date">Jawaban</label>
													<div class="answer-box preview_answer-1">

													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="empty-form mb-5">
										<button type="button" class=" btn-plus js-add-question"><i class="fas fa-plus"></i></button>
									</div>
									<div class="mt-3 mb-3 text-left">
										<button type="button" class="btn btn-survey bg-success js-add-question ml-3" title="submit">
											<i class="fa fa-plus mr-2"></i>
											Add Question
										</button>
										<button type="submit" class="btn btn-survey bg-success js-save-draft ml-3" title="submit">
											<i class="fa fa-save mr-2"></i>
											Save to Draft
										</button>
										<button type="submit" class="btn btn-survey bg-success js-publish ml-3" title="submit">
											<i class="fa fa-upload mr-2"></i>
											Publish
										</button>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				</div>
		</form>
	</div>
</section>