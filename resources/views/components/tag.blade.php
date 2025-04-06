@props(["tag","size"=>"base"])

@php
    $classes='bg-white/10 rounded-xl text-xs px-3 font-bold py-1 hover:bg-white/25';
    if($size=="base"){
        $classes .=' px-5 py-1 text-sm';
    }
    if($size=="small"){
        $classes .=' tpx-3 py-1 text-xs';
    }
@endphp




<a
 class='bg-white/10 rounded-xl text-xs px-3 font-bold py-1 hover:bg-white/25'
 href="/tags/{{ strtolower($tag->name) }}">
 {{ $tag->name }}
</a>
