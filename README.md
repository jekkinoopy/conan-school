# 米花町偵探學園（conan-school）

PDO 學生管理練習站：註冊、登入 API、柯南主題靜態頁與辦案筆記。

## 本機預覽

需 PHP + MySQL（資料庫名 `school`）。

```bash
cd 專案根目錄
php -S localhost:8080
```

瀏覽器開啟：<http://localhost:8080/index.html>

## 學員管理專區（PDO 練習）

`members/index.html` — 註冊、API、登入等主線檔案集中於 `members/`。

## 辦案筆記

`notes/index.html` — 01 標點符號、02 PHP 與 SQL、03 後端核心動作、04 後台動態插頁。

## 相關連結

- [努比的全端筆記・PHP 課程](https://jekkinoopy.github.io/WebDev-Notes/courses/01-database/php/index.html)
- [實作專區索引](https://jekkinoopy.github.io/WebDev-Notes/courses/07-projects/practice/index.html)（含春日部蠟筆專案）

## Cursor 協作

- `.cursor/rules/` — 助理必讀（commit 格式、辦案筆記三處同步、Git 還原）
- `CURSOR-HANDOFF.md` — 接力與路徑速查

## 來源

自 [WebDev-Notes](https://github.com/jekkinoopy/WebDev-Notes) 的 `courses/07-projects/practice/conan-school` 複製獨立維護；規範模板見母 repo `docs/portable-collab-rules/`。
