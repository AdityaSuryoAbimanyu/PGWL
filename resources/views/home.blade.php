@extends('layouts/template')

@section('content')
    <style>
        body {
            background: linear-gradient(to right top, #74ebd5, #acb6e5);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .profile-card {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .profile-card:hover {
            transform: scale(1.03);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
        }

        .profile-img {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .profile-img:hover {
            transform: scale(1.08);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
        }

        .profile-icon {
            transition: color 0.3s ease;
        }

        .profile-icon:hover {
            color: #673ab7;
        }

        .modal-img {
            max-width: 100%;
            max-height: 80vh;
        }
    </style>

    <div class="container mt-5 d-flex justify-content-center">
        <div class="card profile-card text-center rounded-4 p-4" style="max-width: 500px; width: 100%;">
            <div class="card-body">
                <!-- Foto Profil (Klik untuk Zoom) -->
                <img src="{{ asset('storage/images/Gokil.jpg') }}"
                    class="rounded-circle mb-3 border border-4 border-light profile-img"
                    alt="Foto Profil" width="150" height="150"
                    data-bs-toggle="modal" data-bs-target="#profileModal">

                <!-- Judul -->
                <h4 class="card-title mb-4 text-black fw-bold">
                    <i class="bi bi-geo-alt-fill me-2 profile-icon"></i>
                    Praktikum Pemrograman Geospasial Web Lanjut
                </h4>

                <!-- Informasi Pribadi -->
                <ul class="list-unstyled fs-5 text-white">
                    <li class="mb-3">
                        <i class="bi bi-person-fill me-2 profile-icon"></i>
                        <strong>Aditya Suryo Abimanyu</strong>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-credit-card-fill me-2 profile-icon"></i>
                        23/517143/SV/22740
                    </li>
                    <li>
                        <i class="bi bi-people-fill me-2 profile-icon"></i>
                        Kelas B
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal Gambar -->
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body text-center">
                    <img src="{{ asset('storage/images/Gokil.jpg') }}" alt="Foto Besar" class="modal-img rounded shadow">
                </div>
            </div>
        </div>
    </div>
@endsection
