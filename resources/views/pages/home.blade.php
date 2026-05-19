@extends('layouts.app')
@section('content')
    @include('pages.home-sections.hero')
    @include('pages.home-sections.about')
    @include('pages.home-sections.proka')


    @include('pages.home-sections.facilities')
    @include('pages.home-sections.certificates')

    {{-- Tambahan: Kehidupan Siswa --}}
    @include('pages.home-sections.extracurricular')
    {{-- @include('pages.home-sections.gallery') --}}

    @include('pages.home-sections.achievements')

    {{-- Tambahan: Social Proof & Update --}}
    {{-- @include('pages.home-sections.testimonials') --}}
    {{-- @include('pages.home-sections.news') --}}

    {{-- Tambahan: Penutup/Kontak --}}
    @include('pages.home-sections.contact')
@endsection
