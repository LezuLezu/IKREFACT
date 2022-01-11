console.log("loaded");


// Code for responsive menu
const navbar = document.querySelector(".navbar");
// console.log(navbar);
const menuToggle = document.querySelector(".menu-toggle");
// console.log(menuToggle);
menuToggle.addEventListener("click", () => {
  navbar.classList.toggle("open");
});

// Code for animal filters
let checkbox_cat = document.getElementById("cat");
let checkbox_dog = document.getElementById("dog");
let checkbox_bird = document.getElementById("bird");
// console.log(checkbox_cat);

let animal_list = document.getElementsByClassName("js--animal-list");
// console.log(animal_list);

// Only do code below on certain path, otherwise errors 
if(window.location.pathname == "/animals"){
  // set default to checked
  checkbox_cat.checked = true;
  checkbox_dog.checked = true;
  checkbox_bird.checked = true;
  
  // Loop to make all visible
  for (let i = 0; i < animal_list.length; i++) {
    animal_list[i].style.display = "";
  }

  // Eventlisteners for all checkboxes
  // Kat
  checkbox_cat.addEventListener('change', function () {
    if (checkbox_cat.checked) {
      for (let i = 0; i < animal_list.length; i++) {
        // console.log(animal_list[i].dataset.speciesOfAnimal);
        if (animal_list[i].dataset.speciesOfAnimal == "Kat") {
          animal_list[i].style.display = "";
        }
      }
    } else {
      for (let i = 0; i < animal_list.length; i++) {
        if (animal_list[i].dataset.speciesOfAnimal == "Kat") {
          animal_list[i].style.display = "none";
        }
      }
    }
  });
  // Hond
  checkbox_dog.addEventListener('change', function () {
    if (checkbox_dog.checked) {
      for (let i = 0; i < animal_list.length; i++) {
        // console.log(animal_list[i].dataset.speciesOfAnimal);
        if (animal_list[i].dataset.speciesOfAnimal == "Hond") {
          animal_list[i].style.display = "";
        }
      }
    } else {
      for (let i = 0; i < animal_list.length; i++) {
        if (animal_list[i].dataset.speciesOfAnimal == "Hond") {
          animal_list[i].style.display = "none";
        }
      }
    }
  });
  // Vogel
  checkbox_bird.addEventListener('change', function () {
    if (checkbox_bird.checked) {
      for (let i = 0; i < animal_list.length; i++) {
        // console.log(animal_list[i].dataset.speciesOfAnimal);
        if (animal_list[i].dataset.speciesOfAnimal == "Vogel") {
          animal_list[i].style.display = "";
        }
      }
    } else {
      for (let i = 0; i < animal_list.length; i++) {
        if (animal_list[i].dataset.speciesOfAnimal == "Vogel") {
          animal_list[i].style.display = "none";
        }
      }
    }
  });
}




