<?php

//return special characters as string, to prevent sql injection.
function esc($text) {
	return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');

}