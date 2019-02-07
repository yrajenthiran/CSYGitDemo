<?php
function find($pdo, $table, $field, $value) {
	$stmt = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . ' = :value');

	$criteria = [
		'value' => $value
	];
	$stmt->execute($criteria);

	return $stmt->fetchAll();
}


function findAll($pdo, $table) {
	$stmt = $pdo->prepare('SELECT * FROM ' . $table);

	$stmt->execute();

	return $stmt->fetchAll();
}

function insertJoke($pdo, $joke) {
	$sql = 'INSERT INTO `joke` (joketext,jokedate) VALUES (:joketext, :jokedate)';

	$stmt = $pdo->prepare($sql);

	$stmt->execute($joke);
}


function deleteJoke($pdo, $id) {
	$stmt = $pdo->prepare('DELETE FROM joke WHERE id = :id');
	$criteria = [
		'id' => $id
	];
	$stmt->execute($criteria);
}