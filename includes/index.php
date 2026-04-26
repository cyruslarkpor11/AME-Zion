<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Project</title>
</head>
<body>
   
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for+"firstname">Firstname?</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="lastname">Lastname?</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname...">

            <label for="Age">Age?</label>
            <input id="number" type="number" name="number" placeholder="Number...">

            <label for="email">Email?</label>
            <input id="email" type="text" name="email" placeholder="Email...">

            <label for="contact">Contact?</label>
            <input id="contact" type="number" name="contact" placeholder="Contact...">

            <button type="submit">Submit</button>
        </form>
    </main>

</body>

</html>