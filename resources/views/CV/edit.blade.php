@extends('layout')

@section('title')
    Edit CV
@endsection

<div class="m-4">
    <a href="/">
        Go back
    </a>
</div>

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="ml-4 text-red-600">
            <strong class="font-bold">Error!</strong>
            <span>{{$error}}</span>
        </div>
    @endforeach
@endif

<form action="/{{ $personId }}" method="post">
    @csrf

    <fieldset>
        <legend>
            <h1>
                Personal information
            </h1>
        </legend>

        <div class="m-4">
            First name: <input type="text" name="fname" value="{{ $personInfo->first_name }}"><br>
            Last name: <input type="text" name="lname" value="{{ $personInfo->last_name }}"><br>
            Phone: <input type="text" name="phone" value="{{ $personInfo->phone }}"><br>
            E-mail: <input type="text" name="email" value="{{ $personInfo->email }}"><br>
            Street name: <input type="text" name="street_name" value="{{ $personInfo->street_name }}"><br>
            House number: <input type="text" name="house_number" value="{{ $personInfo->house_number }}"><br>
            City: <input type="text" name="city" value="{{ $personInfo->city }}"><br>
            Postal code: <input type="text" name="postal_code" value="{{ $personInfo->postal_code }}"><br>
            Country: <input type="text" name="country" value="{{ $personInfo->country }}"><br>
        </div>
    </fieldset>

    <fieldset>
        <legend>
            <h1>
                Education
            </h1>
        </legend>

        <div id="currentEducation">

            <input type="hidden" name="deletableFieldsForEducation" value="">

            @foreach($educationInfo as $school)

                <div class="m-4">
                    <input type="hidden" name="education_id[]" value="{{ $school->id }}">
                    School: <input type="text" name="school[]" value="{{ $school->school }}"><br>
                    Degree: <input type="text" name="degree[]" value="{{ $school->degree }}"><br>
                    Major: <input type="text" name="major[]" value="{{ $school->major }}"><br>
                    Start date: <input type="date" name="education_start_date[]"
                                       value="{{ substr($school->education_start_date, 0, strrpos($school->education_start_date, ' ')) }}"><br>
                    End date: <input type="date" name="education_end_date[]"
                                     value="{{ substr($school->education_end_date, 0, strrpos($school->education_end_date, ' ')) }}">
                    <a href="#" class="deleteEducation">Delete</a>
                </div>

            @endforeach
        </div>

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

        <div id="currentWorkExperience">

            <input type="hidden" name="deletableFieldsForWork" value="">

            @foreach($workInfo as $work)

                <div class="m-4">
                    <input type="hidden" name="work_id[]" value="{{ $work->id }}">
                    Company: <input type="text" name="company[]" value="{{ $work->company }}"><br>
                    Job title: <input type="text" name="job_title[]" value="{{ $work->job_title }}"><br>
                    Start date: <input type="date" name="work_start_date[]"
                                       value="{{ substr($work->work_start_date, 0, strrpos($work->work_start_date, ' ')) }}"><br>
                    End date: <input type="date" name="work_end_date[]"
                                     value="{{ substr($work->work_end_date, 0, strrpos($work->work_end_date, ' ')) }}"><br>
                    Description: <input type=" text" name="description[]" value="{{ $work->description }}">
                    <a href="#" class="deleteWorkExperience">Delete</a>
                </div>

            @endforeach
        </div>

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
           value="Update CV"
    >

</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/addFields.js"></script>
