<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>會員登入｜米花町偵探學園</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../Conan.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="conan-school">
  <header class="conan-topbar">
    <a class="conan-logo" href="../index.html">米花町偵探學園</a>
    <nav class="conan-nav" aria-label="主選單">
      <a href="index.html">學員管理專區</a>
      <a href="../case-notes.html">辦案筆記</a>
      <a href="../pronounce-desk.html">發音偵訊台</a>
      <a href="../index.html#news">事件簿</a>
    </nav>
    <div class="conan-auth">
      <a href="03-login.php" class="conan-btn conan-btn-login" aria-current="page">登入</a>
      <a href="01-register.html" class="conan-btn conan-btn-register">註冊</a>
    </div>
  </header>

  <main class="conan-page-main py-5">
    <div class="container">
      <nav class="conan-back-links mb-4" aria-label="返回導覽">
        <a class="conan-back-link" href="index.html"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i> 學員管理專區</a>
        <a class="conan-back-link" href="../index.html"><i class="fa-solid fa-house" aria-hidden="true"></i> 返回偵辦室</a>
      </nav>
      <article class="conan-form-card card shadow-sm border-0 mx-auto" style="max-width: 480px;">
        <div class="card-body p-4 p-md-5">
          <p class="conan-form-label h4 mb-2"><i class="fa-solid fa-user-check" aria-hidden="true"></i> 會員登入</p>
          <p class="conan-form-sub text-muted mb-4">請出示帳號與密碼，接受偵辦室驗證。帳密不符者，恕不發放破案許可。</p>
          <form action="04-api_login.php" method="post">
            <div class="conan-form-field mb-3">
              <label class="form-label" for="account"><i class="fa-solid fa-user" aria-hidden="true"></i> 帳號</label>
              <input class="form-control" type="text" id="account" name="account" placeholder="請輸入帳號" required autocomplete="username" />
            </div>
            <div class="conan-form-field mb-4">
              <label class="form-label" for="password"><i class="fa-solid fa-lock" aria-hidden="true"></i> 密碼</label>
              <input class="form-control" type="password" id="password" name="password" placeholder="請輸入密碼" required autocomplete="current-password" />
            </div>
            <div class="conan-form-actions d-grid gap-2 d-md-flex">
              <button type="submit" class="btn btn-primary">登入</button>
              <button type="reset" class="btn btn-outline-secondary">重置</button>
            </div>
          </form>
          <p class="conan-form-foot mt-4">
            尚未登記嫌疑犯名冊？<a href="01-register.html">前往註冊</a>
          </p>
        </div>
      </article>
    </div>
  </main>

  <footer id="contact" class="conan-site-footer">
    <h2 class="conan-footer-title">米花町偵探學園</h2>
    <nav class="conan-footer-nav" aria-label="其他練習專區">
      <a href="https://jekkinoopy.github.io/WebDev-Notes/courses/07-projects/practice/crayon/index.html" target="_blank" rel="noopener noreferrer">春日部保健室</a>
      <a href="https://jekkinoopy.github.io/WebDev-Notes/courses/07-projects/practice/index.html" target="_blank" rel="noopener noreferrer">努比全端筆記・實作專區</a>
    </nav>
    <ul class="conan-contact-list">
      <li>
        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
        毛利偵探事務所 · 東京都米花町
      </li>
      <li>
        <i class="fa-solid fa-phone" aria-hidden="true"></i>
        03-1234-5678（事務所代表線・設定虛構）
      </li>
      <li>
        <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
        所長：毛利小五郎（沉睡中亦受理委託）
      </li>
    </ul>
    <div class="conan-footer-bottom">
      <p class="conan-copy">&copy; 2026 努比的全端筆記</p>
</div>
  </footer>
</body>

</html>
