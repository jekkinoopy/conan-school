/**
 * 頁尾：連到相關練習站（獨立 repo 版）
 * 用法：<div data-practice-peer-nav data-current="conan" data-base="../"></div>
 */
(function () {
  var PEERS = [
    {
      key: "crayon",
      label: "春日部保健室",
      href: "https://jekkinoopy.github.io/WebDev-Notes/courses/07-projects/practice/crayon/index.html",
    },
    {
      key: "hub",
      label: "努比全端筆記・實作專區",
      href: "https://jekkinoopy.github.io/WebDev-Notes/courses/07-projects/practice/index.html",
    },
  ];

  var mount = document.querySelector("[data-practice-peer-nav]");
  if (!mount) return;

  var current = mount.getAttribute("data-current") || "";

  var css = document.createElement("link");
  css.rel = "stylesheet";
  var base = mount.getAttribute("data-base") || "./";
  css.href = base + "practice-peer-nav.css";
  document.head.appendChild(css);

  var nav = document.createElement("nav");
  nav.className = "practice-peer-nav";
  nav.setAttribute("aria-label", "其他練習專區");

  var title = document.createElement("p");
  title.className = "practice-peer-nav__title";
  title.textContent = "其他練習專區";

  var list = document.createElement("ul");
  list.className = "practice-peer-nav__list";

  PEERS.forEach(function (peer) {
    if (peer.key === current) return;
    var li = document.createElement("li");
    var a = document.createElement("a");
    a.href = peer.href;
    a.textContent = peer.label;
    a.target = "_blank";
    a.rel = "noopener noreferrer";
    li.appendChild(a);
    list.appendChild(li);
  });

  if (!list.children.length) {
    mount.remove();
    return;
  }

  nav.appendChild(title);
  nav.appendChild(list);
  mount.replaceWith(nav);
})();
