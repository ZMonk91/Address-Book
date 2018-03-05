<?php

	$title = 'Generic Phonebook App';

	ob_start();
	include __DIR__ . '/home.php';
	$output = ob_get_clean();

	ob_start();
	include __DIR__ . '/address-list.php';
	$output2 = ob_get_clean();

	include __DIR__ . '/layout.php';
