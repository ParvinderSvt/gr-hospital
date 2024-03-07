@extends('master')

@section('content')

<section id="brdcrmb-bg-section" class="brdcrmb-bg " style="background-image: url({{url('assets/images/Memorial-Hermann-Header-background.jpg')}});background-blend-mode: multiply;">


			<div class="brdcmb-and-ttl">
				<div class="container">

					<div class="brdcmb-wpr d-flx itm-cntr"><!-- Breadcrumb NavXT 6.6.0 -->
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="{{url('/')}}" class="home"><span property="name">Home</span></a><meta property="position" content="1"></span><span class="brdcmb-arrow"></span><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Patient Care." href="#" class="post post-page"><span property="name">Appointment</span></a></div>



									<h1 style="    margin-top: 40px;
    color: #fff;" class="page-ttl d-flx itm-cntr jstfy-cntr">Appointment</h1>


											           				</div>
			</div>
		</section>
<main>

		<div class="page-cms  py-5">
<section class="appt-form mt-5">
    <div class="col-lg-12 col-md-12 col-sm-12 d-flex">
        <div class="col-lg-6 col-md-6 col-sm-6 text-center ">
            <img src="{{ config('app.url') }}assets/images/contact-image.jpg" alt="" class="contact-form-img">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-box">
                <div class="container">
                    <h2>Doctor's Appointment Form</h2>
                    <form action="#" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="gender">Gender:</label>
                        <select id="department" name="department" required>
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>

                        <label for="phone">Phone No:</label>
                        <input type="text" id="phone" name="phone" required>
                        <label for="date">Appointment Date:</label>
                        <input type="date" id="date" name="date" required>

                        <div style="display: flex;">


                        </div>

                        <label for="department">Department:</label>
                        <select id="department" name="department" required>
                            <option value="">Select Department</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Orthopedics">Orthopedics</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Oncology">Oncology</option>
                            <option value="Dermatology">Dermatology</option>
                        </select>


                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

	</main>

    {{-- <script>
        // Open date picker when any part of the date field is clicked
            var dateInput = document.getElementById('date');
            dateInput.addEventListener('click', function() {
                this.focus(); // Focus on the input
                var evt = new MouseEvent('mousedown', {
                    bubbles: true,
                    cancelable: true,
                    view: window
                });
                this.dispatchEvent(evt); // Dispatch a mousedown event to open the date picker
            });
    </script> --}}
    @endsection
