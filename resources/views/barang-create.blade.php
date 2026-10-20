<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang | Invento</title>
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
                <a href="{{ url('/') }}" class="nav-link">Dashboard</a>
                <a href="{{ route('barang.index') }}" class="nav-link active">Data Barang</a>
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
                    <h1>Tambah Barang</h1>
                    <p>Masukkan informasi barang baru</p>
                </div>

                <div class="user-profile">
                    <div class="avatar">A</div>
                    <div>
                        <strong>Administrator</strong>
                        <p>Admin</p>
                    </div>
                </div>
            </header>

            <section class="content-panel">
                <div class="table-header">
                    <div>
                        <h2>Formulir Barang</h2>
                        <p>Isi semua informasi barang yang diperlukan.</p>
                    </div>
                </div>
                
                <form class="item-form" action="{{ route('barang.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="code">Kode Barang</label>
                        <input
                            type="text"
                            id="code"
                            name="code"
                            placeholder="Contoh: BRG-001"
                        >
                    </div>

                    <div class="form-group">
                        <label for="name">Nama Barang</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Masukkan nama barang"
                        >
                    </div>

                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <input
                            type="text"
                            id="category"
                            name="category"
                            placeholder="Contoh: Elektronik"
                        >
                    </div>

                    <div class="form-group">
                        <label for="stock">Stok</label>
                        <input
                            type="number"
                            id="stock"
                            name="stock"
                            min="0"
                            value="0"
                        >
                    </div>

                    <div class="form-group">
                        <label for="price">Harga Satuan (Rp)</label>
                        <input
                            type="number"
                            id="price"
                            name="price"
                            min="0"
                            step="0.01"
                            value="0"
                        >
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-primary">
                            Simpan Barang
                        </button>
                        <a href="{{ route('barang.index') }}" class="btn-secondary">
                            Kembali
                        </a>
                    </div>
                </form>

            </section>
        </main>

    </div>
</body>
</html>
