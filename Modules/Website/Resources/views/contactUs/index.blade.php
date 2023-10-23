<x-frontend-layout>

    <div class="page-title-area bg-25">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>


    @include('partials_data.infoKontak')


    @include('partials_data.kirimPesan')

    <div class="map-area">
        <iframe width="300" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q={{UtilsHelp::settingApp()->latitude_settings}},{{UtilsHelp::settingApp()->longitude_settings}}&hl=id&z=14&amp;output=embed">
        </iframe>
    </div>
</x-frontend-layout>