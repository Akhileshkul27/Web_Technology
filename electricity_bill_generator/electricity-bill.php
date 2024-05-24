<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electricity Bill Calculator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    .container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      margin: auto;
      margin-top: 50px;
    }

    h2 {
      color: #3c4858;
      text-align: center;
      margin-bottom: 30px;
    }

    label {
      font-weight: bold;
      color: #040baa;
    }

    .form-control {
      border-radius: 5px;
      border-color: #040baa;
    }

    button.btn-primary {
      background-color: #040baa;
      border-color: #040baa;
      border-radius: 5px;
      margin-top: 20px;
    }

    button.btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    #result {
      margin-top: 20px;
      border: 2px solid #040baa;
      padding: 15px;
      border-radius: 5px;
    }

    #result p {
      margin-bottom: 5px;
    }

    #result strong {
      font-weight: bold;
      color: #040baa;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2>Electricity Bill Calculator</h2>
    <form id="billForm">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
      </div>

      <div class="form-group">
        <label for="billNo">Bill Number</label>
        <input type="text" class="form-control" id="billNo" placeholder="Enter bill number" required>
      </div>

      <div class="form-group">
        <label for="units">Units Consumed</label>
        <input type="number" class="form-control" id="units" placeholder="Enter units" required>
      </div>

      <button type="submit" class="btn btn-primary btn-block">Calculate Bill</button>
    </form>

    <div id="result"></div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $("#billForm").submit(function (e) {
      e.preventDefault();

      var name = $("#name").val();
      var billNo = $("#billNo").val();
      var units = $("#units").val();

      var totalBill = 0;

      if (units <= 50) {
        totalBill = units * 3.5;
      } else if (units <= 150) {
        totalBill = 50 * 3.5;
        totalBill += (units - 50) * 4;
      } else if (units <= 250) {
        totalBill = 50 * 3.5;
        totalBill += 100 * 4;
        totalBill += (units - 150) * 5.2;
      } else {
        totalBill = 50 * 3.5;
        totalBill += 100 * 4;
        totalBill += 100 * 5.2;
        totalBill += (units - 250) * 6.5;
      }

      var resultText = `<p><strong>Name:</strong> ${name}</p><p><strong>Bill Number:</strong> ${billNo}</p><p><strong>Total Bill Amount:</strong> Rs. ${totalBill.toFixed(2)}</p>`;
      $("#result").html(resultText);
    });
  </script>

</body>

</html>
