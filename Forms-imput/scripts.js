const input = document.querySelector("input");
const options = document.querySelectorAll("#items option");
const output = document.querySelector("output");

function updateOutput() {
  output.value = options[input.value - 1].textContent;
}

input.addEventListener("input", () => updateOutput());
updateOutput();

//indeterminado nombre
const inputt = document.querySelector("#indeterminate");
inputt.indeterminate = true;
