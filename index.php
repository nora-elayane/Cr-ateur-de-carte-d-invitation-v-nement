<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Invitation creater</title>
</head>
<body>
    <h1>Create your EVENT invitation</h1>
    <div id="formDiv">
      <!-- <h3>Event Details</h3> -->
    <form action="invitation.php" method="post">
      <h3>Event Details </h3> <br>
      <label for="title">Event Title</label><br> 
      <input type="text" name="title" id="title" placeholder="Annual Gala Dinner"><br>
      <label for="date">Date</label><br>
      <input type="date" name="date" id="date"> <br>
      <label for="time">Time</label><br>
      <input type="time" name="time" id="time"><br>
      <label for="type">Event Type</label><br>
      <select name="type" id="type">
        <option value="wedding">Wedding</option>
        <option value="anniversary">Anniversary</option>
        <option value="baby shower">Baby shower</option>
        <option value="party">Party</option>
        <option value="conference">Conference</option>
        <option value="gala">Gala</option>
      </select><br>
      <h3>About the Event</h3>
      <label for="description">Event Description</label> <br>
      <textarea name="description" id="description" cols="20"></textarea>
      <h3>Invitation Content </h3> <br>
      <label for="host">Host Name(s)</label><br>
      <input type="text" name="host" id="host"><br>
      <label for="location">Location</label><br>
      <input type="text" name="location" id="location"><br>
      <label for="message">Message</label><br>
      <textarea name="message" id="message"></textarea><br>
      <button type="submit">Create</button>
    </form>
</div>
</body>
</html>