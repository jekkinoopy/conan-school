/** 辦案筆記內頁：上一則／下一則（頁首、頁尾各一組，內容相同）。`data-note-id` 對應 CHAIN 的 id。 */
(function () {
  /** @type {{ id: string, href: string, title: string }[]} */
  var CHAIN = [
    { id: "01-標點符號", href: "01-標點符號.html", title: "疑點重重的標點符號" },
    { id: "02-PHP與SQL", href: "02-PHP與SQL.html", title: "誰是 PHP？誰是 SQL？" },
    { id: "03-後端核心動作鑑識", href: "03-後端核心動作鑑識.html", title: "後端核心動作鑑識" },
    { id: "04-後台動態插頁與inc", href: "04-後台動態插頁與inc.html", title: "後台動態插頁與 ?inc 傳令" },
    { id: "05-WHERE帳密字串拆解", href: "05-WHERE帳密字串拆解.html", title: "WHERE 帳密字串：六零件鍵位拆解" },
  ];

  var INDEX_HREF = "index.html";
  var SERIES = "辦案筆記";

  /** 從 CHAIN id（如 01-標點符號）取出偵探編號前綴 */
  function dossierNo(id) {
    var m = /^(\d{2})/.exec(id);
    return m ? m[1] : "";
  }

  function navLinkText(entry) {
    var no = dossierNo(entry.id);
    return SERIES + " | 偵探編號 " + no + " · " + entry.title;
  }

  function navIndexText() {
    return SERIES + " | 目錄";
  }

  function buildNavHtml(noteId) {
    var cur = CHAIN.findIndex(function (x) {
      return x.id === noteId;
    });
    if (cur === -1) return "";

    var parts = [];
    parts.push('<nav class="conan-notes-nav" aria-label="筆記導覽">');

    if (cur > 0) {
      var prev = CHAIN[cur - 1];
      parts.push(
        '<a class="conan-notes-nav-link conan-notes-nav-link--prev" href="' +
          prev.href +
          '"><span class="conan-notes-nav-chevron" aria-hidden="true">‹</span><span class="conan-notes-nav-text">' +
          navLinkText(prev) +
          "</span></a>"
      );
    } else {
      parts.push(
        '<a class="conan-notes-nav-link conan-notes-nav-link--prev" href="' +
          INDEX_HREF +
          '"><span class="conan-notes-nav-chevron" aria-hidden="true">‹</span><span class="conan-notes-nav-text">' +
          navIndexText() +
          "</span></a>"
      );
    }

    if (cur < CHAIN.length - 1) {
      var next = CHAIN[cur + 1];
      parts.push(
        '<a class="conan-notes-nav-link conan-notes-nav-link--next" href="' +
          next.href +
          '"><span class="conan-notes-nav-text">' +
          navLinkText(next) +
          '</span><span class="conan-notes-nav-chevron" aria-hidden="true">›</span></a>'
      );
    } else {
      parts.push(
        '<a class="conan-notes-nav-link conan-notes-nav-link--next" href="' +
          INDEX_HREF +
          '"><span class="conan-notes-nav-text">' +
          navIndexText() +
          '</span><span class="conan-notes-nav-chevron" aria-hidden="true">›</span></a>'
      );
    }

    parts.push("</nav>");
    return parts.join("");
  }

  document.addEventListener("DOMContentLoaded", function () {
    var roots = document.querySelectorAll(".conan-notes-nav-root");
    if (!roots.length) return;

    var noteId = roots[0].getAttribute("data-note-id");
    if (!noteId) return;

    var html = buildNavHtml(noteId);
    if (!html) return;

    roots.forEach(function (root) {
      root.innerHTML = html;
    });
  });

  /** 辦案筆記程式碼區塊：語法高亮（配色由 Conan.css 高對比覆寫） */
  var HLJS_JS =
    "https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js";

  function loadHljs(cb) {
    if (window.hljs) {
      cb();
      return;
    }
    var s = document.createElement("script");
    s.src = HLJS_JS;
    s.onload = cb;
    document.head.appendChild(s);
  }

  function guessCodeLang(block) {
    var wrap = block.closest(".conan-notes-code");
    var labelText = wrap
      ? ((wrap.querySelector(".conan-notes-code-label") || {}).textContent || "")
      : "";
    var sample = block.textContent || "";
    if (/\.php|pdo|include|^\s*<\?php/mi.test(labelText + sample)) return "php";
    if (/SQL|INSERT|SELECT|WHERE|VALUES/i.test(labelText + sample)) return "sql";
    return "plaintext";
  }

  function highlightCodeBlocks() {
    document.querySelectorAll(".conan-notes-code-block code").forEach(function (el) {
      if (el.classList.contains("hljs")) return;
      if (!/language-/.test(el.className)) {
        el.classList.add("language-" + guessCodeLang(el));
      }
      hljs.highlightElement(el);
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    if (!document.querySelector(".conan-notes-code-block")) return;
    loadHljs(function () {
      hljs.configure({ ignoreUnescapedHTML: true });
      highlightCodeBlocks();
    });
  });
})();
