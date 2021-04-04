export class API {
  constructor(url) {
    this.url = url;
  }
  getMessages(message_to, callback) {
    const xhr = new XMLHttpRequest();
    let data = "?type=getMessages&message_to=" + message_to;
    xhr.open("GET", this.url + data);
    xhr.responseType = "json";
    xhr.addEventListener("load", () => {
      if (xhr.status == 200) {
        console.log(xhr.response);
        callback(xhr.response);
      } else {
        alert("HATA!");
      }
    });
    xhr.send();
  }
  sendMessage(message_to, data, callback) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", this.url);
    xhr.responseType = "json";
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.addEventListener("load", () => {
      if (xhr.status == 200) {
        console.log(xhr.response);
        callback(xhr.response);
      } else {
        alert("HATA!");
      }
    });
    xhr.send(data);
  }
}
