<div class="dropdown">
    <a href="" data-toggle="dropdown" v-on="click: action">Pilihan <span class="caret"></span></a>
    <ul class="dropdown-menu" aria-labelledby="dLabel">
        <li>
            <a href="{{route($route . '.show', $id)}}"><span class="fa fa-search"></span> Lihat</a>
        </li>
        <li>
            <a href="{{route($route . '.edit', $id)}}"><span class="fa fa-pencil"></span> Edit</a>
        </li>
    </ul>
</div>