@extends('emailbase')
@section('content')
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td bgcolor="{{ $color or '#ef3101' }}" nowrap><img border="0" src="{{ asset('/img/spacer.gif') }}" width="5" height="1"></td>
		<td width="100%" bgcolor="#ffffff">

			<table width="100%" cellpadding="20" cellspacing="0" border="0">
				<tr>
					<td bgcolor="#ffffff" class="contentblock">
  <h3>Hola {{ $name }},</h3>
  <h4>Estos son los resultados del test!</h4>
  @foreach ($results as $result)
    <h4><strong>{{ $result->name }}</strong></h4>
    <p>{{ $result->desc }}</p>
    @if ($result->count >= $result->max)
    <p>{{ $result->max_desc }}</p>
    @elseif ($result->count >= $result->avg)
    <p>{{ $result->avg_desc }}</p>
    @else
    <p>{{ $result->min_desc }}</p>
    @endif
  @endforeach
        </td>
      </tr>
    </table>

  </td>
</tr>
</table>
<img border="0" src="{{ asset('/img/spacer.gif') }}" width="1" height="15" class="divider"><br>
@stop
