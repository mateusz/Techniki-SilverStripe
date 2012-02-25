<?php

// Już tutaj tworzymy model składnika - poprzez definicję klasy.
class Ingredient extends DataObject {
	// A tutaj są jego właściwości.
	static $db = array(
		'Name' => 'Text',
		'Salad' => 'Text'
	);
}
