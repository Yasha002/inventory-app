
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang | Invento</title>
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
                <a href="/" class="nav-link">Dashboard</a>
                <a href="/barang" class="nav-link active">Data Barang</a>
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
                    <h1>Data Barang</h1>
                    <p>Kelola daftar dan persediaan barang</p>
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
                @if (session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-header">
                    <div>
                        <h2>Daftar Barang</h2>
                        <p>Kelola persediaan barang yang tersedia.</p>
                    </div>

                    <button type="button" class="btn-primary">
                        + Tambah Barang
                    </button>
                </div>

                <div class="table-wrapper">
                    <table class="inventory-table">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga Satuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>Rp{{ number_format((float) $item->price, 0, ',', '.') }}</td>
                                    <td>                                       
                                        <a href="{{ route('barang.edit', $item->id) }}"
                                            class="btn-edit"
                                            style="text-decoration: none; display: inline-block;">
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('barang.destroy', $item->id) }}"
                                            method="POST"
                                            style="display: inline;"
                                            onsubmit="return confirm('Yakin ingin menghapus barang ini?');"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn-delete">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" style="text-align: center; padding: 24px;">
                                        Belum ada data barang.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </section>
        </main>

    </div>
</body>
</html>
