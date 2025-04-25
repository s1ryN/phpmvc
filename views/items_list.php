<h1>Items List</h1>
<ul>
    <?php foreach ($items as $item): ?>
        <li>
            <a href="/detail/?id=<?= $item['id']; ?>"><?= htmlspecialchars($item['name']); ?></a>
        </li>
    <?php endforeach; ?>
</ul>
<a href="/add/">Add New Item</a>
