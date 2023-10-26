<x-frontend-layout>





    @include('partials_data.infoKontak')


    @include('partials_data.kirimPesan')

    <div class="map-area">
        <iframe width="300" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://maps.google.com/maps?q={{ UtilsHelp::settingApp()->latitude_settings }},{{ UtilsHelp::settingApp()->longitude_settings }}&hl=id&z=14&amp;output=embed">
        </iframe>
    </div>
</x-frontend-layout>
