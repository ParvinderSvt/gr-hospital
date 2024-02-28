@extends('master')

@section('content')

<section class="appt-form">
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


@endsection
