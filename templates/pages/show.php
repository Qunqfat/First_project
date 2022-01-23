<div class="show">
    <?php $note = $params['note'] ?? null; ?>
    <?php if ($note) : ?>
        <ul>
            <li>Id: <?php echo $note['id'] ?></li>
            <li>Tytuł: <strong><?php echo $note['title'] ?></strong></li>
            <li>
                <div></br><?php echo $note['description'] ?></div></br>
            </li>
            <li>Zapisano: <?php echo $note['created'] ?></li>
        </ul>
        <a href="/?action=edit&id=<?php echo $note['id'] ?>" ?>
            <button>Edytuj</button>
        <?php else : ?>
            <div>Brak notatki do wyświetlenia</div>
        <?php endif; ?>
        <a href="/">
            <button>Powrót do listy notatek</button>
        </a>
</div>