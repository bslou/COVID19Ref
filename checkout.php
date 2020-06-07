<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Copyright 2020 BEHA Authors. All rights reserved.
     Use of this source code is governed by a BSD-style license that can be
     found in the LICENSE file. -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link rel = "icon" href = "https://cdn.pixabay.com/photo/2020/02/27/14/35/connection-4884862_1280.jpg">
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="News on COVID 19, and help to fundraise for the people in need. " />
	<meta name="description" content="We want to educate people on the dangers of covid 19 and we want to help the people in need by providing the hospitals with more money. We can do that only through fundraising. " />
	<meta name="author" content="COVIDFundRaisers" />
	<meta name="dcterms.rights" content="Copyright &copy; 2020 Covidfunds, All Right Reserved" />

<title>Covid Information and Fundraising</title>
<style>
html{
  scroll-behavior: smooth;
  }
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  }
  .wrap1{
        /*background-color: #F2F4FF;*/
        background-image: url('https://p0.pxfuel.com/preview/51/16/839/blue-blurred-bokeh.jpg');
      }
.top-container {
  background-image: url('https://upload.wikimedia.org/wikipedia/commons/3/3b/COVID-19_Outbreak_World_Map_per_Capita.svg');background-size: 100% 100%;
  padding: 200px;
  text-align: center;
  transition: transform .5s;
  transform: scale(1.0);
  color: black;
  }
.top-container:hover{
  transform: scale(1.1);
  text-decoration: none;
  }
.header {
  text-align: center;
  padding: 10px 16px;
  background: #D6D6D6;
  color: #f1f1f1;
  height: 30px;
  }
.content {
  padding: 16px;
  }
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1;
  }
.sticky + .content {
  padding-top: 102px;
  }
.left{
  float: left;
  margin: 10px;
  }
  .right{
    float: right;
    margin: 5px;
    }
a{
  text-decoration: none;
  color: blue;
}
.ol:hover{
  text-decoration: underline;
}
.ol:focus{
  color: darkorange;
}
.em{
  width: 80%;
  height: 30px;
  padding: 5px;
}
.bo{
  width: 20%;
  height: 30px;
  padding: 2px;
}
.bo:hover{
  cursor: pointer;
}
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

    /* Full-width input fields */
    .pkpk {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size:16px;
    }

    /* Set a style for all buttons */
    .ok {
    background-color: lightblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
    font-size:20px;
    }
    .ok:hover {
    opacity: 0.8;
    }
    .ee{
      letter-spacing: 2px;
      font-family: serif;
    }
    .oo{
      letter-spacing: 5px;
      color: black;
    }
    .ojk{
      color:white;
      background-color: lightblue;
      padding: 10px;
      margin: 20px;
      border-radius: 5px 5px 5px 5px;
      opacity: 1;
    }
    .ojk:hover{
      opacity: 0.7;
    }
    .ow{
      font-weight: 500;
    }
    .so{
     tranform: scale(1.0);
    }
    .so:hover{
      tranform: scale(1.0);
    }

