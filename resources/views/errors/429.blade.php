@extends('errors::minimal')

@section('title', __('Demasiadas peticiones'))
@section('code', '429')
@section('message', __('Por favor, espera un momento antes de intentarlo de nuevo.'))
