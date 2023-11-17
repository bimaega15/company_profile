<x-frontend-layout>
    @push('custom_css')
        <style>
            .banner-content h1 p {
                font-size: 60px;
            }
        </style>
    @endpush
    @include('partials_data.banner')

    @include('partials_data.servicePartial')

    @include('partials_data.client')

    @include('partials_data.aboutUsPartial')

    @include('partials_data.service')

    @include('partials_data.mengapaMilihKami')

    @include('partials_data.counter')

    {{-- @include('partials_data.hargaKami') --}}

    @include('partials_data.testimoni')

    @include('partials_data.shipment')

    @include('partials_data.faq');

    @include('partials_data.timKami')

    @include('partials_data.blogsLimit')

    @include('partials_data.kirimPesan')

</x-frontend-layout>
