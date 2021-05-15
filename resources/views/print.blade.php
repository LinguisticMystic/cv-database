@extends('layout')

@section('title')
    Add new CV
@endsection

<div class="mt-4">

    <div class="mb-8">
        <h1 class="text-2xl">{{ $personInfo->first_name }}</h1>
        <h1 class="text-2xl">{{ $personInfo->last_name }}</h1>

        <div class="ml-4">
            <p><strong>Phone:</strong> {{ $personInfo->phone }}</p>
            <p><strong>E-mail:</strong> {{ $personInfo->email }}</p>
            <p><strong>Address:</strong>
                {{ $personInfo->street_name }}
                {{ $personInfo->house_number }},
                {{ $personInfo->city }},
                {{ $personInfo->postal_code }}
            </p>
        </div>

    </div>

    <div class="ml-4 mb-8 w-96">
        <hr>
    </div>

    <div class="ml-4">

        @if(count($educationInfo) > 0)

            <h1>Education</h1>

            @foreach($educationInfo as $key => $school)
                <div class="ml-4">
                    <p><strong>School:</strong> {{ $educationInfo[$key]->school }}</p>
                    <p><strong>Degree:</strong> {{ $educationInfo[$key]->degree }}</p>
                    <p><strong>Major:</strong> {{ $educationInfo[$key]->major }}</p>
                    <p><strong>Start
                            date:</strong> {{ substr($educationInfo[$key]->education_start_date, 0, strrpos($educationInfo[$key]->education_start_date, ' ')) }}
                    </p>
                    @if(!substr($educationInfo[$key]->education_end_date, 0, strrpos($educationInfo[$key]->education_end_date, ' ')))
                        <p><strong>End date:</strong> Present<p>
                    @else
                        <p><strong>End
                                date:</strong> {{ substr($educationInfo[$key]->education_end_date, 0, strrpos($educationInfo[$key]->education_end_date, ' ')) }}
                        </p>
                    @endif
                    <br>
                </div>
            @endforeach

        @endif
    </div>

    <div class="ml-4">

        @if(count($workInfo) > 0)

            <h1>Work experience</h1>

            @foreach($workInfo as $key => $work)
                <div class="ml-4">
                    <p><strong>Company:</strong> {{ $workInfo[$key]->company }}</p>
                    <p><strong>Job title:</strong> {{ $workInfo[$key]->job_title }}</p>
                    <p><strong>Start
                            date:</strong> {{ substr($workInfo[$key]->work_start_date, 0, strrpos($workInfo[$key]->work_start_date, ' ')) }}
                    </p>
                    @if(!substr($workInfo[$key]->work_end_date, 0, strrpos($workInfo[$key]->work_end_date, ' ')))
                        <p><strong>End date:</strong> Present<p>
                    @else
                        <p><strong>End
                                date:</strong> {{ substr($workInfo[$key]->work_end_date, 0, strrpos($workInfo[$key]->work_end_date, ' ')) }}
                        </p>
                    @endif

                    @if($workInfo[$key]->description)
                        <p><strong>Description:</strong> {{ $workInfo[$key]->description }}</p>
                    @endif

                    <br>
                </div>
            @endforeach

        @endif
    </div>

</div>
