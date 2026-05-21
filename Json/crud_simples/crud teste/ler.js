const fs = require("fs");
const dados = fs.readFileSync("contato.json", "utf-8");
console.log(dados);