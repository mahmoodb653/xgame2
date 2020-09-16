let active = document.querySelector(".active").getAttribute("onClick");
document.getElementById(active.slice(11, -2)).style.display = "flex";
active = document.querySelector(".active-fill").getAttribute("onClick");
document.getElementById(active.slice(17, -2)).style.display = "flex";

const changeTab = (tab) => {
  document.querySelectorAll(".tab").forEach((el) => {
    el.classList.remove("active");
  });

  event.target.classList.add("active");

  document.querySelectorAll(".content-container").forEach((el) => {
    el.style.display = "none";
    console.log("1");
  });

  active = document.querySelector(".active").getAttribute("onClick");
  document.getElementById(active.slice(11, -2)).style.display = "flex";

  document.querySelectorAll(".active-fill").forEach((el) => {
    active = el.getAttribute("onClick");
  });
  document.getElementById(active.slice(17, -2)).style.display = "flex";
};

const changeTabMarket = (tab) => {
  let active = document.querySelector(".active").getAttribute("onClick");
  document.getElementById(active.slice(11, -2)).style.display = "flex";
  active = document.querySelector(".active-fill").getAttribute("onClick");
  document.getElementById(active.slice(17, -2)).style.display = "flex";

  document.querySelectorAll(".tab").forEach((el) => {
    el.classList.remove("active-fill");
  });

  event.target.classList.add("active-fill");

  document.querySelectorAll(".content").forEach((el) => {
    el.style.display = "none";
  });

  document.getElementById(tab).style.display = "flex";
};
