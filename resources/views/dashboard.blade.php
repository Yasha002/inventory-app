
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Inventory System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="dashboard">

        <aside class="sidebar">
            <div class="brand">
                <h2>Invento</h2>
                <p>Management System</p>
            </div>

            <nav class="navigation">
                <a href="/" class="nav-link active">Dashboard</a>
                <a href="{{ url('/barang') }}" class="nav-link">Data Barang</a>
                <a href="#" class="nav-link">Kategori</a>
                <a href="#" class="nav-link">Transaksi</a>
                <a href="#" class="nav-link">Laporan</a>
            </nav>

            <div class="sidebar-footer">
                <p>Inventory System v1.0</p>
            </div>
        </aside>

        <main class="main-content">
            <header class="topbar">
                <div>
                    <h1>Dashboard</h1>
                    <p>Ringkasan informasi inventaris</p>
                </div>

                <div class="user-profile">
                    <div class="avatar">A</div>
                    <div>
                        <strong>Administrator</strong>
                        <p>Admin</p>
                    </div>
                </div>
            </header>

            <section class="welcome">
                <h2>Selamat datang di Invento!</h2>
                <p>Kelola dan pantau persediaan barang dengan lebih mudah.</p>
            </section>

            <section class="stats">
                <div class="stat-card">
                    <p>Total Barang</p>
                    <h3>0</h3>
                    <span>Barang terdaftar</span>
                </div>

                <div class="stat-card">
                    <p>Total Kategori</p>
                    <h3>0</h3>
                    <span>Kategori barang</span>
                </div>

                <div class="stat-card">
                    <p>Stok Menipis</p>
                    <h3>0</h3>
                    <span>Perlu diperiksa</span>
                </div>

                <div class="stat-card">
                    <p>Total Transaksi</p>
                    <h3>0</h3>
                    <span>Transaksi tercatat</span>
                </div>
            </section>

            <section class="content-panel">
                <h2>Aktivitas Inventaris</h2>
                <p>Data aktivitas akan ditampilkan di bagian ini.</p>
            </section>
        </main>

    </div>
</body>
</html>
