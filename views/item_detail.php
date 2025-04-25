<h1>Item Detail</h1>
<p>ID: <?= htmlspecialchars($item['id']); ?></p>
<p>Name: <?= htmlspecialchars($item['name']); ?></p>

<a href="/delete/?id=<?= htmlspecialchars($item['id']); ?>">Delete from database?</a>

<a href="/">Back to List</a>

