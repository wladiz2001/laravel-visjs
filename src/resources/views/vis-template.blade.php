<div id="{!! $element !!}" width="{!! $size['width'] !!}" height="{!! $size['height'] !!}">
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        (function() {
    		"use strict";
            let ctx = document.getElementById("{!! $element !!}");

            window.{!! $element !!} = new vis.{!! $type !!}(ctx, 
                {!! json_encode($datasets) !!}, 
                @if(!empty($optionsRaw))
                    {!! $optionsRaw !!}
                @elseif(!empty($options))
                    {!! json_encode($options) !!}
                @endif
            );
        })();
    });
</script>
</div>
