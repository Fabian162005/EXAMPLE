<div class="polls-container-3d">
    <!-- Encuestas Provinciales -->
    <div class="poll-card-3d">
        <div class="poll-header">
            <h3>Encuestas Provinciales</h3>
            <div class="poll-toggle" data-target="provincial-polls">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        <div class="poll-content" id="provincial-polls">
            @foreach ($provinciales as $encuesta)
                <a href="{{ url('encuestas/' . Str::slug($encuesta->nombre)) }}" class="poll-item">
                    <div class="poll-icon"><i class="fas fa-city"></i></div>
                    <div class="poll-info">
                        <h4>{{ $encuesta->nombre }}</h4>
                        <p>Última encuesta: {{ $encuesta->created_at->format('d M Y') }}</p>
                    </div>
                    <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                </a>
            @endforeach
        </div>
    </div>

    <!-- Encuestas Distritales -->
    <div class="poll-card-3d">
        <div class="poll-header">
            <h3>Encuestas Distritales</h3>
            <div class="poll-toggle" data-target="district-polls">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        <div class="poll-content" id="district-polls">
            @foreach ($distritales as $encuesta)
                <a href="{{ url('encuestas/' . Str::slug($encuesta->nombre)) }}" class="poll-item">
                    <div class="poll-icon"><i class="fas fa-landmark"></i></div>
                    <div class="poll-info">
                        <h4>{{ $encuesta->nombre }}</h4>
                        <p>Última encuesta: {{ $encuesta->created_at->format('d M Y') }}</p>
                    </div>
                    <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                </a>
            @endforeach
        </div>
    </div>
</div>
