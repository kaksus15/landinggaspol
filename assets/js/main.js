const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId);

  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      nav.classList.toggle("show");
    });
  }
};

showMenu("nav-toggle", "nav-menu");

// Remove Menu Mobile
const navLink = document.querySelectorAll(".nav_link");

function linkAction() {
  navLink.forEach((n) => n.classList.remove("active"));
  this.classList.add("active");

  // Remove menu mobile
  const navMenu = document.getElementById("nav-menu");
  navMenu.classList.remove("show");
}

navLink.forEach((n) => n.addEventListener("click", linkAction));

// Scrool Reveal Animation
const sr = ScrollReveal({
  origin: "top",
  distance: "80px",
  duration: 2000,
  reset: true,
});

// Averroes logo
// sr.reveal(".logo", { delay: 100 });
// Scroll Home
sr.reveal(".home_desc", { delay: 100 });
sr.reveal(".button", { delay: 200 });
sr.reveal(".home_img", { delay: 400 });

// Scroll Welcome

sr.reveal(".title_welc", { delay: 100 });
sr.reveal(".desc_welc", { delay: 200 });
sr.reveal(".img_welc", { delay: 400 });

// Scrool Services
sr.reveal(".title_serv", {});
sr.reveal(".box-serv", { delay: 100 });
sr.reveal(".box-serv1", { interval: 200 });
sr.reveal(".box-serv2", { delay: 400 });
sr.reveal(".desc_serv", { interval: 200 });

// Scroll Contacts
sr.reveal(".contact", { interval: 200 });

// Sponsor
sr.reveal(".sponsor", {});

// Scroll Register
sr.reveal(".register", { delay: 100 });
sr.reveal(".emaile", { delay: 700 });
sr.reveal(".nama", { delay: 800 });
sr.reveal(".passw", { delay: 600 });
sr.reveal(".confirpsw", { delay: 800 });
sr.reveal(".btn-reg", { delay: 200 });
sr.reveal(".tex-reg", { delay: 100 });
