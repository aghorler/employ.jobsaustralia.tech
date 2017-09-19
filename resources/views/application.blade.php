@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Application</strong></div>

                <div class="panel-body">
				 <p><strong>Name:</strong> {{ $name }}</p>
                    <p><strong>Email:</strong> {{ $email }}</p>
                    <p><strong>Job Title:</strong> {{ $title }}</p>
                    <p><strong>Sector:</strong> {{ $sector }}</p>
                    <p><strong>Experience:</strong> {{ $experience }} @if ($experience == 1) year @else years @endif</p>
                    <p><strong>Location:</strong> {{ $city }}, @if ($state == "vic") Victoria @elseif ($state == "nsw") New South Wales @elseif ($state == "qld") Queensland @elseif ($state == "wa") Western Australia @elseif ($state == "sa") South Australia @elseif ($state == "tas") Tasmania @elseif ($state == "act") Australian Capital Territory @elseif ($state == "nt") Northern Territory @elseif ($state == "oth") Other Australian Region @endif</p>
					<p><strong>Skills:</strong> @if ($java) Java @endif @if ($python) &bull; Python @endif @if ($c) &bull; C @endif @if ($csharp) &bull; C Sharp @endif @if ($cplus) &bull; C++ @endif @if ($php) &bull; PHP @endif @if ($html) &bull; HTML @endif @if ($css) &bull; CSS @endif @if ($javascript) &bull; JavaScript @endif @if ($sql) &bull; SQL @endif @if ($unix) &bull; Unix @endif 
					@if ($winserver) &bull; Windows Server @endif @if ($windesktop) &bull; Windows Server @endif @if ($linuxdesktop) &bull; Linux Desktop @endif @if ($macosdesktop) &bull; MacOS Desktop @endif @if ($pearl) &bull; Pearl @endif @if ($bash) &bull; Bash @endif @if ($batch) &bull; Batch @endif @if ($cisco) &bull; Cisco @endif @if ($office) &bull; Office @endif @if ($r) &bull; R @endif @if ($go) &bull; Go @endif @if ($ruby) &bull; Ruby @endif @if ($asp) &bull; ASP @endif @if ($scala) &bull; Scala @endif</p>
					<hr>
					
					<p>{{ $message }}</p>
                    
					<hr><p>
                    <button type="submit" class="btn btn-danger">
                    Reject
                    </button>
                    </p>
                </div>
        </div>
    </div>
</div>
@endsection
