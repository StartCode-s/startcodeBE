class SceneTransition {
    constructor() {
      this.element = null;
    }
    createElement() {
      this.element = document.createElement("div");

      this.element.classList.add("map");
      this.element.classList.add("pixel-art");

    }

    fadeOut() {
      document.getElementById('maps').classList.add("fade-out");
      document.getElementById('maps').classList.add("SceneTransition");
      document.getElementById('maps').addEventListener("animationend", () => {
        document.getElementById('maps').remove();
      }, { once: true })
    }

    init(container, callback) {
      this.createElement();
      container.appendChild(this.element);

      this.element.addEventListener("animationend", () => {
        callback();
      }, { once: true })

    }
  }
