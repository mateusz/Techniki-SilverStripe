<?php

class KitchenHelper extends Controller {
	// Definiujemy parametry interakcji
	static $url_handlers = array(
		'makeSalad/$Type' => 'makeSalad'
	);

	// Interakcja "zrób sałatkę"
	function makeSalad() {
		// Pobieramy parametr "Type" zdefiniowany powyżej - jaką sałatkę chcemy?
		$raw_type = trim($this->getRequest()->param('Type'));
		if (!$raw_type) throw new Exception("Nie ma takiej sałatki!");

		// Tworzymy trzyskładnikową sałatkę
		// Uwaga: bezpośrednie przypisanie oczyści $raw_type ze złośliwego kodu automatycznie.
		$one = new Ingredient();
		$one->Name = "sałata";
		$one->Salad = $raw_type;
		$one->write();

		$two = new Ingredient();
		$two->Name = "ogórek";
		$two->Salad = $raw_type;
		$two->write();

		$two = new Ingredient();
		$two->Name = "oliwka";
		$two->Salad = $raw_type;
		$two->write();

		// Sałatka gotowa!
		$type = Convert::raw2xml($raw_type);
		return $this->customise(array(
			'Type'=>$type,
			'Title'=>"Gotowe!"
		))->renderWith('Smacznego');
	}
}
