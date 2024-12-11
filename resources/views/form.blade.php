@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Form Pendaftaran Membership Gym</h2>
        <form action="{{ route('form.store') }}" method="POST">
            @csrf

            <!-- Input Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama Anda"
                    required>
            </div>

            <!-- Input Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda"
                    required>
            </div>

            <!-- Input Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input type="text" name="phone" id="phone" class="form-control"
                    placeholder="Masukkan nomor telepon Anda" required>
            </div>

            <!-- Select Paket -->
            <div class="mb-3">
                <label for="paket" class="form-label">Paket</label>
                <select name="paket" id="paket" class="form-select" required>
                    <option value="Standar">Standar</option>
                    <option value="Ultimate">Ultimate</option>
                    <option value="Professional">Professional</option>
                </select>
            </div>

            <!-- Select Harga -->
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <select name="harga" id="harga" class="form-select" required>
                    <option value="Rp. 250.000">Rp. 250.000</option>
                    <option value="Rp. 550.000">Rp. 550.000</option>
                    <option value="Rp. 1.500.000">Rp. 1.500.000</option>
                </select>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <p>Samakan harga dengan paket agar tidak terjadi kesalahan, atau paket anda tidak akan kami terima</p>

            <!-- Hidden Status -->
            <input type="hidden" name="status" value="Inactive">

            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
@endsection
