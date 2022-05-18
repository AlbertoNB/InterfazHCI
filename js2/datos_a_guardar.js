$(document).ready(function () {
  $('#calendar').evoCalendar({
    /*theme: "Midnight Blue"*///es para colocar un tema diferente, en este caso azul (es necesario agregar un archivo refenernte al estilo deseado)
    language: "es", //modo español
    /*
    Establecer el tipo de evento;
      evento: event
      día festivo: holiday
      cumpleaños: birthday
      
    */
    calendarEvents: [
      {
        id: 'event1', // Event's ID (required)
        name: "Sustentación", // Event name (required)
        date: "May/19/2022", // Event date (required)
        description: "Sustentación de tesis XD",
        type: "holiday", // Event type (required)
        everyYear: true // Same event every year (optional)
      },
      {
        id: 'event2', // Event's ID (required)
        name: "Cumple años", // Event name (required)
        date: "May/18/2022", // Event date (required)
        description: "Hoy alguien cumple años en algun lugar del planeta",
        type: "birthday", // Event type (required)
        everyYear: true // Same event every year (optional)
      },
      {
        name: "Receso vacacional",
        badge: "5/20 - 5/22", // Event badge (optional)
        date: ["May/20/2022", "May/22/2022"], // Date range
        description: "Licencia de vacaciones por 3 días.", // Event description (optional)
        type: "event",
        /*color: "#63d867"*/ // Event custom color (optional)
      }
    ]


  })
})