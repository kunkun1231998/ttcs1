<!-- Menu -->
@php
function dataTree($data, $parent_id = null, $level = 0, $result_type = 'tree')
{
	$result = [];
	foreach ($data as $key => $item) {
		if ($item->parent_id === $parent_id) {
			$item->level = $level;
			$children = dataTree($data, $item->id, ++$level, $result_type);
			if ($result_type === 'flat') {
				$result[] = $item;
				$result = array_merge($result, $children);
			} else {
				$item->children = $children;
				$result[] = $item;
			}
		}
	}
	return $result;
}
$categories = dataTree($categories->toArray());
@endphp
<header class="clearfix">
	<nav id="main-menu" class="left navigation">
		<ul class="sf-menu no-bullet inline-list m0">
			<li><a href="">Trang Chủ</a></li>
			@foreach ($categories as $cate)
				<li>
					<a href="category/{{ $cate->slug }}">{{ $cate->name }}</a>
					@if (!empty($cate->children))
						
					<ul class="sf-menu no-bullet inline-list m0">
						@foreach ($cate->children as $children)
						<li class="p-3">
							<a href="category/{{ $children->slug }}">{{ $children->name }}</a>
						</li>
						@endforeach
					</ul>
					@endif
	    		</li>
			@endforeach
    		<li><a href="contact.html">Liên Hệ</a></li>
		</ul>
	</nav>

	<div class="search-bar right clearfix">
		<form action="{{route('search')}}" method="get">
			<input name="key" type="text" data-value="search" value="search">
			<input type="submit" value="">
		</form>
	</div>
</header>
