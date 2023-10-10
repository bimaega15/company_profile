<div class="table-responsive">
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th>NO</th>
                <th>JUDUL</th>
                <th>NAMA</th>
                <th>POSISI</th>
                <th>GAMBAR</th>
                <th>IS ACTIVE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<script class="url_datatable" data-url="{{ route('web.profileSingkat.datatable') }}"></script>
<script class="url_createview" data-url="{{ route('web.profileSingkat.create') }}"></script>
<script src="{{ asset('js/web/profileSingkat/index.js') }}"></script>