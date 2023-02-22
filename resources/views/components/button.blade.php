@if($type !== 'link')
    <button aria-label="Edit profile button"
            class="Admin_actionButton__shxAk Admin_small__FS3D4  pull-right"><i
                class="las la-edit"></i><span class="fw-500">Edit profile</span></button>
@else
    <a href="/admin/link-categories" aria-label="Link Categories button" data-aos="zoom-in-down" data-aos-delay="50"
       class="btn btn-large Admin_actionButton__shxAk Admin_large__tqsq_ null aos-init aos-animate">
       
        <span class="fw-500">{{$name}}</span>
    </a>
@endif




