let calendarInput = document.querySelector("#calendar");

calendarInput.addEventListener('change', () => {
    console.log(calendarInput.value);
});

@php

    $appointments = App\Appointments::->where('appointment_date', "27-05-2002")

@endphp