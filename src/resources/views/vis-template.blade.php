  <style type="text/css">
    #{!! $element !!} {
/*      width: 600px;*/
      height: 600px;
/*      border: 1px solid lightgray;*/
    }
  </style>
<div id="{!! $element !!}" width="{!! $size['width'] !!}" height="{!! $size['height'] !!}">
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        (function() {
    		"use strict";
            let ctx = document.getElementById("{!! $element !!}");


    // create an array with nodes
    var nodes = [{id: -1, shape:"circularImage", image:"/img/wbw_logo_center_nodes.png",
        size: 40, color: '#999', borderWidth: 1}];
    var edges = [];
    nodes.push({id: 7905, label: 'loyal', value: 500, group: 'big1'});
    edges.push({from: -1, to: 7905, label: 62, length: 40});
    nodes.push({id: 7886, label: 'sensitive', value: 100, group: 'big1'});
    edges.push({from: 7905, to: 7886, label: 68, length: 40});
    nodes.push({id: 7848, label: 'acceptance', value: 100, group: 'big1'});
    edges.push({from: 7905, to: 7848, label: 83, length: 40});
    nodes.push({id: 7840, label: 'selfless', value: 100, group: 'big1'});
    edges.push({from: 7905, to: 7840, label: 103, length: 40});
    nodes.push({id: 7917, label: 'unselfish', value: 100, group: 'big1'});
    edges.push({from: 7905, to: 7917, label: 129, length: 40});
    
    nodes.push({id: 7901, label: 'strictly', value: 500, group: 'big2'});
    edges.push({from: -1, to: 7901, label: 26, length: 40});
    nodes.push({id: 7890, label: 'unattached', value: 100, group: 'big2'});
    edges.push({from: 7901, to: 7890, label: 51, length: 40});
    nodes.push({id: 7906, label: 'self-directed', value: 100, group: 'big2'});
    edges.push({from: 7901, to: 7906, label: 52, length: 40});
    nodes.push({id: 7891, label: 'greedy', value: 100, group: 'big2'});
    edges.push({from: 7901, to: 7891, label: 52, length: 40});
    nodes.push({id: 7841, label: 'concrete', value: 100, group: 'big2'});
    edges.push({from: 7901, to: 7841, label: 69, length: 40});
    
    nodes.push({id: 7912, label: 'impatient', value: 500, group: 'big3'});
    edges.push({from: -1, to: 7912, label: 2, length: 40});
    nodes.push({id: 7878, label: 'rancorous', value: 100, group: 'big3'});
    edges.push({from: 7912, to: 7878, label: 18, length: 40});
    nodes.push({id: 7924, label: 'unpredictable', value: 100, group: 'big3'});
    edges.push({from: 7912, to: 7924, label: 20, length: 40});
    nodes.push({id: 7842, label: 'reserved', value: 100, group: 'big3'});
    edges.push({from: 7912, to: 7842, label: 20, length: 40});
    nodes.push({id: 7904, label: 'apathetic', value: 100, group: 'big3'});
    edges.push({from: 7912, to: 7904, label: 22, length: 40});
         
    nodes.push({id: 7895, label: 'social', value: 500, group: 'big4'});
    edges.push({from: -1, to: 7895, label: 11, length: 40});
    nodes.push({id: 7884, label: 'reckless', value: 100, group: 'big4'});
    edges.push({from: 7895, to: 7884, label: 12, length: 40});
    nodes.push({id: 7893, label: 'leader', value: 100, group: 'big4'});
    edges.push({from: 7895, to: 7893, label: 25, length: 40});
    nodes.push({id: 7881, label: 'flexible', value: 100, group: 'big4'});
    edges.push({from: 7895, to: 7881, label: 29, length: 40});
    nodes.push({id: 7911, label: 'stand out', value: 100, group: 'big4'});
    edges.push({from: 7895, to: 7911, label: 37, length: 40});

    nodes.push({id: 7897, label: 'emotional', value: 500, group: 'big5'});
    edges.push({from: -1, to: 7897, label: 1, length: 40});
    nodes.push({id: 7923, label: 'fantasy', value: 100, group: 'big5'});
    edges.push({from: 7897, to: 7923, label: 36, length: 40});
    nodes.push({id: 7902, label: 'hopeful', value: 100, group: 'big5'});
    edges.push({from: 7897, to: 7902, label: 53, length: 40});
    nodes.push({id: 7908, label: 'dreamer', value: 100, group: 'big5'});
    edges.push({from: 7897, to: 7908, label: 75, length: 40});
    nodes.push({id: 7903, label: 'unfamiliar', value: 100, group: 'big5'});
    edges.push({from: 7897, to: 7903, label: 78, length: 40});

    var data = {
        nodes: nodes,
        edges: edges
    };
    console.log(data);

    console.log({!! json_encode($datasets) !!});

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
