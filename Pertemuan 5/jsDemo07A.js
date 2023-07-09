for (var ii = 4, jj = 3; jj >= 0; ii++, jj--) {
    document.writeln(`${ii} * ${jj} = ${(ii * jj).toFixed(3)} <br>`);
    document.writeln(`${ii} * ${jj} = ${(ii / jj).toFixed(3)} <br>`);
    document.writeln(`log(${jj}) = ${Math.log(jj).toFixed(3)} <br>`);
    document.writeln(`sqrt(${jj}) = ${Math.sqrt(jj).toFixed(3)} <br><br>`);
}

x = 1.275
y = 1.27499999999999991118
document.writeln(x + " and " + y + " are " + 
    ((x == y) ? "equal" : "not equal") + "<br>");