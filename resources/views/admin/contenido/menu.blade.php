<div id="options">
  <ul id="filters" class="option-set" data-option-key="filter">
    <li><a href="{{ route('admin::index')}}" data-option-value="*">Todo</a></li>
    <li><a href="{{ route('admin::pdfProfesores')}}" data-option-value=".pdfpr">PDF PARA PROFESORES</a></li>                   
    <li><a href="{{ route('admin::pdfPadres')}}" data-option-value=".pdfpa">PDF PARA PADRES</a></li>
    <li><a href="{{ route('admin::videoPrimaria')}}" data-option-value=".video">VIDEOS PRIMARIA</a></li>
    <li><a href="{{ route('admin::videoSecundaria')}}" data-option-value=".video2">VIDEOS SECUNDARIA</a></li>
  </ul>
</div>