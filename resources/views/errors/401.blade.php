@extends('errors::minimal')

@section('title', __('Acceso no autorizado'))
@section('code', '401')
@section('message', __('Por favor, inicia sesión con las credenciales correctas.'))
