$(document).ready(function() {
    $('#calendar').evoCalendar({
        theme: "Orange Coral",
        calendarEvents: [{
            id: 'event1', // Event's ID (required)
            name: "New Year", // Event name (required)
            date: "January/1/2020", // Event date (required)
            description: "The heart touching greetings will make feel anyone very special. Wish your near and dear one with our special greetings.",
            type: "holiday", // Event type (required)
            everyYear: true // Same event every year (optional)
        },
        {
            id: 'event2', // Event's ID (required)
            name: "Labor Day", // Event name (required)
            date: "May/1/2020", // Event date (required)
            description: "Labor Day is an annual holiday calebrate the achievements of workers. Labor Day has its origins in the labor union movement, specifically the eight-hour day movement, which advocated eight hours for work, eight hours for recreation, and eight hours for rest.",
            type: "holiday", // Event type (required)
            everyYear: true // Same event every year (optional)
        },
        {
            id: 'event3', // Event's ID (required)
            name: "Mother's Day", // Event name (required)
            date: "March/21/2020", // Event date (required)
            description: "Mother’s Day is a holiday honoring motherhood that is observed in different forms throughout the world.",
            type: "holiday", // Event type (required)
            everyYear: true // Same event every year (optional)
        },
        {
            name: "Vacation Leave",
            badge: "02/13 - 02/15", // Event badge (optional)
            date: ["February/13/2022", "February/15/2022"], // Date range
            description: "Vacation leave for 3 days.", // Event description (optional)
            type: "event",
            color: "#63d867" // Event custom color (optional)
        }]
    });
});