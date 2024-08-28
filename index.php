<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="css/main.css">
            <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome for icons (if needed) -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>

    <header class="header" id="header">
    <?php require_once("includes/sections/navigation.php");?>
    <div class="header__text-box">
      <h1 class="heading-primary">
        <span class="heading-primary--sub">Welcome to our website</span>
      </h1>
      <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod praesentium voluptatibus beatae repudiandae ullam accusamus. Saepe vitae ullam consequatur libero.</p>
      <a href="#" class="butn butn--green">Airzone</a>
      <a href="#" class="butn butn--whitee">Enex</a>
    </div>

    <a href="#portfolio"><i class="fas fa-chevron-down hide_on_scroll"></i></a>
    </header>    

    <?php require_once("includes/sections/category.php");?>



    <?php require_once("includes/sections/contact.php");?>

    <?php require_once("includes/sections/footer.php");?>



            <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>