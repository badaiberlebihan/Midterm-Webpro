<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Bagian ini untuk judul halaman yang bisa berbeda-beda -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Menghubungkan file CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Konten Utama -->
    <main class="container py-4">
        @yield('konten') <!-- Konten halaman spesifik akan ditempatkan di sini -->
    </main>

    <!-- Footer -->
    <footer class="text-center py-4">
        <p>&copy; 2024 Perpustakaan ITS</p>
    </
