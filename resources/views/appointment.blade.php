@extends('master')

@section('content')
<section class="appt-form mt-5">
    <div class="col-lg-12 col-md-12 col-sm-12 d-flex">
        <div class="col-lg-6 col-md-6 col-sm-6 text-center ">
            <img src="{{ config('app.url') }}assets/images/contact-image.jpg" alt="" class="contact-form-img">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-box">
                <div class="container">
                    <h2>Doctor's Appointment Form</h2>
                    <form action="{{ route('appointment.store') }}" method="post">
                        @csrf
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="gender">Gender:</label>
                        <select id="department" name="gender" required>
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        @error('gender')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="phone">Phone No:</label>
                        <input type="text" id="phone" name="phone" required>
                        @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="date">Appointment Date:</label>
                        <input type="date" id="date" name="appointment_date" required>
                        @error('appointment_date')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="department">Department:</label>
                        <select id="department" name="department" required>
                            <option value="">Select Department</option>
                            <option value="General Physician">General Physician</option>
                            <option value="Orthopaedics">Orthopaedics</option>
                            <option value="Ent Surgeon">Ent Surgeon</option>
                            <option value="Obs & Gynaecologist">Obs & Gynaecologist</option>
                            <option value="General & Pediatric Surgeon">General & Pediatric Surgeon</option>
                            <option value="Ophthalmologist">Ophthalmologist</option>
                            <option value="Neuro Surgeon">Neuro Surgeon</option>
                            <option value="Maxillofacial Surgeon">Maxillofacial Surgeon</option>
                            <option value="Cardiologist">Cardiologist</option>
                            <option value="Radiologist">Radiologist</option>
                            <option value="Pathologist">Pathologist</option>
                            <option value="Gastrologist">Gastrologist</option>
                            <option value="Plastic Surgeon">Plastic Surgeon</option>
                            <option value="Child Specialist">Child Specialist</option>
                            <option value="Urologist">Urologist</option>
                            <option value="Anesthetic">Anesthetic</option>
                        </select>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>


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