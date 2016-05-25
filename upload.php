<?php

function upload($file){

		$dossier = 'uploads/';
		$fichier = basename($file['name']);
		$taille_maxi = 500000;
		$taille = filesize($file['tmp_name']);
		$extensions = array('.png', '.gif', '.jpg', '.jpeg');
		$extension = strrchr($file['name'], '.'); 
		//Début des vérifications de sécurité...
		if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
		{
			 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
		}
		if($taille>$taille_maxi)
		{
			 $erreur = 'Le fichier est trop gros...';
		}
		if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
		{
			 //On formate le nom du fichier ici...
			 $fichier = strtr($fichier, 
				  'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
				  'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
			 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
			 $date= date("d-m-Y_h-m-s");
			 $fichier = $date."_".rand(1, 1000)."-".$fichier;

			 if(move_uploaded_file($file['tmp_name'], $dossier .$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
			 {
				 
				  return $fichier;
			 }
			 else //Sinon (la fonction renvoie FALSE).
			 {
				  echo 'Echec de l\'upload !';
			 }
		}
		else
		{
			 echo $erreur;
		}
}