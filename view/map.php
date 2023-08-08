<!DOCTYPE html>
<html lang="en">
<head>
  <title>Map for Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Search Distance</h2>
  <form id="myForm">
    <div class="col-md-4"> 
        <div class="form-group">
          <label>Origin</label>
          <input type="text" class="form-control" placeholder="Origin" name="origin" id="origin">
          <input type="hidden" name="apiType" value="Map">
        </div>
        <div class="form-group">
          <label>Destination</label>
          <input type="text" class="form-control" placeholder="Destination" name="destination" id="destination">
        </div>
    
        <button type="button" onclick="submitData()" class="btn btn-default">Submit</button>
        <p style="font-size: 20px;font-weight: 700;">Distance is:<span id="result"></span></p>
    </div>
  </form>
</div>
    <script>
        function submitData() {
            var formData = new FormData(document.getElementById("myForm"));
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('result').innerHTML = this.responseText;
                }
            };
            xhttp.open('POST', '../api.php', true);
            xhttp.send(formData);
        }
    </script>
</body>
</html>