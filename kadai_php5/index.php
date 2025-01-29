<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon/favicon.ico">
    <title>クリニック自動受付システム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">自動受付</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="select.php">受付患者一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">ログイン</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">ログアウト</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <main class="container mt-5">
        <h1>こんにちは</h1>
        <p>ご来院いただきありがとうございます</p>
    </main>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="insert.php" enctype="multipart/form-data">
                    <div class="container mt-5">
                        <fieldset>
                            <legend class="mb-4">クリニック自動受付システム</legend>
                            <div class="form-group">
                                <label for="name">お名前 <span style="color: red;">*</span>：</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="例: 山田 太郎" required>
                            </div>

                            <div class="form-group">
                                <label for="birthday">生年月日 <span style="color: red;">*</span>：</label>
                                <input type="date" class="form-control" id="birthday" name="birthday" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">来院登録</button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3" style="background-color: #f1f1f1;">
            &copy; 2025 Medtech Marvels | <a href="privacy.php" class="text-dark">プライバシーポリシー</a>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>