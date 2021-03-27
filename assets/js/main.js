const els = {
  loader: document.querySelector("#loader"),
};
addEventListener("load", () => {
  setTimeout(() => els.loader.classList.add("hidden"), 1000);
});
