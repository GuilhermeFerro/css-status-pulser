<span
        {{ $attributes->merge(['class' => 'fa-stack-ping']) }}
        @isset($title)
          title="{{ $title }}"
          data-toggle="tooltip"
          data-original-title="{{ $title }}"
        @endisset
>
  <i class="fa-solid fa-{{ $fa ?? "circle" }} fa-stack-1x text-{{$text ?? "success"}}"></i>
  <i class="fa-solid fa-circle fa-stack-1x text-{{$text ?? "success"}} fa-animate-ping"></i>
</span>
