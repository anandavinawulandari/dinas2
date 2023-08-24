<ul id="myUL">
@foreach ($indexs as $data)
	<li><a href="{{ route('surattugas.index', $data->id) }}"><span style="color:#737373;padding-right:1em;" class="glyphicon glyphicon-folder-open"></span> {{ $data->perihal }}  <span class="from">dari</span>  {{ $data->tgl_surat }}</a></li>
	 @endforeach
</ul>