---
{!! $frontmatter !!}
---

@if($group)
# {{$group}}
@endif
@if($writeCompareFile === true)
{!! $route['output']!!}
@else
{!! isset($route['modified_output']) ? $route['modified_output'] : $route['output']!!}
@endif
