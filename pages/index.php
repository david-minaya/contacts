<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contacts</title>
  <link rel="stylesheet" href="style/index.css">
</head>
<body>
  <div class="grid">
    <div class="left-pane">
      <?php foreach ($contacts as $contact): ?>
      <div class="contact">
        <div class="icon">C</div>
        <div class="name"><?=$contact->name?></div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="right-pane">
      <form action="add_contact" method="POST">
        <div class="title">Add contact</div>
        <input type="text" name="name" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="tel" name="phone" placeholder="Telefono">
        <button class="button">Add</button>
      </form>
    </div>
  </div>
</body>
</html>
