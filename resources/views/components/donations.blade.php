@props(['donor'])
@php
$name = [];
@endphp
@forelse ($donor->donations as $donation)

@php
    $name[] = $donation->amount
@endphp
    
@empty
    
@endforelse 
{{ array_sum($name) }}