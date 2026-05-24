# Cursor 接力（米花町偵探學園 / conan-school）

聊天**不**保證跨機保留 → **以本檔 + Git 為準**。改檔前先讀全文 + 最底下〈變更〉。

- 本 repo：<https://github.com/jekkinoopy/conan-school>
- 母筆記站：[WebDev-Notes](https://github.com/jekkinoopy/WebDev-Notes) · [PHP 課程索引](https://jekkinoopy.github.io/WebDev-Notes/courses/01-database/php/index.html)
- **完整協作規範**：`.cursor/rules/repo-workflow.mdc`（本檔不重複全文；更新規範時改寫該檔既有章節，勿堆疊重複段落）

## 開工

1. 看〈變更〉最新日期。
2. 動**辦案筆記**前對版型：`notes/01-標點符號.html`、`Conan.css`（單頁覆寫樣式寫在該頁，預設不改全站 CSS）。**主選單**與站首一致（學員管理／辦案筆記／發音偵訊台／事件簿），見 `includes/site-nav.html` 註解。
3. **只動使用者點名的檔**；PHP／DB **練習程式**須練完且當次明確要求才改；共通區塊用 class + `include`。
4. 規則有變 → 迭代 `.cursor/rules/` 與本檔對應句；〈變更〉**加一則摘要**（勿刪舊的、勿把整段規範複製進來）。

## 本專案路徑

| 用途 | 路徑 |
|------|------|
| 站首 | `index.html` |
| 學員管理（PDO 練習） | `members/`（目錄索引 `members/index.html`） |
| 辦案筆記目錄 | `notes/index.html` |
| 發音工具 | `pronounce-desk.html` |
| 筆記上下則 | `conan-notes-nav.js` → `CHAIN` |
| 頁尾外部連結 | `practice-peer-nav.js`（其他練習專區；頁尾不放內部連結） |
| 頁尾聯絡 | 柯南世界觀虛構資訊，見 `includes/site-footer.html` |

**新辦案筆記一則：**`notes/NN-….html` + 目錄 `<li>` + `CHAIN` 三處同步。

## Git commit（助理回覆結尾）

**有改檔 → 該則回覆結尾必附** `git add .` + `git commit -m "type: 重點"`（格式見 `.cursor/rules/git-commit.mdc`）；**漏附不行**。只給指令、**勿擅自執行** commit，除非使用者明確要求。

## 本機預覽

```bash
php -S localhost:8080
```

→ <http://localhost:8080/index.html>

## 〈變更〉

### 2026-05-24
- 自 WebDev-Notes 獨立；帶入可攜協作規範（`.cursor/rules`、`CURSOR-HANDOFF`）。
- 邊界：學習專案不代寫練習程式；改動只限點名檔；樣式 class + `include` 共用、單頁覆寫不改 `Conan.css`；規範文檔採**迭代改寫**、勿文末堆疊重複章節。
- `git-commit.mdc`：明訂**改檔必附 commit 指令**（結尾、漏附視為違規）；仍不代為執行 commit。
- 學員管理練習檔移至 `members/`；全站連結與筆記內路徑改為 `members/…`；全站主選單統一；頁尾僅外部練習專區＋柯南聯絡資訊。

---

更動〈變更〉後，回覆第一句可寫「已更新 CURSOR-HANDOFF」。
