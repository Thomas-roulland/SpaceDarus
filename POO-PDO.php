<?php
require 'class.php'; //On inclut la classe 
class MysqlConnect{
	// la donnée membre privée (private)
	private $pdo;
	// constructeur initialise la donnée membre
	function __construct() // constructeur de la classe MysqlConnnect
	{
		try 
		{
			//initialisation de $pdo avec une connexion à localhost et po
			$this->pdo = new PDO("mysql:host=localhost;dbname=projetpoo","root","");
			// set the PDO error mode to exception
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // traitement de l'erreur
			} catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
			}
			return $this->pdo; // constructeur retourne la variable de connexion
		}

	function getPdo()
	{
	return $this->pdo;
	}
	
	function getAllData()
	{
		$req=$this->pdo->query('SELECT * FROM tusers');
		$result=$req->fetchAll(); //On stock les résultats dans un tableau 
				$retour=array(); //On créé une liste vide
				
		foreach($result as $value){ //Pour chaque valeur dans le tableau result
					array_push($retour,new Cuser($value)); //On ajoute à la liste retour un nouveau client
				}
		return $retour;

		
	}

	// Fonction qui récupère les données d'un client dont on connait le $nom et instancie l'objet client de nom $nom
	function getOneData($nom){ 
		// exécution de la requête de sélection du client:
		$req=$this->pdo->query("SELECT * FROM tusers WHERE nom= '$nom'");
		// récupération du tableau associatif contenant les données du client:
		$result = $req->fetch(PDO::FETCH_ASSOC); 

		echo $result['pseudo']," ",$result['nom']," ",$result['prenom']," ",$result['motDePasse']," ",$result['DateNaissance']," ",$result['Bac']," ",$result['region']," ",$result['pays']," ",$result['Commentaire'],"<br><br>";
		
		//Instanciation d'un objet Cclient à partir du tableau des données $result
		$leClient=new Cuser($result);
		return $leClient;
	} 
		
	// Fonction qui insère un nouveau client à partir d'un tableau de données
	function putOneData($donnees){ //
		// requête d'insertion d'un nouveau client
		$sql = "INSERT INTO tusers (id, pseudo, nom, prenom, motDePasse, DateNaissance, Bac, region, pays, Commentaire) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$st= $this->pdo->prepare($sql);
		$st->execute($donnees);
		}

	function connexion(){
		$pseudo = $_POST['pseudo']??'';
		$mdp = $_POST['mdp']??'';
		$req=$this->pdo->query("SELECT * FROM tusers WHERE pseudo='$pseudo' AND motDePasse='$mdp'");
		$result=$req->fetch(PDO::FETCH_ASSOC);

		if($pseudo == $result['pseudo'] && $mdp == $result['motDePasse']){
			echo "connexion faite";
			echo $result['pseudo'];
			echo $result['motDePasse'];
			echo "<br>";
		}else{
			echo "connexion perdu";
		}

}}

function affiche(){
	//TESTS
	$db=new MysqlConnect(); // instanciation de la connexion
	$retourData=$db->getAllData(); // récupération d'un tableau de données
	$test=$db->getOneData("roulland");
	$connect=$db->connexion();
	// Affichage des données:
	foreach($retourData as $cli){
			echo $cli ->get_nom();
			echo "----";
			echo $cli ->get_prenom();
			echo "----";
			echo $cli ->get_motDePasse();
			echo "----";
			echo $cli ->get_dateNaissance();
			echo "----";
			echo $cli ->get_bac();
			echo "----";
			echo $cli ->get_region();
			echo "----";
			echo $cli ->get_pays();
			echo "----";
			echo $cli ->get_commentaire();
			
			echo "<br><br>";
		}
}

function create(){
	$db=new MysqlConnect(); // instanciation de la connexion
	$data=array("",$_POST['pseudo'],$_POST['nom'],$_POST['prenom'],$_POST['mdp'],$_POST['date'],$_POST['bac'],$_POST['region'],$_POST['pays'],$_POST['commentaire']); // a changer avec formulaire inscription.
	$db->putOneData($data);
}
//create();
echo affiche();




?>