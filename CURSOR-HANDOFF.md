# Cursor 接力（米花町偵探學園 / conan-school）

聊天**不**保證跨機保留 → **以本檔 + Git 為準**。改檔前先讀全文 + 最底下〈變更〉。

- 本 repo：<https://github.com/jekkinoopy/conan-school>
- 母筆記站：[WebDev-Notes](https://github.com/jekkinoopy/WebDev-Notes) · [PHP 課程索引](https://jekkinoopy.github.io/WebDev-Notes/courses/01-database/php/index.html)

## 開工

1. 看〈變更〉最新日期。
2. 動**辦案筆記**前對版型：`notes/01-標點符號.html`、`Conan.css`。
3. **只動使用者點名的檔**。
4. 協作規則有變 → 在〈變更〉**加一則**（勿刪舊的）。

## 本專案路徑

| 用途 | 路徑 |
|------|------|
| 站首 | `index.html` |
| 辦案筆記目錄 | `notes/index.html` |
| 筆記上下則 | `conan-notes-nav.js` → `CHAIN` |
| 頁尾跨站連結 | `practice-peer-nav.js` |

**新辦案筆記一則：**`notes/NN-….html` + 目錄 `<li>` + `CHAIN` 三處同步。細則見 `.cursor/rules/repo-workflow.mdc`。

## Git commit（助理回覆結尾）

`fix:`／`feat:`／`style:` + 重點（**不超過 15 字**）。見 `.cursor/rules/git-commit.mdc`。**勿擅自 commit**，除非使用者明確要求。

## 本機預覽

```bash
php -S localhost:8080
```

→ <http://localhost:8080/index.html>

## 〈變更〉

### 2026-05-24
- 需求：自 WebDev-Notes 獨立；帶入可攜協作規範（`.cursor/rules`、`CURSOR-HANDOFF`）。
- 範圍：`docs/portable-collab-rules` 複製並專案化。

---

更動〈變更〉後，回覆第一句可寫「已更新 CURSOR-HANDOFF」。
