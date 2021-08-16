<html>

<head>
    <title> Attendence | Leaf </title>
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <td>
                <img src="atd.png" alt="logo" width="300px" height="250px">
            </td>
            
            <td align="right">
                <a href="login.php"> 
            </td>
        </tr>
        
        <tr style="height:150px;">
            <td>
                <h4>Account</h4><br>
                <ul>
                    
                    <li>
                        <a href="login.php">Logout</a>
                    </li>
                </ul>
            </td>
            <td align="center">
                <table border="1">
                    <h3>Successfully Attendence Showed!!!</h3>
                <table border="1">
                
 
                <tbody id="data"></tbody>
                </table>
 
                <script>
                var ajax = new XMLHttpRequest();
                ajax.open("GET", "../controller/manage attendCheck.php", true);
                ajax.send();
 
                ajax.onreadystatechange = function() {
                   if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                console.log(data);
 
                var html = "";
                for(var a = 0; a < data.length; a++) {
                        
                        var date = data[a].date;
                        var attendnamme = data[a].attendnamme;
                    
 
                html += "<tr>";
                    html += "<td>" + date + "</td>";
                    html += "<td>" +attendnamme + "</td>";
                  

                html += "</tr>";
                }
                document.getElementById("data").innerHTML += html;
            }
        };
         </script>
                </table>
            </td>
        </tr>
        
        <tr>
            <td colspan="2" align="center">
                19-39444-1student.aiub.edu
            </td>
        </tr>           
    </table>
</body>
</html>