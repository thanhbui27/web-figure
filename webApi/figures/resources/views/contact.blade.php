@extends('layouts.layout')
@section('title','contact')
@section('mains')
        <div class="body">
          <div class="none"></div>
          <div class="container-contact">
            <div class="row">
              <div class="contact-content">
                  <div class="contacts">
                    <div class="list">
                     {!! $contact -> lefts !!}
                    </div>
                  </div>
              </div>
              <div class="contact-map">
              {!! $contact -> rights !!}
              </div>
            </div>
          </div>
        </div>

@stop()