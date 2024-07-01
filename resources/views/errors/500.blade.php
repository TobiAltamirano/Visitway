@extends('errors::minimal')

@section('title', __('Error interno del servidor'))
@section('code', '500')
@section('message', __('Estamos experimentando problemas técnicos, por favor inténtalo más tarde.'))