#map-canvas {
    height: 380px;
    width: 540px;
}
      img.l{
        width:300px;
        height: 200px;
        transition: transform .7s;
  transform: scale(1.0);
  margin: 6px;
      }
      img.l:hover{
  transform: scale(1.3);
      }
      hr{
        opacity:0.4;
      }
      .ox{
        font-size:13pt; 
        line-height: 1.8;
      }
      .pic{
        width: 50px;
        height: 50px;
      }
      .kj{
          font-weight: 500;
        }
        .star{
          color: goldenrod;
          font-size: 2.0rem;
          padding: 0 1rem; /* space out the stars */
        }
        .star::before{
          content: '\2606';    /* star outline */
          cursor: pointer;
        }
        .star.rated::before{
          /* the style for a selected star */
          content: '\2605';  /* filled star */
        }
        
        .stars{
            counter-reset: rateme 0;   
            font-size: 2.0rem;
            font-weight: 900;
        }
        .star.rated{
            counter-increment: rateme 1;
        }
        .stars::after{
            content: counter(rateme) '/5';
        }
      @media only screen and (max-width: 700px){
        .ox{
          font-size: 8pt;
          width: 200px;
          text-align: center;
          margin-left: 120px;
          float: left;
        }
        .kj{
          font-size: 9pt;
          width: 200px;
          text-align: center;
          margin-left: 120px;
          float: left;
        }
      }
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 60%;  /* The width is the width of the web page */
       }
       .ksk{
         font-size: 13pt;
         width: 700px; 
         height: 20px; 
         padding: 7px;
       }
       .point:hover{
         cursor: pointer;
       }
       .goog-logo-link {
        display:none !important;
      } 

      .goog-te-gadget{
        color: transparent !important;
      }
      .goog-te-banner-frame.skiptranslate {
        display: none !important;
        } 
      body {
        top: 0px !important; 
      }
      @media only screen and (max-width: 700px){
        .left{
          margin: 2px;
          font-size: 7pt;
        }
        .top-container{
          padding: 100px;
          
        }
        .ksk{
          width: 400px;
          height: 150px;
          
        }
      }
      textarea{
        resize: vertical;
      }

.cookie-container {
  position: fixed;
  bottom: -100%;
  left: 0;
  right: 0;
  background: #2f3640;
  color: #f5f6fa;
  padding: 0 32px;
  box-shadow: 0 -2px 16px rgba(47, 54, 64, 0.39);

  transition: 400ms;
}

.cookie-container.active {
  bottom: 0;
}

.cookie-container a {
  color: #f5f6fa;
}

.cookie-btn {
  background: #e84118;
  border: 0;
  color: #f5f6fa;
  padding: 12px 48px;
  font-size: 18px;
  margin-bottom: 16px;
  border-radius: 8px;
  cursor: pointer;
}
.change:hover{
  opacity:0.8;
  cursor:pointer;
}
table, td, th {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
   
}
th{
  width: 20%;
  font-size: 15pt;
  background-color: #6F84EE;
}
td{
  font-size: 15pt;
}
.shade{
  background-color: #B4BDEA;
}
.uo{
  text-decoration: underline;
}
body{overflow-x: hidden;}
ul {
  display: table;
  margin: 0 auto;
}
.modal2 {
    display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
    }

    /* Modal Content Box */
    .modal-content2 {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%;
    padding-bottom: 30px;
    }

    /* The Close Button (x) */
    .close2 {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
    }
    .close2:hover,.close2:focus {
    color: red;
    cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate2 {
    animation: zoom 0.6s
    }
    .imgcontainer2 {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
    }
    .avatar2 {
    width: 200px;
    height:200px;
    border-radius: 50%;
    }
    .mako{
     resize:vertical;
     width: 90%;
     font-size: 16pt;
     height: 200px;
    }
    .mako:focus{
      outline-color: orange;
    }
</style>

</head>
<body>
<div class = "wrap1">
<a href = "#wow">
<div class = "top-container">
<h1 class = "ee">Covid 19 Fundraising</h1><br>
<p class = "oo">Help fundraise for the cause! Below are statistics.</p><br>
<p class = "oo">Over 6 million cases</p>


</div>
</a>
</div>

 
<div class = "header" id = "myHeader">
<a href = "#graphs" class = "ol left">Graphs</a>
<a href = "#news" class = "ol left">News</a>
<a href = "#wow" class = "ol left">About</a>
<a href = "#map" class = "ol left">Nearby Hospitals</a>
<a href = "#protection" class = "ol left">Protection</a>
<a href = "#symptoms" class = "ol left">Symptoms</a>
<a href = "#treat" class = "ol left">Treatments</a>
<a href = "#forum" class = "ol left">Forum</a>
<a href = "checkout.php" class = "ol left">Individual country stats</a>
<a href = "#" class = "ol left" onclick = "document.getElementById('modal-wrapper3').style.display='block'">Contact Us</a>
<a href = "fundraise.php" class = "ol left">Help Fundraise</a>
<div id="google_translate_element" style = "float: left; margin-left: 10px; margin-top: 4px;"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</div>

<div style = "background-color: #f0f0f0;">



<br><br><br><br>
<br>
<center><a href = "fundraise.php" class = "ojk">Help Us Fundraise</a></center><br>



<center>
                      
<div style = "position: absolute;" id = "graphs">
<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Country', 'Cases'],
  ['United States (1,898,211 Cases)', 190],
  ['Brazil (560,737 Cases)', 56.1],
  ['Russia (432,277 Cases)', 43.2],
  ['Spain (287.406 Cases)', 29.0],
  ['UK (279,856 Cases)', 28.0],
  ['Italy (234,000)', 23.4],
  ['India (217,000 Cases)', 21.7],
  ['Germany (184,737 Cases)', 18.4],
  ['Peru (179,737 Cases)', 17.9],
  ['Turkey (166,737 Cases)', 16.6],
  ['France (161,737 Cases)', 16.1],
  ['Chile (114,737 Cases)', 11.4],
  ['Mexico (97,737 Cases)', 9.7]
  //['Canada (93,737 Cases)', 9.3],
  //['Saudi Arabia (91,737 Cases)', 9.1],
  //['China (83,737 Cases)', 8.3]
]);

  // Optional; add a title and set the width and height of the chart
  
    var options = {'title':'13 Countries with most CoronaVirus Cases', 'width':450, 'height':400};
  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div>
