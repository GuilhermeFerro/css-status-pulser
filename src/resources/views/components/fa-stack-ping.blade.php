<span class="fa-stack-ping" @isset($title) data-toggle="tooltip" data-original-title="{{ $title }}" @endisset>
  <i class="fa fa-{{ $fa ?? "circle" }} fa-stack-1x text-{{$text ?? "success"}}"></i>
  <i class="fa fa-circle fa-stack-1x text-{{$text ?? "success"}} fa-animate-ping"></i>
</span>

@once
    @FaStackPingCss()
@endonce
