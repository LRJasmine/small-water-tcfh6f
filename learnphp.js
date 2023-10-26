const javascriptText = document.getElementById("javascripttext");

function vegebege() {
  let vegetables = ["cabbage", "lettuce", "kale", "spinach"];

  javascriptText.insertAdjacentHTML("beforeend", `<p>${vegetables}</p>`);

  // document.write(vegetables);
  //   document.write(vegetables[-1]);
  //   console.log(vegetables[-1]);
}

vegebege();
