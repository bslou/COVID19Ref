<!--This should include the graphs of every country aligned, and a refrence at the top of page-->
<html>
<head>
<link rel = "icon" href = "https://cdn.pixabay.com/photo/2020/02/27/14/35/connection-4884862_1280.jpg">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Months since start of COVID 19 (November 2019 = 1 and June 2020 = 8)');
      data.addColumn('number', 'USA');
      data.addColumn('number', 'Brazil');
      data.addColumn('number', 'Russia');
      data.addColumn('number', 'Spain');
      data.addColumn('number', 'UK');
      data.addColumn('number', 'India');
      data.addColumn('number', 'Italy');
      data.addColumn('number', 'Germany');
      data.addColumn('number', 'Peru');
      data.addColumn('number', 'Turkey');
      data.addColumn('number', 'Iran');
      data.addColumn('number', 'France');
      data.addColumn('number', 'Chile');
      data.addColumn('number', 'Mexico');
      data.addColumn('number', 'Saudi Arabia');
      data.addColumn('number', 'Canada');
      data.addColumn('number', 'Pakistan');
      data.addColumn('number', 'China');
      data.addColumn('number', 'Qatar');
      data.addColumn('number', 'Bangladesh');
      

      data.addRows([
        [1, 1, 4, 0, 0, 30000, 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [2, 4, 0, 0, 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [3, 24, 50, 2, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [4, 105, 95, 23, 20, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [5,  30051, 2100, 1300, 31000, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [6,  810000, 60000, 113085, 20000, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [7,  700000, 587450, 282100, 17000, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [8, 99000, 131000, 44500, 1200, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5]
      ]);

      var options = {
        chart: {
          title: 'CASES graph over the course of a few months (since November 2019 - June 2020)',
          subtitle: 'Comparing KNOWN CASES of every country'
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
  <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Months since start of COVID 19 (November 2019 = 1 and June 2020 = 8)');
      data.addColumn('number', 'USA');
      data.addColumn('number', 'Brazil');
      data.addColumn('number', 'Russia');
      data.addColumn('number', 'Spain');
      data.addColumn('number', 'UK');
      data.addColumn('number', 'India');
      data.addColumn('number', 'Italy');
      data.addColumn('number', 'Germany');
      data.addColumn('number', 'Peru');
      data.addColumn('number', 'Turkey');
      data.addColumn('number', 'Iran');
      data.addColumn('number', 'France');
      data.addColumn('number', 'Chile');
      data.addColumn('number', 'Mexico');
      data.addColumn('number', 'Saudi Arabia');
      data.addColumn('number', 'Canada');
      data.addColumn('number', 'Pakistan');
      data.addColumn('number', 'China');
      data.addColumn('number', 'Qatar');
      data.addColumn('number', 'Bangladesh');
      

      data.addRows([
        [1, 5, 0, 78, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [2, 110, 0, 190, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [3, 30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [4, 30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [5,  30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [6,  30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [7,  30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [8, 30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5]
      ]);

      var options = {
        chart: {
          title: 'DEATH graph over the course of a few months (since November 2019 - June 2020)',
          subtitle: 'Comparing DEATHS of every country'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Months since start of COVID 19 (November 2019 = 1 and June 2020 = 8)');
      data.addColumn('number', 'USA');
      data.addColumn('number', 'Brazil');
      data.addColumn('number', 'Russia');
      data.addColumn('number', 'Spain');
      data.addColumn('number', 'UK');
      data.addColumn('number', 'India');
      data.addColumn('number', 'Italy');
      data.addColumn('number', 'Germany');
      data.addColumn('number', 'Peru');
      data.addColumn('number', 'Turkey');
      data.addColumn('number', 'Iran');
      data.addColumn('number', 'France');
      data.addColumn('number', 'Chile');
      data.addColumn('number', 'Mexico');
      data.addColumn('number', 'Saudi Arabia');
      data.addColumn('number', 'Canada');
      data.addColumn('number', 'Pakistan');
      data.addColumn('number', 'China');
      data.addColumn('number', 'Qatar');
      data.addColumn('number', 'Bangladesh');
      

      data.addRows([
        [1, 5, 0, 78, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [2, 110, 0, 190, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [3, 30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [4, 30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [5,  30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [6,  30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [7,  30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
        [8, 30051, 30, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5]
      ]);

      var options = {
        chart: {
          title: 'RECOVERY graph over the course of a few months (since November 2019 - June 2020)',
          subtitle: 'Comparing RECOVERIES STATS of every country'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_o'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
<style>
html{scroll-behavior: smooth;}
.header {text-align: center;padding: 10px 16px;background: #D6D6D6;color: #f1f1f1;height: 30px;}
.content {padding: 16px;}
.sticky {position: fixed;top: 0;width: 100%;z-index: 1;}
.sticky + .content {padding-top: 102px;}
.left{float: left;margin: 10px;}.right{float: right;margin: 5px;}
a{
  text-decoration: none;
  color: blue;
}
.ol{
  font-size: 9pt;
}
.ol:hover{
  text-decoration: underline;
}
.ol:focus{
  color: darkorange;
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
      .pic{
        width: 50px;
        height: 50px;
      }
      .ox{
        font-size:13pt; 
        line-height: 1.8;
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
        
</style>
</head>
<body>

<center><h1 style = "letter-spacing: 5px; font-family: courier;">Individual Country Info and More Graphs</h1></center>
<div class = "header" id = "myHeader">
<a href = "index.php" style = "font-size: 14pt; margin-top: 0px;" class = "ol left" Title = "Go back to main page">🏠</a>
<a href = "#graphs" class = "ol left" Title = "Checkout all the different graphs">Graphs</a>
<a href = "#usa" class = "ol left" Title = "Description about USA">USA</a>
<a href = "#brazil" class = "ol left" Title = "Description about Brazil">Brazil</a>
<a href = "#russia" class = "ol left" Title = "Description about Russia">Russia</a>
<a href = "#spain" class = "ol left" Title = "Description about Spain">Spain</a>
<a href = "#uk" class = "ol left" Title = "Description about UK">UK</a>
<a href = "#india" class = "ol left" Title = "Description about India">India</a>
<a href = "#italy" class = "ol left" Title = "Description about Italy">Italy</a>
<a href = "#germany" class = "ol left" Title = "Description about Germany">Germany</a>
<a href = "#peru" class = "ol left" Title = "Description about Peru">Peru</a>
<a href = "#turkey" class = "ol left" Title = "Description about Turkey">Turkey</a>
<a href = "#iran" class = "ol left" Title = "Description about Iran">Iran</a>
<a href = "#france" class = "ol left" Title = "Description about France">France</a>
<a href = "#chile" class = "ol left" Title = "Description about Chile">Chile</a>
<a href = "#mexico" class = "ol left" Title = "Description about Mexico">Mexico</a>
<a href = "#saudi" class = "ol left" Title = "Description about Saudi Arabia">Saudi Arabia</a>
<a href = "#canada" class = "ol left" Title = "Description about Canada">Canada</a>
<a href = "#pakistan" class = "ol left" Title = "Description about Pakistan">Pakistan</a>
<a href = "#china" class = "ol left" Title = "Description about China">China</a>
<a href = "#qatar" class = "ol left" Title = "Description about Qatar">Qatar</a>
<a href = "#bangladesh" class = "ol left" Title = "Description about Bangladesh">Bangladesh</a>
<div id="google_translate_element" style = "float: left; margin-left: 10px; margin-top: 4px;"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</div>
<br><br><br>
<br>
<div id = "graphs">
<center><div id="line_top_x"></div></center><br><br><br>
<center><div id="line_x"></div></center><br><br><br>
<center><div id="line_o"></div></center><br><br><br><br>
</div>
<center>
<div style = "width: 800px; border: none;" id = "usa">
<h1 class = "kj">USA</h1>
<p class = "ox">According to the charts and according to heavy research and calculations, the cases of COVID 19 are steadily decreasing. Also, the cases go up and down back and forth but luckily the cases are trending down as opposed to up. The cases of COVID 19 thus far in the USA were the highest on May 30, 2020. There were over 3700 cases on that day. The second largest day for most cases was June 5, 2020. Luckily there are way more recovered cases for USA than dead cases. The most death USA experienced was on April 22, 2020 with 115 deaths. The ratio for recovered to death is 5:1. All in all there are 500K recoveries in the USA while there are 111K deaths.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "brazil">
<h1 class = "kj">Brazil</h1>
<p class = "ox">Most of the known cases that are in Brazil right now are located in the city os Sao Paulo. This city has a confirmed number of 123K cases. Rio de Janeiro is the second highest city with 59K known coronavirus cases. Brazils recovery to death ratio is approximately 151:18. There are a total of 302K recoveries while there are 36K deaths in Brazil. Brazil had the most known COVID 19 cases on May 30, 2020. The number of cases rose to 33K. The numbers keep going up and down, as on June 1 the numbers dropped down significantly but climbed back up the next day. Brazil is still trending upward on cases according to the past few days. Right now Brazil has the most cases grown. </p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "russia">
<h1 class = "kj">Russia</h1>
<p class = "ox">Russias cases are slowly dropping. According to the stats, Russia has a very low amount of deaths for the amount of cases they have; they have a total of 5K deaths. Luckily for Russia the cases are starting to trend downward. They have weigh more recoveries than deaths. There ratio is about 213:5 for recovery to death. That is very impressive! Russia has a total of about 450K known cases. The most known cases they ever had thus far was on May 11, 2020 when they had a total of 11656 cases in one day. Since then, Russias cases significantly decreased as now they average at about 8K cases daily. You also have to keep in mind that the population of Russia is at 144.5 million. </p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "spain">
<h1 class = "kj">Spain</h1>
<p class = "ox">The cases for Spain decreased greatly. Their social distancing must be going very well! The only unfortunate news for Spain is that they have a significant amount of deaths which is 27K. The highest known amount of cases for Spain happened back on March 26, 2020 with over 9100 cases. Since then, Spains cases have been trending down at a very fast pace. At this point, Spain averages about 350 cases a day which is very incredible. Spain controlled COVID 19 really well, it would be interesting to find out what they did to prevent it. It is currently unknown what Spains recovery amount is. As a result, we cannot calculate the recovery:death ratio.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "uk">
<h1 class = "kj">UK</h1>
<p class = "ox">United Kingdom Covid 19 cases also have been trending down but not as much as Spains. They had a small spike on May 27, 2020 with 4K cases, but that is not their highest amount. Their highest amount of cases in one day happened on May 1, 2020 with about 6.2K cases. The most deaths UK experienced in one day was 1152 on April 9, 2020. Luckily, the deaths in UK have been dropping significantly as now they average way less as they averaged before. Now, they average about 400 deaths daily. UK's recoveries are at this point not full known so recover:death ratio cannot be calculated. Overall, UK has more deaths than Russia and Spain. with about 40K deaths. UK is controlling the virus pretty well thus far. </p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "india">
<h1 class = "kj">India</h1>
<p class = "ox">India in terms of COVID 19 is not looking good. The cases are increasing daily. In fact their highest day of cases of COVID 19 was on June 7, 2020 with almost 10000 cases. A month ago, India was looking good in terms of COVID but because of the large population, many people are getting infected with this virus. In April, India averaged about 400 cases daily but currently India averages about 9600 cases daily. Since India has gotten so many more cases of COVID 19 recently, there have been more deaths that occurred. India reached its peak of deaths on June 6, 2020 with 294 deaths. A month ago India averages about 80 deaths but currently, India averages about 285 deaths. Their recovery to death ratio is 113:6. As they have 113K recoveries while they have 6K deaths.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "italy">
<h1 class = "kj">Italy</h1>
<p class = "ox">Italies cases are decreasing pretty well. Italy is calming the virus down well. The highest cases Italy experienced was back in March 21, 2020 when they reached a total of 6557 cases in one day. Luckily, the cases decreased by quite a bit over the next few months. In fact, in late March Italy averaged about 5700 cases daily, but now they average around 300 cases. Since the crowd is a little older in Italy there is a little bit more deaths that happen there. Italy has a confirmed amount of 34K deaths. On March 27, they had the largest amount of deaths which was 919 deaths in one day. In late March,Italy averaged about 780 deaths daily but now they average about 70 deaths. Italy has a total of 164K recoveries. Their recovery to death ratio is about 82:17.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "germany">
<h1 class = "kj">Germany</h1>
<p class = "ox">Germany handled COVID 19 very well. Germanys worst cases were in the beginning of April/ end of March. During this time Germany averaged about 5200 cases everyday. Today, Germany has a total of 185K cases. Germany average about 450 cases per day recently. Germany has a total of 8.7K deaths which is not that may deaths compared to other countries, and Germany has 169K recoveries almost as much as cases. Their recovery to death ration is 169:8.7.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "peru">
<h1 class = "kj">Peru</h1>
<p class = "ox">Peru has recently got a lot more COVID 19 cases. They are not necessarily improving like some of the European countries at this moment. Their highest day of COVID 19 was not long ago. It was on May 31, 2020 with at least over 8800 cases. Peru has a total of 183K cases, 76K recoveries, and 5K deaths. Their recovery to death ratio is about 15:1.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "turkey">
<h1 class = "kj">Turkey</h1>
<p class = "ox">Turkey is handling COVID 19 well. Their biggest spike of cases happened back in April 11, 2020 with a total of 5100 cases in one day. The highest averege of cases daily also happened during that time with a total of 3900 cases daily. Turkeys highest death rate was 127 on April 19, 2020. During this time, Turkey averaged about 120 deaths daily. Right now Turkey averages about 200 cases daily and 20 deaths daily. Turkey has a total of 133K recoveries. Their recovery to death ratio is 133:4. They have a pretty low amount of deaths of about 4K. </p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "iran">
<h1 class = "kj">Iran</h1>
<p class = "ox">Irans deaths dropped significantly. Their cases on the other hand are still not looking too good. In fact their day with the highest cases they ever had happened on June 4, 2020 where they had over 3500 cases. Their highest day of deaths happened back on April 4, 2020 with 158 deaths in one day. Iran now averages about 57 deaths daily. Their recovery to death ratio is about 129:8. They have a total of 129K recoveries and a total of 8K deaths.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "france">
<h1 class = "kj">France</h1>
<p class = "ox">Frances graph is very inconsistent. Since they have an older crowd. They have more deaths in their country as opposed to other countries. The day when they had the most cases was on March 31, 2020 where they had a little over 7500 cases. Their graph is very inconsistent as on some days they may have way more cases then others. Their graph for deaths is also very inconsistent. They had a total of 5 days when death levels reached over 1000. Their highest death toll in one day is 1438 which happened on April 15, 2020. Luckily, currently, the French only average about 50 deaths daily as opposed to 700 in the middle of April. Frances recovery to death ratio is about 70:29. They have lots of deaths in their country from COVID 19.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "chile">
<h1 class = "kj">Chile</h1>
<p class = "ox">Both of Chiles deaths and cases have been going up drastically. Throughout March and April Chile averaged about 430 cases daily. Now Chile averages almost 5000 cases daily. Their highest day of cases happened on June 1, 2020 when they had 5471 cases. Furthermore, their death rates are not any better either, as they used to average 7 deaths throughout March and April, but now they average about 90 deaths daily. Their highest death rate happened on June 6, 2020 with 93 deaths. Chiles recovery to death ratio is about 95:1. They have a total of 1K deaths in their country. </p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "mexico">
<h1 class = "kj">Mexico</h1>
<p class = "ox">Mexico is not looking too great either at this point. In April, Mexico averaged about 500 new cases daily while now, they average about 3700 cases daily. Mexico has a cumilated a total of 12K deaths due to COVID 19. Their highest day of new cases came on June 4, 2020 when they reached a peak of 4442 cases in a single day. Mexicos recovery to death ratio is about 75:12. This ratio is not as high as some of the other countries, but it is still something the Mexican government needs to keep in mind. </p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "saudi">
<h1 class = "kj">Saudi Arabia</h1>
<p class = "ox">Saudi Arabias new cases graph is very inconsistent, and they are currently not looking good in terms of cases of COVID 19. Saudi Arabia has way less cases then most of the countries with as many people infected as they only have about 642 deaths overall. Saudi Arabias highest day of new cases came on June 6, 2020 when they had 3121 cases. A few weeks ago (end of May) it seemed like the virus was going better for them as they averaged about 1700 cases daily. In mid may Saudi Arabia averaged about 2400 new cases everyday. Saudi Arabias recovery to death ratio is about 355:3. This ratio is very low! They have a total of 71K recoveries from COVID 19 in Saudi Arabia.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "canada">
<h1 class = "kj">Canada</h1>
<p class = "ox">Canada is somewhat controlling the speed of the spread of COVID 19 in its country. Canadas highest day of most new cases was on May 3, 2020 where Canada had gotten a total of 2760 new COVID 19 cases. Throughout April and the beginning of May, Canada averaged about 1800 cases per day, while now (June) they average about 690. Canadas death cases are also pretty controlled, as their average is way less than it was before. On the other hand, Canadas worst death day happend on May 31, 2020 where 222 people died from COVID 19. Canadas recovery to death ratio is about 53:7. They have a total of 7.7K deaths while there are 53K recoveries.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "pakistan">
<h1 class = "kj">Pakistan</h1>
<p class = "ox">Pakistan is not looking too good in terms of COVID 19 new cases. In fact all of their new highest cases are happening right now where they average about 4800 cases per day. Throughout April and May Pakistan averaged about 1000 cases per day. Pakistans recovery to death ratio is 31:1.8. They have 31K recoveries and 1.8K deaths.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "china">
<h1 class = "kj">China</h1>
<p class = "ox">Not much is known about Chinas COVID 19 situation. Chinas recovery to death ratio is about 78:4.6. They have a total of 78K recoveries in the country due to COVID 19 and 4.6K deaths. COVID 19 started in the city of Wuhan in China. China has a total of 83K cases in the country, and it stood at around 83K for a few months.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "qatar">
<h1 class = "kj">Qatar</h1>
<p class = "ox">Qatars is not fully controlling COVID 19 right now. The cases for Qatar are increasing. Their highest COVID 19 case day happened on May 30, 2020 when they had a total of 2355 new cases. Qatar used to have an average of 600 cases in April and the beginning of May, but now the cases jumped up to an average of 2000 new cases daily. Their death to recovery ratio is 205:2. It seems almost unbelievable how Qatar has about 65K cases and only 49 people died from the virus. This may be because Qatar has more of a younger than an older population.</p>
<br>
</div>
<div style = "width: 800px; border: none;" id = "bangladesh">
<h1 class = "kj">Bangladesh</h1>
<p class = "ox">Bangladesh is not fully controlling COVID 19 either. Their average amount of new cases throughout April was about 680, while right now they average about 2380. Bangladesh has a recovery to death ratio of 65:4. They have a total of 811 deaths and 13K recoveries. The amount of cases they have is about 60K. The day when Bangladesh had the most cases was on June 2, 2020 when they had 2911 cases in one day.</p>
<br>
</div>
</center>








<br><br><br> <br><br><br> <br><br>
    <br> <br><br><br><center><form action = "index.php"><div class="stars" data-rating="3">
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
    </div></form></center><br><br><br><center><a href = "https://www.instagram.com/" class= "so" target="_blank"><img src = "https://i.pinimg.com/474x/3c/0b/76/3c0b7683f968df22dfb8a45028ef33df.jpg" class = "pic"></a><a href = "https://twitter.com/explore" class= "so" target="_blank"><img src = "https://static01.nyt.com/images/2014/08/10/magazine/10wmt/10wmt-superJumbo-v4.jpg?quality=90&auto=webp" class = "pic" style = "width: 70px;"></a><a href = "https://www.facebook.com/" class= "so" target="_blank"><img src = "https://uploads-ssl.webflow.com/58268638d015d89e449cb511/5db286ab55881e7a960fc7c4_facebookpublisher-p-500.jpeg" class = "pic" style = "width: 70px; margin-top: 15px;"></a></center> <hr><center><p style = "color: gray; font-size: 8pt;">© Created by Benjamin and Harshith 2020</p></center>
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
</body>
</html>
