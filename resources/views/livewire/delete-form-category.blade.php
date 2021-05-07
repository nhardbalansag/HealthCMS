<div>
    <a wire:click='delete({{ $form_category_id }})' class="btn btn-primary" role="button"><i class="fas fa-trash"></i></a>
    <div wire:loading>
        @include('components.includes.loading-state')
    </div>
</div>
