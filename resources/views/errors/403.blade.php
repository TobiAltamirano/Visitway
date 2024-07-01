@extends('errors::minimal')

@section('title', __('Acceso prohibido'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
