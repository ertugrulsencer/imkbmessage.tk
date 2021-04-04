import { API } from "./api.js";
const api = new API(location.origin + "/imkbmessage.tk/api/messages");
const els = {
  loader: document.querySelector("#loader"),
  messages: document.getElementById("messages"),
  messageUserList: document.querySelectorAll("ul li .user"),
  messageHeader: {
    name: document.querySelector(".messages header.user .name"),
    online: document.querySelector(".messages header.user .online"),
  },
  messageForm: document.querySelector("#messageForm"),
};
addEventListener("load", () => {
  els.loader.classList.add("hidden");
});
const getIcons = () => {
  /* Warning Icon */
  document.querySelectorAll(".alert-warning").forEach((alert) => {
    const content = alert.textContent;
    alert.innerHTML =
      '<i class="fas fa-exclamation-circle me-2"></i>' + content;
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
};
if (els.messages) {
  let user_name = "ertugrul";
  const getMessages = (user_name) => {
    els.messageHeader.name.textContent = user_name;
    api.getMessages(user_name, function (response) {
      els.messages.innerHTML = null;
      if (response.error) {
        const error = document.createElement("div");
        error.className = "alert alert-danger text-center";
        error.textContent = response.error;
        els.messages.appendChild(error);
        getIcons();
        setTimeout(
          () => els.messages.querySelector(".alert").classList.add("visible"),
          100
        );
      } else {
        if (response.warning) {
          const warning = document.createElement("div");
          warning.className = "alert alert-info alert-light text-center";
          warning.textContent = response.warning;
          els.messages.appendChild(warning);
          getIcons();
          setTimeout(
            () => els.messages.querySelector(".alert").classList.add("visible"),
            100
          );
        } else {
          response.forEach((message) => {
            let el = document.createElement("div");
            message.message_to != user_name
              ? (el.className = "message")
              : (el.className = "message your");
            el.textContent = message.message_content;
            els.messages.appendChild(el);
          });
        }
      }
    });
  };
  getMessages(user_name);
  setInterval(() => getMessages(user_name), 10000);
  els.messageUserList.forEach((user) => {
    user.addEventListener("click", (e) => {
      user_name = user.dataset.userName;
      getMessages(user_name);
      els.messageUserList.forEach((user) => user.classList.remove("active"));
      user.classList.add("active");
    });
  });
  messageForm.addEventListener("submit", () => {
    let content = messageForm.querySelector("#messageFormContent").trim();
    api.sendMessage(user_name, content, (data) => {
      alert("BAŞARILI!");
    });
  });
}
