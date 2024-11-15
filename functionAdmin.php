<?php
include 'connex_bdd.php';
// sur cette page  il y a les function pour : 
// 1) recuperer les utilisateurs et leurs roles 
// 2) ajouter un utilisateurs et lui assigner un role 
// 3) modifier un utilisateur et son role
// 4) supprimer un utilisateur et son role

// ici je creé une function pour récupérer les mail et les roles des utilisateur
function getUsersEmailsAndRoles($pdo) { 
    try {
        // LA JE FAIS UNE REQUEETE SQL POUR RÉCUPERER LES EMAILS ET LES ROLES DES UTILISATEUR
        $sql = "SELECT email, role FROM Utilisateurs";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        // JE STOCK LES RESULTAT RECU DANS UN TALBLEAU $USER[]
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $users; // LA Cest le retour de ma function pour pouvoir l'utiliser ensuite dans 
                        //le HTML avec user['email'] et $user['role']
    } catch (PDOException $e) {
        echo "Erreur lors de la récupération des utilisateurs : " . $e->getMessage();
        return [];
    }
}


// function pour ajouter un utilisateur tout en verifiant si l'email existe deja
// si il existe alors on lui affichera un message lui disant que c'est pas possible function addUser($pdo, $nom, $prenom, $email, $password, $role) {
    try {
        // alors ici je Vérifie si un utilisateur avec cet email existe déjà
        $checkEmailQuery = "SELECT email FROM Utilisateurs WHERE email = :email";
        $stmt = $pdo->prepare($checkEmailQuery);
        $stmt->execute(['email' => $email]);

        // Si l'execution me retourne true alors c'est que l'email existe deja
        if ($stmt->fetch()) {
            // on stock l'erreur dans une sessiions pour l'afficher plus tard
            $_SESSION['error'] = "Cet email est déjà utilisé.";
            return false; // Retourne false pour indiquer un échec ici 
        }

        // Hacher le mot de passe pour le sécuriser
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insérer le nouvel utilisateur dans la base de données on peut lui ajouter le nom et le prenom c'est optionelle 
        $insertQuery = "INSERT INTO Utilisateurs (nom, prenom, email, mot_de_passe, role) 
                        VALUES (:nom, :prenom, :email, :mot_de_passe, :role)";
        $stmt = $pdo->prepare($insertQuery);

        $stmt->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'mot_de_passe' => $hashedPassword,
            'role' => $role
        ]);

        // Stocker un message de succès dans la session
        $_SESSION['success'] = "Utilisateur ajouté avec succès.";
        return true; // Retourne true pour indiquer un succès
    } catch (PDOException $e) {
        // Stocker une l'erreur dans la session
        $_SESSION['error'] = "Erreur lors de l'ajout de l'utilisateur : " . $e->getMessage();
        return false; // Retourne false pour indiquer un échec
    }


// ici c'estla function pour ajouter une categorie et quelle soit stocké dans la base de données
function addCategory($pdo, $marque, $modele, $annee, $transmission, $nombre_sieges, $type_carburant, $prix_jour) {
    try {
        // Insérer la nouvelle catégorie dans la base de données
        $insertQuery = "INSERT INTO Categories (marque, modele, annee, transmission, nombre_sieges, type_carburant, prix_jour) 
                        VALUES (:marque, :modele, :annee, :transmission, :nombre_sieges, :type_carburant, :prix_jour)";
        $stmt = $pdo->prepare($insertQuery);

        // Exécuter la requête avec les valeurs fournies
        $stmt->execute([
            'marque' => $marque,
            'modele' => $modele,
            'annee' => $annee,
            'transmission' => $transmission,
            'nombre_sieges' => $nombre_sieges,
            'type_carburant' => $type_carburant,
            'prix_jour' => $prix_jour,
        ]);

        return "Catégorie ajoutée avec succès.";
    } catch (PDOException $e) {
        return "Erreur lors de l'ajout de la catégorie : " . $e->getMessage();
    }
}

// ici il faut qu'on verifie que les donneés sont envoyées via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marque = trim($_POST['marque']);
    $modele = trim($_POST['modele']);
    $annee = intval($_POST['annee']);
    $transmission = $_POST['transmission'];
    $nombre_sieges = intval($_POST['nombre_sieges']);
    $type_carburant = $_POST['type_carburant'];
    $prix_jour = floatval($_POST['prix_jour']);

    // Appeler la fonction pour ajouter la catégorie
    $result = addCategory($pdo, $marque, $modele, $annee, $transmission, $nombre_sieges, $type_carburant, $prix_jour);

}


//// ici c'est la function pour modifier un utilisateur et quelle soit stocké dans la base de données
function updateUser($pdo, $id, $nom, $prenom, $role) {
    try {
        // Construire et exécuter la requête de mise à jour
        $updateQuery = "UPDATE Utilisateurs 
                        SET nom = :nom, prenom = :prenom, role = :role 
                        WHERE id_utilisateur = :id";

        $stmt = $pdo->prepare($updateQuery);
        $stmt->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'role' => $role,
            'id' => $id,
        ]);

        // Retourner un message de succès
        $_SESSION['success'] = "Utilisateur mis à jour avec succès.";
        return true;

    } catch (PDOException $e) {
        // Retourner une erreur en cas d'échec
        $_SESSION['error'] = "Erreur lors de la mise à jour : " . $e->getMessage();
        return false;
    }
}

// Vérifier si le formulaire est soumis via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
    // Récupérer les données envoyées
    $id = intval($_POST['id']); // ID de l'utilisateur
    $nom = trim($_POST['nom']); // Nom
    $prenom = trim($_POST['prenom']); // Prénom
    $role = trim($_POST['role']); // Rôle

    // Appeler la fonction pour mettre à jour l'utilisateur
    if (updateUser($pdo, $id, $nom, $prenom, $role)) {
        header("Location: admin.php"); // Rediriger vers la page d'administration en cas de succès
    } else {
        header("Location: admin.php"); // Rediriger en cas d'erreur
    }
    exit; // Arrêter l'exécution
}


/// Logique pour supprimr un utilisateur qund on clique sur supprimer et qu'on l'envoie via le formulaire post 

function deleteUser($pdo, $id) {
    try {
        // Préparer et exécuter la requête de suppression
        $deleteQuery = "DELETE FROM Utilisateurs WHERE id_utilisateur = :id";
        $stmt = $pdo->prepare($deleteQuery);
        $stmt->execute(['id' => $id]);

        // Vérifier si une ligne a été supprimée
        if ($stmt->rowCount() > 0) {
            $_SESSION['success'] = "Utilisateur supprimé avec succès.";
            return true;
        } else {
            $_SESSION['error'] = "Aucun utilisateur trouvé avec cet ID.";
            return false;
        }

    } catch (PDOException $e) {
        $_SESSION['error'] = "Erreur lors de la suppression : " . $e->getMessage();
        return false;
    }
}

// Traitement lorsque le bouton "Supprimer" est soumis via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
    $id = intval($_POST['id']); // Récupérer l'ID de l'utilisateur

    // Appeler la fonction pour supprimer l'utilisateur
    if (deleteUser($pdo, $id)) {
        header("Location: admin.php"); // Rediriger en cas de succès
    } else {
        header("Location: admin.php"); // Rediriger en cas d'erreur
    }
    exit;
}