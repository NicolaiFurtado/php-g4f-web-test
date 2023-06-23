

function validateDate(dateString) {
    var date = document.getElementById('date').value;
    var dateI = document.getElementById('date');

    var datePattern = /^(\d{2})\/(\d{2})\/(\d{4})$/;

    if (!datePattern.test(dateString)) {
        return false;
    }

    var [, day, month, year] = dateString.match(datePattern);

    var date = new Date(year, month - 1, day);

    if (
        isNaN(date.getTime()) ||
        date.getDate() !== Number(day) ||
        date.getMonth() !== Number(month) - 1 ||
        date.getFullYear() !== Number(year)
    ) {
        dateI.value = "";
        dateI.style.borderColor = '#A62917';
        dateI.focus();
    }

    return true;
}

function validateTime(timeString) {
    var time = document.getElementById('time').value;
    var timeI = document.getElementById('time');

    var [hours, minutes, seconds] = timeString.split(':');

    var parsedHours = parseInt(hours, 10);
    var parsedMinutes = parseInt(minutes, 10);
    var parsedSeconds = parseInt(seconds, 10);

    if (
        parsedHours <= 23 &&
        parsedMinutes <= 59 &&
        parsedSeconds <= 59
    ) {
        return true;
        timeI.style.borderColor = '#25a617';
    }

    timeI.value = "";
    timeI.style.borderColor = '#A62917';
    timeI.focus();
}

function validateCreateForm(){
    var serieName = document.getElementById('serieName').value;
    var serieNameI = document.getElementById('serieName');

    var channel = document.getElementById('channel').value;
    var channelI = document.getElementById('channel');

    var category = document.getElementById('category').value;
    var categoryI = document.getElementById('category');

    var date = document.getElementById('date').value;
    var dateI = document.getElementById('date');

    var time = document.getElementById('time').value;
    var timeI = document.getElementById('time');

    if(!serieName){
        serieNameI.style.borderColor = '#A62917';
        serieNameI.focus();
    } else if(!channel){
        channelI.style.borderColor = '#A62917';
        channelI.focus();
    } else if(!category){
        categoryI.style.borderColor = '#A62917';
        categoryI.focus();
    } else if(!date){
        dateI.style.borderColor = '#A62917';
        dateI.focus();
    } else if(!time){
        timeI.style.borderColor = '#A62917';
        timeI.focus();
    } else {
        document.getElementById('formCreateSerie').submit();
    }
}