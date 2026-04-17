<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitation creater</title>
</head>
<body>
    <h1>Create your EVENT invitation</h1>
    <form action="invitation.php" method="post">
      <h3>Event Details </h3> <br>
      <label for="title">Event Title</label> 
      <input type="text" name="title" id="title" placeholder="Annual Gala Dinner">
      <label for="date">Date</label>
      <input type="date" name="date" id="date">
      <label for="time">Time</label>
      <input type="time" name="time" id="time">
      <label for="type">Event Type</label>
      <select name="type" id="type">
        <option value="wedding">Wedding</option>
        <option value="anniversary">Anniversary</option>
        <option value="baby shower">Baby shower</option>
        <option value="party">Party</option>
        <option value="conference">Conference</option>
        <option value="gala">Gala</option>
      </select>
    </form>
</body>
</html>