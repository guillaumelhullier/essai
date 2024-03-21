/**
 * Fonction calculateur de puissance
 * @param {nombre} voltage
 * @param {nombre} current
 * @returns
 */

function circuitPower(voltage, current) {
  return voltage * current;
}

console.log(circuitPower(230, 10));
console.log(circuitPower(110, 3));
console.log(circuitPower(480, 20));
