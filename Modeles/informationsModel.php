<?php
// Notre fonction qui charge tous les commentaires
function getInformations(PDO $db): array
    {
        $sql = "SELECT * FROM informations ORDER BY thedate_heure ASC";
        $query = $db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $result;

}

// notre fonction qui insert dans informations
function addInformations(PDO $db, string $theid, string $themail, string $titre, string $themessage): bool|string
{
    /*
     * On récupère les données en assurant leur sécurité
     *
     * On utilise la fonction htmlspecialchars pour convertir les caractères spéciaux en entités HTML
     * Le paramètre ENT_QUOTES permet de convertir les guillemets doubles et simples
     * On utilise la fonction strip_tags pour supprimer les balises HTML et PHP
     * On utilise la fonction trim pour supprimer les espaces en début et fin de chaîne
     */

    $theid = htmlspecialchars(strip_tags(trim($theid)), ENT_QUOTES);
    // false si le themail n'est pas valide, sinon on le garde
    $themail = filter_var($themail, FILTER_VALITHEDATE_EMAIL);
    $titre = htmlspecialchars(strip_tags($titre), ENT_QUOTES);
    $themessage = htmlspecialchars(strip_tags(trim($themessage)), ENT_QUOTES);

    // si les données ne sont pas valides, on envoie false
    if (empty($theid) || $themail === false || empty($titre) || empty($themessage)) {
        return false;
    }
    // on prépare la requête
    $sql = "INSERT INTO informations (theid, themail, themessage, thethedate) VALUES ('$theid', '$themail', '$titre', '$themessage')";
    try {
        // on exécute la requête
        $db->exec($sql);
        // si tout s'est bien passé, on renvoie true
        return true;
    } catch (Exception $e) {
        // sinon, on renvoie le message d'erreur
        return $e->getMessage();
    }

}
    