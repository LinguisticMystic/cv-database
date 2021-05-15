const education = '<div class="m-4">' +
    '<input type="hidden" name="education_id[]" value="0">' +
    'School: <input type="text" name="school[]"><br>' +
    'Degree: <input type="text" name="degree[]"><br>' +
    'Major: <input type="text" name="major[]"><br>' +
    'Start date: <input type="date" name="education_start_date[]"><br>' +
    'End date: <input type="date" name="education_end_date[]">' +
    '<a href="#" class="delete">Delete' +
    '</a>' +
    '<br><br>'

const workExperience = '<div class="m-4">' +
    '<input type="hidden" name="work_id[]" value="0">' +
    'Company: <input type="text" name="company[]"><br>' +
    'Job title: <input type="text" name="job_title[]"><br>' +
    'Start date: <input type="date" name="work_start_date[]"><br>' +
    'End date: <input type="date" name="work_end_date[]"><br>' +
    'Description: <input type="text" name="description[]">' +
    '<a href="#" class="delete">Delete' +
    '</a>' +
    '<br><br>'


$(document).ready(function () {

    addField = function (fieldName) {

        let wrapper = null

        if (fieldName.includes('school')) {
            wrapper = $(".education");
        } else {
            wrapper = $(".work-experience");
        }

        $(wrapper).append(fieldName);

        $(wrapper).on('click', '.delete', function (e) {
            e.preventDefault();
            $(this).parent('div').remove();
        })
    }

    let deletableFields = {
        education: [],
        workExperience: []
    }

    $("#currentEducation").on("click", "a.deleteEducation", function () {
        deletableFields.education.push($(this).parent()[0]['firstElementChild'].value)
        $('input[name="deletableFieldsForEducation"]').val(JSON.stringify(deletableFields.education));
        $(this).parent().remove();
    });

    $("#currentWorkExperience").on("click", "a.deleteWorkExperience", function () {
        deletableFields.workExperience.push($(this).parent()[0]['firstElementChild'].value)
        $('input[name="deletableFieldsForWork"]').val(JSON.stringify(deletableFields.workExperience));
        $(this).parent().remove();
    });

});
