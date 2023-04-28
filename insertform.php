<!DOCTYPE html>
<html>
  <head>
    <title>Insert Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="my-4">Insert Data</h1>
      <form method="GET" action="insert.php">
        <div class="form-group">
          <label for="id">Id:</label>
          <input type="number" class="form-control" name="id" id="id">
        </div>
        <div class="form-group">
          <label for="sensor1">Sensor 1:</label>
          <input type="number" class="form-control" name="sensor1" id="sensor1">
        </div>
        <div class="form-group">
          <label for="sensor2">Sensor 2:</label>
          <input type="number" class="form-control" name="sensor2" id="sensor2">
        </div>
        <div class="form-group">
          <label for="sensor3">Sensor 3:</label>
          <input type="number" class="form-control" name="sensor3" id="sensor3">
        </div>
        <div class="form-group">
          <label for="sample">Sample:</label>
          <input type="text" class="form-control" name="sample" id="sample">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>
