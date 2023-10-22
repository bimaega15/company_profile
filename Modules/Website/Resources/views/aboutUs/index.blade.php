<x-frontend-layout>

    <div class="page-title-area bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>About Us</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>


    @include('partials_data.aboutUs')

    @include('partials_data.counter')

    @include('partials_data.mengapaMilihKami')

    @include('partials_data.kirimPesan')

    @include('partials_data.testimoni')

    @include('partials_data.shipment')

    @include('partials_data.timKami')

    @include('partials_data.client')
</x-frontend-layout>