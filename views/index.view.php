<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contacts</title>
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
  <div class="grid">
    <div class="left-pane">
      <?php foreach ($contacts as $contact) : ?>
        <div class="contact">
          <div class="icon" style="background-color: <?= $contact->color ?>">
            <?= $contact->name[0] ?>
          </div>
          <a href="/contact?id=<?= $contact->rowid ?>" class="name">
            <?= $contact->name ?>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="right-pane">
      <form action="add" method="POST">
        <div class="title">Add contact</div>
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email">
        <input type="tel" name="phone" placeholder="Phone">
        <button class="button">Add</button>
      </form>
    </div>
  </div>
</body>
</html>
