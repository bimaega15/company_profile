<x-frontend-layout>
    <div class="page-title-area bg-24">
        <div class="container">
            <div class="page-title-content">
                <h2>Our Company</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">Company</li>
                </ul>
            </div>
        </div>
    </div>


    @include('partials_data.mengapaMilihKami')

    @include('partials_data.aboutUsPartial')

    @include('partials_data.counter')

    @include('partials_data.kirimPesan')

    @include('partials_data.client')
</x-frontend-layout>