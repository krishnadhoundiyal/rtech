<?php
include('temp/header.php');
?>
    
    <section class="page-banner-wrap bg-cover" style="background-color:black">
    <div class="container">
    <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-heading text-white">
                    <div class="page-title">
                    <h2 style="color:white">With RiskInsurTech
Go beyond strategy & consulting
</h2>
                    </div>
                </div>
</div>
</div>
        <div class="row mt-4">
            <!-- Left Side (40%) -->
            <div class="col-md-6">
                <div class="left-content">
                    
                   
                    <div class="card-grid">
                        <div class="row">

                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card h-100 d-flex custom-card">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <!-- Icon -->
                                        <div class="icon mb-2">
                                            <i class="flaticon-speech-bubble fa-2x"></i>
                                        </div>
                                        <!-- Card Title -->
                                        <h5 class="card-title">15+ years of risk & claims industry experience in our core team alone</h5>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card h-100 d-flex custom-card">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <!-- Icon -->
                                        <div class="icon mb-2">
                                            <i class="flaticon-speech-bubble fa-2x"></i>
                                        </div>
                                        <!-- Card Title -->
                                        <h5 class="card-title">Competitive pricing to ensure you get the best solutions within your budget</h5>
                                    </div>
                                </div>
                            </div>
                        <!-- Add an empty row for spacing -->
                        <div class="row card-row empty-row"></div> 
                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card h-100 d-flex custom-card">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <!-- Icon -->
                                        <div class="icon mb-2">
                                            <i class="flaticon-speech-bubble fa-2x"></i>
                                        </div>
                                        <!-- Card Title -->
                                        <h5 class="card-title">Highly qualified team of data scientists across the globe</h5>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card h-100 d-flex custom-card">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <!-- Icon -->
                                        <div class="icon mb-2">
                                            <i class="flaticon-speech-bubble fa-2x"></i>
                                        </div>
                                        <!-- Card Title -->
                                        <h5 class="card-title">Solutions configured to your insurance business, from strategy through implementation.</h5>
                                    </div>
                                </div>
                            </div>    

                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side (60%) -->
            <div class="col-md-6">
            <div class="calendar-content">
                    
                    <!--<div id="calendar"></div> -->
                    <!-- Calendly embed container -->
                    <div id="calendly-scheduler" style="width: 100%; height: 1000px;"></div>
                

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add FullCalendar CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
<!-- Calendly Inline Widget -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>

<!-- Add Pikaday CSS and JS -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script> -->


