<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama Produk</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br><br>

        <label>ID Kategori (opsional)</label><br>
        <input type="number" name="category_id" value="{{ old('category_id') }}">
        <br><br>

        <label>SKU</label><br>
        <input type="text" name="sku" value="{{ old('sku') }}" required>
        <br><br>

        <label>Harga</label><br>
        <input type="number" name="price" min="0" step="0.01" value="{{ old('price') }}" required>
        <br><br>

        <label>Stok</label><br>
        <input type="number" name="stock" min="0" value="{{ old('stock') }}" required>
        <br><br>

        <label>Deskripsi</label><br>
        <textarea name="description">{{ old('description') }}</textarea>
        <br><br>

        <label>Gambar Produk</label><br>
        <input type="file" name="image" accept="image/*">
        <small>Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.</small>
        <br><br>

        <button type="submit">Simpan Produk</button>
    </form>
</body>
</html>