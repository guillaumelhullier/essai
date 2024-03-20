/**
 * Fonction identifiant premier élément du tableau
 * @param {array} table
 * @returns
 */

function getFirstValue(table) {
  return table[0];
}

console.log(getFirstValue([1, 2, 3]));
console.log(getFirstValue([80, 5, 100]));
console.log(getFirstValue([-500, 0, 50]));
