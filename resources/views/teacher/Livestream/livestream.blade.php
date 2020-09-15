@extends('layouts.teacher')

@section('teacher')

<div class="row">
    <div class="col-xl-8 col-lg-8">
        <div class="section3125">
            <div id="meet" class="live1452">
                <!--<iframe id="meet" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            </div>
        </div>							
    </div>				
</div>

@stop

@section('js')
<script src='https://pharmcon.co.in/external_api.js'></script>
<script>
const domain = 'pharmcon.co.in';
const options = {
    roomName: '{{ $topic }}',
    width: 900,
    height: 500,
    parentNode: document.querySelector('#meet')
};
const api = new JitsiMeetExternalAPI(domain, options);
</script>
@stop