<div id="columnchart_values" style="width: 700px; height: 200px;"></div></center><br><br>
<div class = "content">
 <div style = "position: absolute;top: 500px;">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Recovered", 2000000, "#b87333"],
        ["Dead", 383000, "silver"],
        ["Cases", 6420000, "gold"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Covid-19 live count",
        width: 400,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  </div>        
<div style = "float: right; margin-top: -250px; position: absolute; left: 69%;">
<div id="dual_x_div" style="width: 500px; height: 400px;"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Countries', 'Recovered', 'Dead'],
          ['USA', 429000, 109000],
          ['Brazil', 268000, 32547],
          ['Russia', 196000, 5215],
          ['India', 100000, 5815],
          ['China', 60000, 4634]
        ]);

        var options = {
          width: 440,
          chart: {
            title: 'Death and Recovery Ratio',
            subtitle: ''
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            x: {
              distance: {label: 'Numbers'}, // Bottom x-axis.
              brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
            }
          }
        };

      var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
      chart.draw(data, options);
    };
    </script>
    <noscript>This graph did not work for your browser at this moment!</noscript>
    <br>
  
    
    </div>
    
    <br><br>
    <h1 style = "opacity: 0">WOW</h1><h1 style = "opacity: 0">WOW</h1><h1 style = "opacity: 0">WOW</h1><h1 style = "opacity: 0">WOW</h1><!--<h1 style = "opacity: 0">WOW</h1><h1 style = "opacity: 0">WOW</h1><h1 style = "opacity: 0">WOW</h1>-->
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Months since start of COVID 19 (November 2019 = 1 and June 2020 = 8)');
      data.addColumn('number', 'Recovered');
      data.addColumn('number', 'Death');
      data.addColumn('number', 'Known Cases');

      data.addRows([
        [1,  5, 0, 78],
        [2,  110, 0, 190],
        [3,  30051, 30, 2003],
        [4,  50000, 256, 81000],
        [5,  115000, 45000, 470000],
        [6,  882840, 180000,  3000000],
        [7,  2600000, 150000,  5600000],
        [8,  3240000, 14500,  7000000]
      ]);

      var options = {
        chart: {
          title: 'COVID 19 graph over the course of a few months (since November 2019 - June 2020)',
          subtitle: 'Comparing recovery, death, and cases'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
    <center><div id="line_top_x"></div></center>
    <br><br>
    <center>
    <table>
    <tr class = "shade"><th style = "width: 6%;">#</th><th>Country</th><th>Recovered</th><th>Dead</th><th>Confirmed Cases</th></tr>
    <tr><td>1</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">USA</a></td><td>712K</td><td>110K</td><td>1.93M</td></tr><tr class = "shade"><td>2</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Brazil</a></td><td>289K</td><td>34K</td><td>615K</td></tr><tr><td>3</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Russia</a></td><td>213K</td><td>5K</td><td>450K</td></tr><tr class = "shade"><td>4</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Spain</a></td><td>N/A</td><td>27K</td><td>288K</td></tr><tr><td>5</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">UK</a></td><td>N/A</td><td>40K</td><td>283K</td></tr><tr class = "shade"><td>6</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">India</a></td><td>113K</td><td>6K</td><td>236K</td></tr><tr><td>7</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Italy</a></td><td>164K</td><td>34K</td><td>235K</td></tr><tr class = "shade"><td>8</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Germany</a></td><td>169K</td><td>8.7K</td><td>185K</td></tr><tr><td>9</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Peru</a></td><td>76K</td><td>5K</td><td>183K</td></tr><tr class = "shade"><td>10</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Turkey</a></td><td>133K</td><td>4K</td><td>168K</td></tr><tr><td>11</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Iran</a></td><td>129K</td><td>8K</td><td>167K</td></tr><tr class = "shade"><td>12</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">France</a></td><td>70K</td><td>29K</td><td>153K</td></tr><tr><td>13</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Chile</a></td><td>95K</td><td>1K</td><td>122K</td></tr><tr class = "shade"><td>14</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Mexico</a></td><td>75K</td><td>12K</td><td>105K</td></tr><tr><td>15</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Saudi Arabia</a></td><td>71K</td><td>642</td><td>96K</td></tr><tr class = "shade"><td>16</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Canada</a></td><td>53K</td><td>7.7K</td><td>94K</td></tr><tr><td>17</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Pakistan</a></td><td>31K</td><td>1.8K</td><td>89K</td></tr><tr class = "shade"><td>18</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">China</a></td><td>78K</td><td>4.6K</td><td>83K</td></tr><tr><td>19</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Qatar</a></td><td>41K</td><td>49</td><td>65K</td></tr><tr class = "shade"><td>20</td><td><a href = "checkout.php" class = "ol" Title = "Location to world coronavirus stats over months">Bangladesh</a></td><td>13K</td><td>811</td><td>60K</td></tr>
    </table>
  
    </center>
    <br><br><br>
    <center>
    <div id = "news">
    <h1 class = "ow">News on COVID 19</h1><br>
   <a href = "https://www.newschannelnebraska.com/category/53146/nebraska" target = "_blank"><img src = "http://netnebraska.org/sites/default/files/styles/basic-page-feature-image-standalone/public/page/WebHeader-COVID19.jpg?itok=-kzhlJ_e" alt = "Nebraska News" class = "l"></a><a href = "https://www.kmov.com/news/coronavirus-latest-illinois-sees-192-covid-19-deaths-highest-total-in-24-hour-period/article_4a88ee10-922d-11ea-abef-fb5026b16833.html" target = "_blank"><img src = "https://bloximages.newyork1.vip.townnews.com/kmov.com/content/tncms/assets/v3/editorial/4/0f/40f02848-9497-11ea-aaa0-9f5c3ee7a5fc/5ebb14b78734d.image.jpg?resize=1700%2C956" alt = "KMov" class = "l"></a><a href = "https://www.theguardian.com/us-news/2020/jun/03/california-covid-19-cases-rise-reopen-protest#img-1" target = "_blank"><img src = "https://i.guim.co.uk/img/media/86c5ae98877a45852482eeb769c9e89964bda618/288_175_3673_2205/master/3673.jpg?width=1920&quality=85&auto=format&fit=max&s=8f4aaf6aa549621bff080e468d9c2d31" alt = "guim" class = "l"></a><a href = "https://www.cnn.com/world/live-news/coronavirus-pandemic-06-03-20-intl/h_d65bff4867359b5aa13bb186d71b0718" target = "_blank"><img src = "https://dynaimage.cdn.cnn.com/cnn/digital-images/org/b787a022-d838-400a-be80-ff8c7bda342d.jpg" alt = "CNN" class = "l"></a><br><a href = "https://www.seattletimes.com/seattle-news/health/coronavirus-daily-news-updates-june-3-what-to-know-today-about-covid-19-in-the-seattle-area-washington-state-and-the-world/" target = "_blank"><img src = "https://static.seattletimes.com/wp-content/uploads/2020/06/06022020_gallery_232718-1560x820.jpg" alt = "seattle" class = "l"></a><a href = "https://www.kare11.com/article/news/local/george-floyd/hennepin-county-medical-examiner-releases-george-floyds-full-autopsy-results/89-2f8e7de2-2cfa-4b37-9235-c4c045f497d6" target = "_blank"><img src = "https://media.kare11.com/assets/KARE/images/2f91b68a-aa73-4320-882e-12cc4b4c95cd/2f91b68a-aa73-4320-882e-12cc4b4c95cd_1920x1080.jpg" alt = "media" class = "l"></a><a href = "https://www.hopkinsmedicine.org/coronavirus/patient-stories/gerry-georgene-stephens.html" target = "_blank"><img src = "https://www.hopkinsmedicine.org/sebin/d/s/stephens-reunion-640x440.jpg" alt = "hopkins" class = "l"></a><a href = "https://www.viveusa.mx/bienestar/atleta-relata-y-muestra-como-el-coronavirus-devasto-su-cuerpo" target = "_blank"><img src = "https://www.viveusa.mx/sites/default/files/field/image/coronavirus_atleta.jpg" alt = "seattle" class = "l"></a>
   </div>
   <br><br><br><br>
   <center>
   <div style = "border: none; width: 800px;">
   <center><h1 class = "kj" id = "wow">Our Goal with this Website</h1></center><br>
   <p class = "ox">We want to fund money to help with COVID 19 medication and vaccine. We also want to provide people with more information about the statistics and where the nearest hospitals are located. Please help us by making a fundraiser, all the money we receive will go towards helping with coronavirus. On the bottom we have an anonymous comment section as well. We try to satisfy you with every bit of information about COVID19 ranging from the news to other information. If you have concerns, feel free to contact us, the link for contacting us is at the top. We want everyone to enjoy the website so we are open for any judgement about our website. Thank you for your time, and hopefully everything that is happening in the world right now will be over soon!</p>
   </div>
   </center>
   <br><br><br>

   <br><br><br>
   <div>
<div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=initMap" async defer></script>
    </script>
    </div>
    
    <!--<center><h1>Nearby Hospitals</h1></center>-->
   <!--<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
1d3055.107064379719!2d-105.24845268461586!3d40.02838897941221!2m3!
1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
1s0x0%3A0x40c98e526ceaa2a2!2sInbound+Boulder!5e0!3m2!
1sen!2sus!4v1519683895604" width="800" height="400" 
frameborder="0" style="border:0" allowfullscreen id = "map"></iframe></div>--><br><br><br>
    <br><br>
    <div style = "border: none; width: 800px;">
    <center><h1 class = "kj" id = "protection">How to Prepare and Protect Yourself</h1></center><br>
<p class = "ox">Keep social distancing! Wash your hands for over 20 seconds if you have been outside. Avoid people. Stay home as much as you can. Cover your coughs if you have coronavirus. Do not think about COVID 19 too much. Enjoy life indoors. Get lots of rest. Speak with people over call. Quarantine will hopefully end soon! Everyone stay home and be tough. Do not watch too much coronavirus related material (minimize it). Stsay calm, meditate, and exercise everyday to get rid of anxieties. This pandemic will soon go away!</p>
    </div>
    <br><br><br>
    
    <br><br>
    <div style = "border: none; width: 800px;" id = "symptoms">
    <center><h1 class = "kj">Symptoms</h1></center><br>

<ul style = "width: 300px;">
<center>
  <li><b><u>Coughing</u></b>; long coughs that appear once in a while. You may not have coughs if you have COVID 19.</li><br>
  <li><b><u>Shortness of breath</u></b>; hard to breathe and exercise</li><br>
  <li><b><u>Fever</u></b>; high fever is higher than 104.4 F</li><br>
  <li><b><u>Muscle or body aches</u></b>; if you feel really weak and your bones are achy.</li><br>
  <li><b><u>Head aches</u></b>; when your head hurts the whole day, you may experience nausea if you have head aches.</li><br>
  <li><b><u>Loss of taste or smell</u></b>; if you do not have an apetite and you cannot breathe with your nose.</li><br>
  <li><b><u>Sore throat</u></b>; if your throat hurts a lot, or if your throat feels sick.</li><br>
  <li><b><u>Congestion or runny nose</u></b>; runny nose is usually detected if you cannot breathe with it.</li><br>
  <li><b><u>Vomiting or nause</u></b>; you feel really bad and you vomit a lot, very serious cases involve vomiting.</li><br>
  <li><b><u>Diarrhea</u></b>; diaharrea and vommiting are usually similar to each other.</li>
  </center>




</ul>
<br><br><p class = "ox">

<b><u>Note</u>: </b>You may not have all these symptoms but you may still have COVID 19. Even if you just have a fever out of this whole list, you probably have COVID 19. If you have the coronavirus make sure to stay home, and do not get anyone sick around you. If you are feeling very bad then it may be worth going to the doctor, but it is mainly important to stay home.  
    </div>
    <br><br><br>
    
    <br><br>
    <div style = "border: none; width: 800px;" id = "treat">
    <center><h1 class = "kj">Treatment</h1></center><br>
<h2 class = "ox">What to do if you have COVID 19?</h2><br>
<ul style = "width: 300px;">
<center>
  <li>Stay home; if needed contact medical care.</li><br>
  <li>Check on your symptoms. If you are feeling worse or your symptoms are worse call medical care. </li><br>
  <li>Drink lots of water and rest. Take over-the-counter medicines, such as acetaminophen, to help you feel better.</li><br>
  <li>If you have to see doctor or medical care, notify them in advance that you may hve COVID 19. </li><br>
  <li>Constantly wear face masks. Stand away from people. If you live in a house with others, use a different bathroom and everything different.</li>
  </center>




</ul>
    </div>
    <br><br><br>
    
    <br><br>
   <center><h1 id = "forum" style = "font-weight: 500;">Forum</h1><br>
   <div><form id = "form1"><p id = "comments"></p><br><textarea class = "ksk" id = "copy" placeholder = "Comment with others here..."></textarea><br><button style = "width: 200px; height: 30px;" class = "point" onclick = "func();">Submit comment</button></form></div><br><br>


   <script>
      function func(){
        var x = [];
        var y = document.getElementById('copy').value + "<br>";
        
        x.push(y);
        document.getElementById("comments").innerHTML = x;
        document.getElementById('copy').value = "";
      }
   </script>
   </center>

    <br><br><br> <br><br><br> <br><br>
    <br> <br><br><br><form action = "index.php"><div class="stars" data-rating="3">
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
    </div></form><br><br><br><div style = "background-color: white; width: 300px;">
    
    <center><a href = "https://www.instagram.com/" class= "so" target="_blank"><img src = "https://i.pinimg.com/474x/3c/0b/76/3c0b7683f968df22dfb8a45028ef33df.jpg" class = "pic"></a><a href = "https://twitter.com/explore" class= "so" target="_blank"><img src = "https://static01.nyt.com/images/2014/08/10/magazine/10wmt/10wmt-superJumbo-v4.jpg?quality=90&auto=webp" class = "pic" style = "width: 70px;"></a><a href = "https://www.facebook.com/" class= "so" target="_blank"><img src = "https://uploads-ssl.webflow.com/58268638d015d89e449cb511/5db286ab55881e7a960fc7c4_facebookpublisher-p-500.jpeg" class = "pic" style = "width: 70px; margin-top: 15px;"></a></center></div> <hr><center><p style = "color: gray; font-size: 8pt;">© Created by Benjamin and Harshith 2020</p></center>
    

    </div>
    <div id="modal-wrapper3" class="modal2">

<form class="modal-content2 animate2" action = "index.php" onsubmit = "return checkforblankTh();">

<div class = "imgcontainer2">
<span onclick="document.getElementById('modal-wrapper3').style.display='none'" class="close2" title="Close PopUp">&times;</span>
<h1 style="text-align:center">Contact Us</h1>
</div>
<center><p id = "error3" style = "color: red; width: 300px; background-color: #F9E1E1; border-radius: 10px 10px 10px 10px;"></p></center>
<div class="container2">
<center><textarea placeholder = "Send your concern..." id = "concern" class = "mako" autocomplete= "false" style = "padding: 10px;"></textarea></center>
<button class = "ok" type="submit">Send</button>
</div>

</form>

</div>
    
<script>
function checkforblankTh(){
  var errormessageTh = "";
  if (document.getElementById("concern").value == ""){
    document.getElementById("concern").style.border = "1px solid red";
    errormessageTh += "No problem asked..."
  }else if(document.getElementById("concern").value.length < 20){
    document.getElementById("concern").style.border = "1px solid red";
    errormessageTh += "Must be at least 20 characters..."
  }else{
    document.getElementById("concern").style.borderColor = "lightgray";
  }
  if (errormessageTh != ""){
    document.getElementById("error3").innerHTML = errormessageTh;
    document.getElementById("error3").style.border = "1px solid red";
    return false;
  }else{
    alert("Message sent successfully!")
  }
}


</script>
<div class="cookie-container">
      <p style = "float: left; margin-top: 6px;">
        We use cookies in this website to give you the best experience on our
        site and show you relevant ads.<br> To find out more, read our
        <a href="privacy.php"><u>privacy policy</u></a> and <a href="cookies.php"><u>cookie policy</u></a>. If you have any other questions feel free to <a href = "#" onclick = "document.getElementById('modal-wrapper3').style.display='block'"><u>contact us</u></a>.
        <br>
      </p>

      <button class="cookie-btn change" style = "float: right; margin-top: 6px;">
        Okay
      </button>
    </div>

<script>
        
        //initial setup
        document.addEventListener('DOMContentLoaded', function(){
            let stars = document.querySelectorAll('.star');
            stars.forEach(function(star){
                star.addEventListener('click', setRating); 
            });
            
            let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
            let target = stars[rating - 1];
            target.dispatchEvent(new MouseEvent('click'));
        });

        function setRating(ev){
            let span = ev.currentTarget;
            let stars = document.querySelectorAll('.star');
            let match = false;
            let num = 0;
            stars.forEach(function(star, index){
                if(match){
                    star.classList.remove('rated');
                }else{
                    star.classList.add('rated');
                }
                //are we currently looking at the span that was clicked
                if(star === span){
                    match = true;
                    num = index + 1;
                }
            });
            document.querySelector('.stars').setAttribute('data-rating', num);
        }
    </script>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<script>
    function notifyMe() {
      if (!("Notification" in window)) {
        alert("This browser does not support system notifications");
      }
      else if (Notification.permission === "granted") {
        notify();
      }
      else if (Notification.permission !== 'denied') {
        Notification.requestPermission(function (permission) {
          if (permission === "granted") {
            notify();
          }
        });
      }  
      function notify() {
        var notification = new Notification('Welcome to our Fund', {
          body: "Hey! Welcome to our COVID 19 Fund!",
          icon: 'https://cdn.pixabay.com/photo/2020/02/27/14/35/connection-4884862_1280.jpg',
        });

        notification.onclick = function () {
          window.loaction = "https://COVID19Fundraise--bslou.repl.co";      
        };
        setTimeout(notification.close.bind(notification), 7000); 
      }
}
notifyMe();
    </script>
    <script>
    const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);
</script>


</body>
</html>
<!-- WOW ---
---ILSKDS KS LICENSESLLSK
LSLKLK 
setOnLoadCallbacksdsmlkf
d;;familys-->
