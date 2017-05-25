<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Nom', $_POST['imObjectForm_7_1'], '', false);
	$form->setField('Prénom ', $_POST['imObjectForm_7_2'], '', false);
	$form->setField('Adresse', $_POST['imObjectForm_7_3'], '', false);
	$form->setField('Code postal ', $_POST['imObjectForm_7_4'], '', false);
	$form->setField('Ville', $_POST['imObjectForm_7_5'], '', false);
	$form->setField('Email (courriel) ', $_POST['imObjectForm_7_6'], '', false);
	$form->setField('N° téléphone gsm/portable', $_POST['imObjectForm_7_7'], '', false);
	$form->setField('Votre demande', $_POST['imObjectForm_7_8'], '', false);
	$form->setField('Date réservation de votre promenade', $_POST['imObjectForm_7_9'], '', false);
	$form->setField('Heure souhaitee', $_POST['imObjectForm_7_10'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'jsactive' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_7_6'] != "" ? $_POST['imObjectForm_7_6'] : 'valerie.abadie@gmail.com', 'valerie.abadie@gmail.com', 'Message sur le site "Lamas et promenades" ', 'Message de réservation ou contact d\'un client sur le site "lamas et promenades 66.fr"

En prendre note et y répondre afin de satisfaire le client. 

le message ci dessous est celui identifié sur le site : ', false);
		$form->mailToCustomer('valerie.abadie@gmail.com', $_POST['imObjectForm_7_6'], 'Message sur le site "Lamas et promenades 66" ', 'Je vous remercie de votre confiance,  dés reception de votre message nous prendrons contact avec vous afin de vous répondre le plus rapidement possible.
cordialement


Val et Pat
Elevage du Puig de l\'Agle
66130 Montalba le Chateau

', true);
		@header('Location: ../message-reponse-contact-site-.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file