console.log('Worked');
const toggles = document.querySelectorAll(".sub-menu-btn");
const toggles2 = document.querySelectorAll(".sub-2");
function toggleAccord(e) {
  e.preventDefault();
  if (this.parentNode.classList.contains("active")) {
    this.parentNode.classList.remove("active");
  } else {
    for (i = 0; i < toggles.length; i++) {
      toggles[i].parentNode.classList.remove("active");
    }
    this.parentNode.classList.add("active");
  }
}
function toggleAccord2(e) {
    e.preventDefault();
    if (this.parentNode.classList.contains("active")) {
      this.parentNode.classList.remove("active");
    } else {
      for (i = 0; i < toggles2.length; i++) {
        toggles2[i].parentNode.classList.remove("active");
      }
      this.parentNode.classList.add("active");
    }
  }
for (i = 0; i < toggles.length; i++) {
  toggles[i].addEventListener("click", toggleAccord);
}

for (i = 0; i < toggles2.length; i++) {
    toggles2[i].addEventListener("click", toggleAccord2);
  }