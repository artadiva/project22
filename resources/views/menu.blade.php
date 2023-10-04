<ul class="nav">
          <li class="@if(Route::is('dashboard')) active @endif">
            <a href="{{route('dashboard')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="@if(Route::is('input_pasien_baru')) active @endif">
            <a href="{{route('data_pasien.create')}}">
              <i class="nc-icon nc-simple-add"></i>
              <p>Input Pasien Baru</p>
            </a>
          </li>
          <li class="@if(Route::is('data_pasien')) active @endif">
            <a href="{{route('data_pasien.index')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Data Pasien</p>
            </a>
          </li>
          <li class="@if(Route::is('data_kunjungan')) active @endif">
            <a href="{{route('data_kunjungan.index')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Data Kunjungan</p>
            </a>
          </li>
          <li class="@if(Route::is('data_kunjungan')) active @endif">
            <a href="{{route('data_kunjungan.index')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Riwayat Kunjungan</p>
            </a>
          </li>
          <!-- <li class="@if(Route::is('rekap_pasien_harian')) active @endif">
          <a href="{{route('rekap_pasien_harian')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Rekap Pasien Harian</p>
            </a>
          </li> -->
          <li class="@if(Route::is('master_suspect')) active @endif">
          <a href="{{route('master_suspect.index')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Master Suspect</p>
            </a>
          </li>
          <li class="@if(Route::is('master_diagnosa')) active @endif">
          <a href="{{route('master_diagnosa.index')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Master Diagnosa</p>
            </a>
          </li>
          <li class="@if(Route::is('master_diet')) active @endif">
          <a href="{{route('master_diet.index')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Master Diet</p>
            </a>
          </li>
          <!-- <li class="@if(Route::is('master_keluhan')) active @endif">
          <a href="{{route('master_keluhan.index')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Master Keluhan</p>
            </a>
          </li> -->
                    <!-- <li class="@if(Route::is('update_data_pasien')) active @endif">
            <a href="{{route('update_data_pasien')}}">
              <i class="nc-icon nc-refresh-69"></i>
              <p>Tambah Kunjungan</p>
            </a>
          </li> -->
          <!-- <li>
            <a href="{{route('page2')}}">
              <i class="nc-icon nc-diamond"></i>
              <p>Page 2</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="nc-icon nc-pin-3"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="nc-icon nc-caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Up</p>
            </a>
          </li>
        </ul> -->