@props(['size' => 35, 'color' => 'red'])
@php
    switch ($color) {
        case 'red':
            $col ="#ff0019";
            break;
        case 'white':
            $col ="#ffffff";
        break;

        default:
            $col ="#ff0019";
            break;
    }
@endphp

<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 226 226"
    style=" fill:#000000;">
    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
        <path d="M0,226v-226h226v226z" fill="none"></path>
        <g fill="{{ $col }}">
            <path
                d="M84.75,18.83333c-36.29323,0 -65.91667,29.62343 -65.91667,65.91667c0,36.29324 29.62343,65.91667 65.91667,65.91667c16.46031,0 31.49883,-6.13944 43.0739,-16.1849l4.00944,4.00944v12.17546l56.5,56.5l18.83333,-18.83333l-56.5,-56.5h-12.17546l-4.00944,-4.00944c10.04546,-11.57506 16.1849,-26.61358 16.1849,-43.0739c0,-36.29323 -29.62343,-65.91667 -65.91667,-65.91667zM84.75,37.66667c26.11494,0 47.08333,20.96839 47.08333,47.08333c0,26.11494 -20.96839,47.08333 -47.08333,47.08333c-26.11494,0 -47.08333,-20.96839 -47.08333,-47.08333c0,-26.11494 20.96839,-47.08333 47.08333,-47.08333z">
            </path>
        </g>
    </g>
</svg>
