<?php

function getTodos($pdo) {
    $query = $pdo->prepare("SELECT * FROM todos");
    $query->execute();

    $todos = $query->fetchAll(PDO::FETCH_ASSOC);

    return $todos;
}
