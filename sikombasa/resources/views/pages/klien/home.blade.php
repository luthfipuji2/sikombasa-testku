    @extends('layouts/klien/sidebar')

    @section('title', 'Dashboard')

    @section('container')
                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-primary">
                <div class="card-header">
                    <h3 class="card-title">Selamat datang {{ $user->name }}!</strong> Anda telah melakukan login sebagai {{ $user->role }}</h3>
                </div>
                </div>


    @endsection