@props(['size' => 35, 'color' => 'white'])

@php
switch ($color) {
    case 'sky':
        $col = '#0284c7';
        break;
    case 'white':
        $col = '#ffffff';
        break;

    default:
        $col = '#0284c7';
        break;
}
@endphp

<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="{{$size}}" height="{{$size}}" viewBox="0 0 172 172"
    style=" fill:#000000;">
    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
        <path d="M0,172v-172h172v172z" fill="none"></path>
        <g fill="{{$col}}">
            <path
                d="M14.33333,14.33333v14.33333h17.07682l7.16667,14.33333h34.4196l-37.05111,78.83333h107.38802v-14.33333h-84.82422l6.74675,-14.33333h60.7347l36.85514,-64.5h-115.42252l-7.16667,-14.33333zM0,57.33333v14.33333h43.71387l6.73275,-14.33333zM0,86v14.33333h30.24837l6.73275,-14.33333zM57.31934,129.014c-7.91608,0 -14.33333,6.41725 -14.33333,14.33333c0,7.91608 6.41725,14.33333 14.33333,14.33333c7.91608,0 14.33333,-6.41725 14.33333,-14.33333c0,-7.91608 -6.41725,-14.33333 -14.33333,-14.33333zM128.986,129.014c-7.91608,0 -14.33333,6.41725 -14.33333,14.33333c0,7.91608 6.41725,14.33333 14.33333,14.33333c7.91608,0 14.33333,-6.41725 14.33333,-14.33333c0,-7.91608 -6.41725,-14.33333 -14.33333,-14.33333z">
            </path>
        </g>
    </g>
</svg>
