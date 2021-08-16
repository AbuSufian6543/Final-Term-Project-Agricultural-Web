

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="styles.css">
 
    </head>

    <body>

        <?php include_once("fheader.php"); ?>



        <tr height="500px">

            <?php include_once("fdashboardSidebarHeader.php"); ?>


            <td align="center">
                <table border="1">
                    <h3>Weather Update</h3>
                <table border="1">
                <tr>

                <th>Date</th>
                <th>Temp(in °C)</th>
                <th>Humidity</th>
                <th>Wind(km/h)</th>
                </tr>
 
                <tbody id="data"></tbody>
                </table>
 
                <script>
                var ajax = new XMLHttpRequest();
                ajax.open("GET", "../controller/fweatherData.php", true);
                ajax.send();
 
                ajax.onreadystatechange = function() {
                   if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                console.log(data);
 
                var html = "";
                for(var a = 0; a < data.length; a++) {
                        
                        var date = data[a].date;
                        var temp = data[a].temp;
                        var humidity = data[a].humidity;
                        var wind = data[a].wind;
                
 
                html += "<tr>";
                    html += "<td>" + date + "</td>";
                    html += "<td>" + temp + "</td>";
                    html += "<td>" + humidity + "</td>";
                    html += "<td>" + wind + "</td>";

                html += "</tr>";
                }
                document.getElementById("data").innerHTML += html;
            }
        };
         </script>
                </table>
            </td>
        
        
            <?php include_once("fdashboardSidebarFooter.php"); ?>
            
        </tr>

        <?php include_once("ffooter.php"); ?>


        <script type="text/javascript">

        
            function toggleDarkMode()
            {
                let darkModeStatus = localStorage.getItem("darkModeStatus");
                var content = document.getElementsByTagName("body")[0];
                var darkModeToggler = document.getElementById("darkModeToggler");
                
                if(darkModeStatus == "enabled")
                {
                    darkModeToggler.classList.remove('active');
                    content.classList.remove('dark');

                    localStorage.setItem("darkModeStatus", "disabled" );
                }
                else
                {
                    darkModeToggler.classList.toggle('active');
                    content.classList.toggle('dark');

                    localStorage.setItem("darkModeStatus", "enabled" );

                }
            }


            function updateDarkMode()
            {
                let darkModeStatus = localStorage.getItem("darkModeStatus");
                var content = document.getElementsByTagName("body")[0];
                var darkModeToggler = document.getElementById("darkModeToggler");

                if(darkModeStatus == "enabled")
                {
                    darkModeToggler.classList.toggle('active');
                    content.classList.toggle('dark');

                    localStorage.setItem("darkModeStatus", "enabled");
                }
                else
                {
                    darkModeToggler.classList.remove('active');
                    content.classList.remove('dark');
                    localStorage.setItem("darkModeStatus", "disabled");

                }
            }

        </script>
    </body>
</html>