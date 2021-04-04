const els = {
  loader: document.querySelector("#loader"),
};
addEventListener("load", () => {
  els.loader.classList.add("hidden");
});
/* Warning Icon */
document.querySelectorAll(".alert-warning").forEach((alert) => {
  const content = alert.textContent;
  alert.innerHTML = '<i class="fas fa-exclamation-circle me-2"></i>' + content;
});
/* Danger Icon */
document.querySelectorAll(".alert-danger").forEach((alert) => {
  const content = alert.textContent;
  alert.innerHTML = '<i class="fas fa-times-circle me-2"></i>' + content;
});
/* Success Icon */
document.querySelectorAll(".alert-success").forEach((alert) => {
  const content = alert.textContent;
  alert.innerHTML = '<i class="fas fa-check-circle me-2"></i>' + content;
});
/* Info Icon */
document.querySelectorAll(".alert-info").forEach((alert) => {
  const content = alert.textContent;
  alert.innerHTML = '<i class="fas fa-info-circle me-2"></i>' + content;
});
