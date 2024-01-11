<?php
// Fonction pour rechercher un mot dans un tableau 2D
function searchWord(array $multiDimArray, string $searchString): bool {
    // Obtenir le nombre de lignes et de colonnes dans le tableau
    $rows = count($multiDimArray);
    $cols = count($multiDimArray[0]);

    // Itérer à travers chaque cellule du tableau
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            // Si la cellule actuelle correspond au premier caractère de la chaîne de recherche,
            // effectuer une recherche en profondeur pour trouver les caractères restants
            if ($multiDimArray[$i][$j] === $searchString[0] && rechercheProfondeur($multiDimArray, $i, $j, $searchString, 0)) {
                return true;
            }
        }
    }

    // Si la chaîne de recherche n'est pas trouvée dans le tableau, retourner false
    return false;
}



// Fonction pour effectuer une recherche en profondeur (rechercheProfondeur) des caractères restants de la chaîne de recherche
function rechercheProfondeur(array &$multiDimArray, int $row, int $col, string $searchString, int $index): bool {
    // Cas de base : Si tous les caractères de la chaîne de recherche ont été trouvés, retourner true
    if ($index === strlen($searchString)) {
        return true;
    }

    // Obtenir le nombre de lignes et de colonnes dans le tableau
    $rows = count($multiDimArray);
    $cols = count($multiDimArray[0]);

    // Vérifier si la cellule actuelle est hors limites ou ne correspond pas au caractère actuel de la chaîne de recherche
    if ($row < 0 || $row >= $rows || $col < 0 || $col >= $cols || $multiDimArray[$row][$col] !== $searchString[$index]) {
        // Si l'une des conditions est remplie, retourner false
        return false;
    }

    // Marquer la cellule actuelle comme visitée en changeant sa valeur en '#'
    $temp = $multiDimArray[$row][$col];
    $multiDimArray[$row][$col] = '#';

    // Rechercher récursivement dans les quatre directions (haut, bas, gauche, droite)
    $found = rechercheProfondeur($multiDimArray, $row - 1, $col, $searchString, $index + 1) ||
             rechercheProfondeur($multiDimArray, $row + 1, $col, $searchString, $index + 1) ||
             rechercheProfondeur($multiDimArray, $row, $col - 1, $searchString, $index + 1) ||
             rechercheProfondeur($multiDimArray, $row, $col + 1, $searchString, $index + 1);

    // Restaurer la valeur d'origine de la cellule actuelle
    $multiDimArray[$row][$col] = $temp;

    // Retourner si la chaîne de recherche a été trouvée ou non
    return $found;
}

?>