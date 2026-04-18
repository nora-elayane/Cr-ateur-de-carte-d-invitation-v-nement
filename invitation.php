<?php
if(isset($_POST["title"]) && $_POST["date"]  && $_POST["time"]  && $_POST["type"] && $_POST["description"]  && $_POST["host"] && $_POST["location"]  && $_POST["message"]){
    // Check date ;
    $dateDonné = date("d-m-Y", strtotime($_POST["date"]));
    $dateActuel = date("d-m-Y", strtotime(date("d-m-Y")));
    if($dateActuel > $dateDonné){
        header("location:index.php") ;
    }
    $type = strtolower($_POST["type"]);
    $description = $_POST["description"];
    $time = $_POST["time"];
    $title = $_POST["title"];
    $host = $_POST["host"];
    $location = $_POST["location"];
    $message = $_POST["message"];
    $cssFile ;
    $pageTitle ; 
    switch($type){
    case "wedding":
    $cssFile = "wedding.css";
    $pageTitle = "Royal Wedding Invitation";
    $imgSrc = "https://images.unsplash.com/photo-1519741497674-611481863552?w=900&auto=format&fit=crop";
    $alt = "Elegant wedding flowers and rings";
    break;

case "anniversary":
    $cssFile = "anniversary.css";
    $pageTitle = "Special Anniversary Invitation";
    $imgSrc = "https://images.unsplash.com/photo-1518199266791-5375a83190b7?w=900&auto=format&fit=crop";
    $alt = "Romantic anniversary candlelight";
    break;

case "baby shower":
    $cssFile = "babyshower.css";
    $pageTitle = "Our Baby Shower Invitation";
    $imgSrc = "https://images.unsplash.com/photo-1555252333-9f8e92e65df9?w=900&auto=format&fit=crop";
    $alt = "Soft pastel baby shower decorations";
    break;

case "party":
    $cssFile = "party.css";
    $pageTitle = "Let's Party!";
    $imgSrc = "https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=900&auto=format&fit=crop";
    $alt = "Vibrant party crowd and lights";
    break;

case "conference":
    $cssFile = "conference.css";
    $pageTitle = "Your Invitation to Our Conference";
    $imgSrc = "https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=900&auto=format&fit=crop";
    $alt = "Professional conference auditorium";
    break;

case "gala":
    $cssFile = "gala.css";
    $pageTitle = "Join Us for a Gala Evening";
    $imgSrc = "https://images.unsplash.com/photo-1530103862676-de8c9debad1d?w=900&auto=format&fit=crop";
    $alt = "Elegant gala evening atmosphere";
    break;
    }
}else{
        header("location:index.php") ;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="<?php echo $cssFile ; ?>">
</head>
<body>
   <div class="card-header">
            <div class="header-icon">
                <img src="<?php echo $imgSrc?>" alt="<?php echo $alt?>">
            </div>
            </div>

        <div class="card-body">
            <h1 class="invitation-title">You Are Invited to <?php echo $title ?></h1>
            <p class="invitation-subtitle"><?php echo $description ?></p>
        </div>

        <div class="card-details">
            <div class="detail-item">
                <span class="detail-label">Hosted by:</span>
                <span class="detail-value"><?php echo $host ?></span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Date:</span>
                <span class="detail-value"><?php echo $dateDonné ?></span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Time:</span>
                <span class="detail-value"><?php echo $time ?></span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Location:</span>
                <span class="detail-value"><?php echo $location ?></span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Event Type:</span>
                <span class="detail-value"><?php echo $type ?></span>
            </div>
        </div>

    </div>
</body>
</html>