<!-- Add your custom CSS -->
<style>
     .left-content h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }
    .custom-card {
        background-color: transparent;
        border: none;
        box-shadow: none;
        color: white;
    }
    .custom-card .card-title {
        color: white;
    }
  /* General fullcalendar layout */
  #calendar {
    max-width: 100%;
    margin: 0 auto;
    padding: 0;
    overflow: hidden; /* Prevent extra scroll */
  }

  /* Make all text, including date numbers, white */
  .fc {
    color: white !important; /* Make all calendar text white */
  }

  /* Weekdays (Mon, Tue, etc.) styling */
  .fc .fc-col-header-cell-cushion {
    font-size: 14px !important; /* Default font size for weekdays */
    color: black !important; /* Ensure weekdays are white */
    background-color: white !important; /* Set background color of weekdays to black */
  }

  /* Remove outer border for the entire calendar */
  .fc .fc-daygrid {
    border: none !important; /* Remove outer border of the grid */
  }

  /* Smaller toolbar title (month name) */
  .fc-toolbar-title {
    color: white !important; /* Ensure the title (e.g., September 2024) is white */
    font-size: 16px; /* Adjust the title font size */
  }

  /* Adjust the toolbar buttons */
  .fc-prev-button, .fc-next-button {
    color: white !important; /* Ensure the navigation buttons are white */
    font-size: 16px; /* Adjust button size */
  }
  #calendly-scheduler {
    width: 100%; /* Full width for the container */
    height: 630px; /* Default height */
    max-width: 100%; /* Ensure it doesn't overflow horizontally */
  }

  /* Mobile-specific adjustments */
  @media (max-width: 768px) {
    /* Apply restrictions for mobile */
    .fc-daygrid-body tr {
      height: 30px !important; /* Minimal row height for mobile */
    }

    /* Smaller font for the day numbers */
    .fc-daygrid-day-number {
      font-size: 10px !important; /* Smaller font size for day numbers on mobile */
      padding: 2px !important; /* Reduce padding around day numbers */
    }

    /* Smaller weekdays font size */
    .fc .fc-col-header-cell-cushion {
      font-size: 10px !important; /* Reduce font size for weekdays (Mon, Tue, etc.) on mobile */
    }

    /* Remove all borders for mobile view, including outer borders */
    .fc-daygrid-day, .fc-daygrid-day-frame, .fc-daygrid {
      border: none !important; /* Remove all borders completely */
    }

    /* Force td to have fixed height only for mobile */
    .fc-daygrid-day-frame {
      height: 30px !important; /* Force each day to have 30px height for mobile */
      padding: 0 !important; /* Remove padding */
      margin: 0 !important; /* Remove margin */
    }

    .fc-daygrid-day {
      height: 30px !important; /* Set the table cell height */
      max-height: 30px !important;
      overflow: hidden; /* Prevent content from overflowing */
    }

    /* Smaller toolbar title */
    .fc-toolbar-title {
      font-size: 14px !important; /* Smaller title font size for mobile */
    }
    
    /* Smaller navigation buttons */
    .fc-prev-button, .fc-next-button {
      font-size: 12px !important; /* Smaller button size for mobile */
    }
  }

  /* Larger devices (remove td restrictions and add margins to the container) */
  @media (min-width: 769px) {
    /* Remove the td height restrictions for larger devices */
    .fc-daygrid-day-frame {
      height: auto !important; /* Let the height adjust automatically */
    }

    .fc-daygrid-day {
      height: auto !important; /* Let the day cells adjust naturally */
      max-height: none !important; /* No height restriction */
      overflow: visible !important; /* Allow content to overflow if necessary */
    }

    .fc-daygrid-body tr {
      height: auto !important; /* Let rows adjust naturally */
    }

    /* Larger font size for day numbers on larger devices */
    .fc-daygrid-day-number {
      font-size: 18px !important; /* Increase font size for day numbers */
      padding: 4px !important; /* Add a bit of padding for larger screens */
    }
      /* Force td to have fixed height only for mobile */
    .fc-daygrid-day-frame {
      height: 60px !important; /* Force each day to have 30px height for mobile */
      padding: 0 !important; /* Remove padding */
      margin: 0 !important; /* Remove margin */
    }
    /* Add margin to the calendar container on larger devices */
    #calendar {
      margin: 20px auto; /* Add margin around the calendar container */
    }
  }
  /* Set basic styles for the Calendly container */
  #calendly-scheduler {
    width: 100%; /* Full width for the container */
    height: 1000px; /* Default height */
    max-width: 100%; /* Ensure it doesn't overflow horizontally */
  }
  @media (min-width: 769px) {
    .left-content {
      margin-top: 150px; /* Add margin to push down the cards */
    }
     /* Add empty rows between the card rows on larger devices */
     .empty-row {
      height: 200px; /* Add space between the rows of cards */
      margin-top:150px;
    }
  .page-banner-wrap {
    padding-top: 10px;
    padding-bottom: 0px !important;
    background-position: 0;
  }
}

  /* Responsive adjustments for smaller devices */
  @media (max-width: 768px) {
    #calendly-scheduler {
      height: 500px; /* Reduce height for smaller screens */
    }
    .custom-card {
      padding: 10px; /* Reduce card padding */
      max-height: 250px;
    }

    .custom-card h5 {
      font-size: 14px !important; /* Reduce card title font size */
      text-align: center;
    }

    .custom-card .icon {
      font-size: 1.5rem; /* Reduce icon size */
    }

    .left-content {
      margin-top: 20px; /* Reduce margin on smaller devices */
    }
  }

  @media (max-width: 480px) {
    #calendly-scheduler {
      height: 450px; /* Further reduce height for very small screens */
    }
  }
</style>



<!-- Initialize the calendar in JavaScript -->
<script>
//      document.addEventListener('DOMContentLoaded', function() {
//     var calendarEl = document.getElementById('calendar');

//     var calendar = new FullCalendar.Calendar(calendarEl, {
//       initialView: 'dayGridMonth', // Month grid view
//       headerToolbar: {
//         left: 'prev',    // Left arrow for previous month
//         center: 'title', // Month title in the center
//         right: 'next'    // Right arrow for next month
//       },
//       height: 'auto', // Adjust height automatically
//       contentHeight: 'auto', // Let content adjust height based on events
//       events: [], // Add events if necessary
//     });
    
//     // Render the calendar
//     calendar.render();
//   });
Calendly.initInlineWidget({
    url: 'https://calendly.com/anirudh-chandnani-riskinsurtech/round1', // Replace with your actual Calendly link
    parentElement: document.getElementById('calendly-scheduler'), // Attach Calendly to this div
    prefill: {},
    utm: {}
  });
</script>

    
   <?php
   include('temp/footer.php');
   ?>

   <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>