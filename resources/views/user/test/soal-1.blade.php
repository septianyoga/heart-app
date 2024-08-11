@extends('user.test.components.base-test', ['title' => 'Soal 1'])
@section('content-test')
    <!-- Homepage2 Details Section Start -->
    <section id="test-sec" style="margin-bottom: -50px">
        <div class="test-first-sec">
            <form action="{{ route('soal-2') }}">
                <div class="question-sec" style="padding: 20px 0;">
                    <h2 class="question-sec-title">Umur</h2>
                </div>
                <div class="answer-sec" style="padding: 20px 0;">
                    <div class="container">
                        <div class="age-answer">
                            <div class="age-control">
                                <button id="decrement" class="btn">-</button>
                                <input type="text" id="age" value="0" readonly>
                                <button id="increment" class="btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="question-sec" style="padding: 20px 0;">
                    <h2 class="question-sec-title">Jenis Kelamin</h2>
                </div>
                <div class="answer-sec" style="padding: 20px 0;">
                    <div class="container">
                        <div class="gender-selection">
                            <label class="gender-option">
                                <input type="radio" name="gender" value="wanita">
                                <div class="gender-icon">
                                    <img src="assets/image-new/icon/female-symbol.svg" alt="Wanita">
                                    <span>WANITA</span>
                                </div>
                            </label>
                            <label class="gender-option">
                                <input type="radio" name="gender" value="laki-laki">
                                <div class="gender-icon">
                                    <img src="assets/image-new/icon/male-symbol.svg" alt="Laki-Laki">
                                    <span>LAKI - LAKI</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="tutorial-btn-que">
                    <button type="submit">Lanjut</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Homepage2 Details Section End -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
			const ageInput = document.getElementById('age');
			const incrementBtn = document.getElementById('increment');
			const decrementBtn = document.getElementById('decrement');

			incrementBtn.addEventListener('click', function () {
				ageInput.value = parseInt(ageInput.value) + 1;
			});

			decrementBtn.addEventListener('click', function () {
				if (parseInt(ageInput.value) > 0) {
					ageInput.value = parseInt(ageInput.value) - 1;
				}
			});
		});
    </script>
@endsection
