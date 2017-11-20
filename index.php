<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","getuser.php?q="+str,true);
            xmlhttp.send();
        }
    }

    function infouser(str) {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","getinfo.php?q="+str,true);
            xmlhttp.send();
        }

    </script>
  </head>
  <body>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600i" rel="stylesheet">
  <p>THE SWEARBOOK</p>

    <form>
  <input type="text" placeholder="Enter a word" class="input" onkeyup="showUser(this.value)" autofocus>
  </form>
  <br>
  <div id="txtHint"><b>Info will be found down below upon typing</b></div>
  </body>
</html>
