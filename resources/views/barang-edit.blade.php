
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang | Invento</title>
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
                    <h1>Edit Barang</h1>
                    <p>Perbarui informasi barang</p>
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
                        <h2>Formulir Edit Barang</h2>
                        <p>Ubah informasi barang sesuai kebutuhan.</p>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert-success" style="background: #fef2f2; color: #b91c1c; border-color: #fecaca;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="item-form"
                      action="{{ route('barang.update', $item->id) }}"
                      method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="code">Kode Barang</label>
                        <input type="text" id="code" name="code"
                               value="{{ old('code', $item->code) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Nama Barang</label>
                        <input type="text" id="name" name="name"
                               value="{{ old('name', $item->name) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <input type="text" id="category" name="category"
                               value="{{ old('category', $item->category) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="stock">Stok</label>
                        <input type="number" id="stock" name="stock"
                               min="0" value="{{ old('stock', $item->stock) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Harga Satuan (Rp)</label>
                        <input type="number" id="price" name="price"
                               min="0" step="0.01"
                               value="{{ old('price', $item->price) }}" required>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-primary">
                            Simpan Perubahan
                        </button>

                        <a href="{{ route('barang.index') }}" class="btn-secondary">
                            Batal
                        </a>
                    </div>
                </form>
            </section>
        </main>

    </div>
</body>
</html>
