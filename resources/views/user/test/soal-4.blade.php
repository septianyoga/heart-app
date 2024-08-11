@extends('user.test.components.base-test', ['title' => 'Soal 4'])
@section('content-test')

		<!-- Homepage2 Details Section Start -->
		<section id="test-sec">
			<div class="test-first-sec">
				<form id="questionForm" action="{{ route('soal-5') }}">
					<div class="question-sec">
						<h2 class="question-sec-title">Perokok</h2>
					</div>
					<div class="answer-sec">
						<div class="container">
							<label class="choice-option mb-3">
								<input type="radio" name="choice" value="Ya"  onclick="autoSubmit()">
								<div class="choice-icon">
									<span>Ya</span>
								</div>
							</label>
							<label class="choice-option-no">
								<input type="radio" name="choice" value="Tidak"  onclick="autoSubmit()">
								<div class="choice-icon">
									<span>Tidak</span>
								</div>
							</label>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- Homepage2 Details Section End -->

@endsection
