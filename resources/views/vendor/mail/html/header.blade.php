<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === "Controle de Tarefas")
<img src="{{asset('images/logos/logo.png')}}" class="logo" alt="Controle de Tarefas Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
