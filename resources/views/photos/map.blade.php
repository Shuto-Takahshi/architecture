<a class="btn shadow-none border py-1" data-toggle="modal" data-target="#modal-{{ $photo->user_id }}">
    <i class="fas fa-map-marker-alt mr-1"></i>map
</a>
<div id="modal-{{ $photo->user_id }}" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header my-auto">
                <div class="modal-title d-flex" id="modal-{{ $photo->user_id }}">
                    <i class="fas fa-map-marker-alt mr-1 my-auto"></i>
                    {{ $photo->address }}
                </div>
                <button type="button" class="close btn shadow-none" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id='map'
                    src='https://www.google.com/maps/embed/v1/place?key=AIzaSyBLs8IhYFj1bkP0krvivOTMHiABp5dOIzI&q={{ $photo->address }}'
                    width='100%'
                    height='320'
                    frameborder='0'>
                </iframe>
            </div>
        </div>
    </div>
</div>
