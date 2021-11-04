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
        name: "Dato nuevo", // Event name (required)
        date: "October/29/2021", // Event date (required)
        description: "hola mundo este es un mensaje en el calendario",
        type: "holiday", // Event type (required)
        everyYear: true // Same event every year (optional)
      },
      {
        id: 'event2', // Event's ID (required)
        name: "Cumple años", // Event name (required)
        date: "October/29/2021", // Event date (required)
        description: "Hoy alguien cumple años en algun lugar del planeta",
        type: "birthday", // Event type (required)
        everyYear: true // Same event every year (optional)
      },
      {
        name: "Receso vacacional",
        badge: "11/13 - 11/15", // Event badge (optional)
        date: ["November/13/2021", "November/15/2021"], // Date range
        description: "Licencia de vacaciones por 3 días.", // Event description (optional)
        type: "event",
        /*color: "#63d867"*/ // Event custom color (optional)
      }
    ]


  })
})