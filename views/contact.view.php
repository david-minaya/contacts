<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>contact</title>
  <link rel="stylesheet" href="/styles/contact.css">
</head>
<body>
  <div class="container">
    <div class="icon" style="background-color: <?= $contact->color ?>">
      <?= $contact->name[0] ?>
    </div>
    <div class="name"><?= $contact->name ?></div>
    <div class="contact-info">
      <div class="email"><?= $contact->email ?></div>
      <div class="phone"><?= $contact->phone ?></div>
    </div>
    <a class="delete" href="/delete?id=<?= $contact->rowid ?>">Delete</a>
  </div>
</body>
</html>
