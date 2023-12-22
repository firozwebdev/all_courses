import { createApp } from "vue";
import "./style.css";
import App from "./App.vue";

createApp(App).mount("#app");
const parent = document.getElementById("app");
parent.insertAdjacentHTML("afterend", "<div class='app2'></div>");
createApp(App).mount(".app2");
