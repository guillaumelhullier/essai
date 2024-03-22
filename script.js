/**
 * Fonction pour convertir heure en secondes
 * @param {chiffre} hours
 * @returns
 */

function howManySeconds(hours) {
  return hours * 3600;
}

console.log(howManySeconds(2));
console.log(howManySeconds(10));
console.log(howManySeconds(24));
