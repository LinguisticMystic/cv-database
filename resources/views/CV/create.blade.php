@extends('layout')

@section('title')
    Add new CV
@endsection

<div class="m-4">
    <a href="/">
        Go back
    </a>
</div>

@if(session()->has('message'))
    <div class="ml-4 text-green-600">
        <strong>Success!</strong>
        <span>{{ session()->get('message') }}</span>
    </div>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="ml-4 text-red-600">
            <strong class="font-bold">Error!</strong>
            <span>{{$error}}</span>
        </div>
    @endforeach
@endif

<form action="/add" method="post">
    @csrf

    <fieldset>
        <legend>
            <h1>
                Personal information
            </h1>
        </legend>

        <div class="m-4">
            First name: <input type="text" name="fname" value="{{ old('fname') }}"><br>
            Last name: <input type="text" name="lname" value="{{ old('lname') }}"><br>
            Phone: <input type="text" name="phone" value="{{ old('phone') }}"><br>
            E-mail: <input type="text" name="email" value="{{ old('email') }}"><br>
            Street name: <input type="text" name="street_name" value="{{ old('street_name') }}"><br>
            House number: <input type="text" name="house_number" value="{{ old('house_number') }}"><br>
            City: <input type="text" name="city" value="{{ old('city') }}"><br>
            Postal code: <input type="text" name="postal_code" value="{{ old('postal_code') }}"><br>
            Country: <input type="text" name="country" value="{{ old('country') }}"><br>
        </div>
    </fieldset>

    <fieldset>
        <legend>
            <h1>
                Education
            </h1>
        </legend>

        <div class="m-4">
            School: <input type="text" name="school[]"><br>
            Degree: <input type="text" name="degree[]"><br>
            Major: <input type="text" name="major[]"><br>
            Start date: <input type="date" name="education_start_date[]"><br>
            End date: <input type="date" name="education_end_date[]"><br>
        </div>

        <br>

        <div class="education">
        </div>
        <button type="button"
                onclick="addField(education)">
            + Add school
        </button>
    </fieldset>

    <fieldset>
        <legend>
            <h1>
                Work experience
            </h1>
        </legend>

        <div class="m-4">
            Company: <input type="text" name="company[]"><br>
            Job title: <input type="text" name="job_title[]"><br>
            Start date: <input type="date" name="work_start_date[]"><br>
            End date: <input type="date" name="work_end_date[]"><br>
            Description: <input type="text" name="description[]"><br>
        </div>

        <br>

        <div class="work-experience">
        </div>
        <button type="button"
                onclick="addField(workExperience)"
        >
            + Add work experience
        </button>
    </fieldset>

    <input class="submit-button"
           type="submit"
           value="Add CV"
    >

</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/addFields.js"></script>
