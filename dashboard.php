<?php
error_reporting(0);
session_start();
include("config.php");
include("header.php");
include("sidebar.php");
?>

<div class="content-wrapper">
  <!-- edit by sizar -->
  <section class="content-header">
    <h1>Dashboard
      <small>
        <?php
        if ($_SESSION['role_id'] == 2) {
          echo $_SESSION['address'];
        }
        ?>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">


    <?php
    if ($_SESSION['role_id'] == 1) {

      include('dashboard_1.php');

    } else if ($_SESSION['role_id'] == 2) {
      
      include('dashboard_2.php');

    } else if ($_SESSION['role_id'] == 3) {

      include('dashboard_3.php');
    }
    include("footer.php"); 
    ?>
    <footer class="main-footer">
        <strong>Copyright &copy; 2023 <a href="">Venture Solutions Ltd</a>.</strong> All rights reserved.
    </footer>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-FpQCe0q2wSMUEkCg-QaKQqXn3UaeZXY&callback=initMap&v=weekly" defer></script>

    <script>
      console.log("check");

      ////Map Start
      $('#vector_map').vectorMap({
        map: 'bd-map'
      });


      // The following example creates five accessible and
      // focusable markers.
      function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: {
            lat: 23.7989972,
            lng: 90.3780921
          },
        });
        // Set LatLng and title text for the markers. The first marker (Boynton Pass)
        // receives the initial focus when tab is pressed. Use arrow keys to
        // move between markers; press tab again to cycle through the map controls.
        const tourStops = [
          [{
            lat: 23.7515137,
            lng: 90.4189184
          }, "Richman-Lubnan, Taltola"],
          [{
            lat: 23.8063487,
            lng: 90.3641457
          }, "Mirpur Road"],
        ];
        // Create an info window to share between markers.
        const infoWindow = new google.maps.InfoWindow();

        // Create the markers.
        tourStops.forEach(([position, title], i) => {
          const marker = new google.maps.Marker({
            position,
            map,
            title: `${i + 1}. ${title}`,
            label: `${i + 1}`,
            optimized: false,
            icon: 'blue.png'
          });

          // Add a click listener for each marker, and set up the info window.
          marker.addListener("click", () => {
            infoWindow.close();
            infoWindow.setContent(marker.getTitle());
            infoWindow.open(marker.getMap(), marker);
          });
        });
      }

      window.initMap = initMap;

      //Map End

      // Daily Attendance Percentage
      /******Data for Lubnan******/
      //dognut chart data

      var donutEl = document.getElementById("attendance_summury").getContext("2d");
      var donut = new Chart(donutEl).Doughnut(
        // Datas
        [{
            value: 60,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Present"
          },
          {
            value: 15,
            color: "#F7464A",
            highlight: "#FF5A5E",
            label: "Absent"
          },
          {
            value: 5,
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "On Leave"
          }
        ],
        // Options
        {
          segmentShowStroke: true,
          segmentStrokeColor: "#fff",
          segmentStrokeWidth: 2,
          percentageInnerCutout: 50,
          animationSteps: 100,
          animationEasing: "easeOutBounce",
          animateRotate: true,
          animateScale: false,
          responsive: true,
          maintainAspectRatio: true,
          showScale: true,
          animateScale: true
        });

      /******Data for Infinity******/
      //dognut chart data

      var donutEl = document.getElementById("attendance_summury_infinity").getContext("2d");
      var donut = new Chart(donutEl).Doughnut(
        // Datas
        [{
            value: 45,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Present"
          },
          {
            value: 7,
            color: "#F7464A",
            highlight: "#FF5A5E",
            label: "Absent"
          },
          {
            value: 5,
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "On Leave"
          }
        ],
        // Options
        {
          segmentShowStroke: true,
          segmentStrokeColor: "#fff",
          segmentStrokeWidth: 2,
          percentageInnerCutout: 50,
          animationSteps: 100,
          animationEasing: "easeOutBounce",
          animateRotate: true,
          animateScale: false,
          responsive: true,
          maintainAspectRatio: true,
          showScale: true,
          animateScale: true
        });


      // End Attendance Percentage

      // Top 5 Outlets based on month
      /******Data for Lubnan******/

      // pie chart data
      var pieData = [{
          value: 120000,
          color: "#4ACAB4",
          label: "Lubnan: New Market Branch"
        },
        {
          value: 95000,
          color: "#FF8153",
          label: "Infinity: Basundhara City Branch"
        },
        {
          value: 83000,
          color: "#FFEA88",
          label: "Lubnan: Baily Road Branch"
        }
      ];
      // pie chart options
      var pieOptions = {
        segmentShowStroke: false,
        animateScale: true
      }
      // get pie chart canvas
      var countries = document.getElementById("top_lubnan").getContext("2d");
      // draw pie chart
      new Chart(countries).Pie(pieData, pieOptions);


      /******Data for Infinity******/

      // pie chart data
      var pieData = [{
          value: 120000,
          color: "#4ACAB4",
          label: "Lubnan New Market Branch"
        },
        {
          value: 95000,
          color: "#FF8153",
          label: "Basundhara City Branch"
        },
        {
          value: 83000,
          color: "#FFEA88",
          label: "Baily Road Branch"
        }
      ];
      // pie chart options
      var pieOptions = {
        segmentShowStroke: false,
        animateScale: true
      }
      // get pie chart canvas
      var countries = document.getElementById("top_infinity").getContext("2d");
      // draw pie chart
      new Chart(countries).Pie(pieData, pieOptions);

      // start last 7 days sales progress
      /******Data for Lubnan******/

      // line chart data
      var buyerData = {
        labels: ["Sat", "Sun", "Mon", "Tue", "Wed", "Thursday", "Friday"],
        datasets: [{
          fillColor: "rgba(172,194,132,0.4)",
          strokeColor: "#ACC26D",
          pointColor: "#fff",
          pointStrokeColor: "#9DB86D",
          data: [60000, 75000, 55000, 90000, 80000, 50000, 100000]
        }]
      }
      // get line chart canvas
      var buyers = document.getElementById('weekly_lubnan').getContext('2d');
      // draw line chart
      new Chart(buyers).Line(buyerData);


      /******Data for Infinity******/

      // line chart data
      var buyerData = {
        labels: ["Sat", "Sun", "Mon", "Tue", "Wed", "Thursday", "Friday"],
        datasets: [{
          fillColor: "rgba(172,194,132,0.4)",
          strokeColor: "#ACC26D",
          pointColor: "#fff",
          pointStrokeColor: "#9DB86D",
          data: [50000, 65000, 70000, 100000, 35000, 30000, 95000]
        }]
      }
      // get line chart canvas
      var buyers = document.getElementById('weekly_infinity').getContext('2d');
      // draw line chart
      new Chart(buyers).Line(buyerData);

      //End last 7 days sales progress

      //sales vs target position bar
      /******Data for Lubnan******/
      // bar chart data
      var barData = {
        labels: ["Baily Road", "Basundhara City", "Jamuna Feture Park", "Khilgaon", "Wari", "Malibag", "Mirpur", "Gulshan Pink City", "Shimanto Square ", "Banani", "Badda", "Kuril"],
        datasets: [{
            fillColor: "#ABE3DC",
            strokeColor: "#ABE3DC",
            data: [60000, 75000, 73000, 70000, 85000, 54000, 60000, 75000, 73000, 70000, 85000, 56500]
          },
          {
            fillColor: "#CCE3AB",
            strokeColor: "#CCE3AB",
            data: [50000, 65000, 62000, 67000, 65000, 53000, 50000, 65000, 62000, 67000, 65000, 63000]
          },
          {
            fillColor: "#E8B4C3",
            strokeColor: "#E8B4C3",
            data: [70000, 75000, 54000, 63000, 75000, 53000, 70000, 75000, 54000, 63000, 75000, 53000]
          }
        ]
      }
      // get bar chart canvas
      var income = document.getElementById("income_lubnan").getContext("2d");
      // draw bar chart
      new Chart(income).Bar(barData);

      /******Data for Infinity******/
      // bar chart data
      var barData = {
        labels: ["Last Year", "This Year", "Target"],
        datasets: [{
            fillColor: "#ABE3DC",
            strokeColor: "#ABE3DC",
            data: [60000, 75000, 75000]
          },
          {
            fillColor: "#CCE3AB",
            strokeColor: "#CCE3AB",
            data: [50000, 74000, 80000]
          },
          {
            fillColor: "#E8B4C3",
            strokeColor: "#E8B4C3",
            data: [70000, 80000, 70000]
          }
        ]
      }

      // get bar chart canvas
      var income = document.getElementById("income_infinity").getContext("2d");
      // draw bar chart
      new Chart(income).Bar(barData);


      // End Sales vs target position bar
    </script>



    <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>

